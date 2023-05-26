<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\RegisterService;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registers = Register::orderBy('created_at', 'desc')->simplePaginate(10);

        //contamos los registros con el estado en proceso
        $registersInProgress = Register::where('status', 'En proceso')->count();

        //sacamos los registros que sean para hoy
        $today = Carbon::today();
        $registersForToday = Register::whereDate('limitDate', $today)->count();

        $possibleStatusValues = ['Pendiente','Recibido', 'En proceso', 'Terminado', 'Pagado'];
        return view('back.index', compact('registers', 'possibleStatusValues', 'registersInProgress', 'registersForToday'));
    }

    public function inProgress()
    {
        //ordenamos los registros por el estado en progreso y los ponemos en prioridad en la cola de registros
        $registers = Register::orderByRaw("CASE WHEN status = 'En proceso' THEN 1 ELSE 2 END")
            ->simplePaginate(10);

        //contamos los registros con el estado en proceso
        $registersInProgress = Register::where('status', 'En proceso')->get()->count();

        //sacamos los registros que sean para hoy
        $today = Carbon::today();
        $registersForToday = Register::whereDate('limitDate', $today)->count();

        //mandamos los posibles estados del registro
        $possibleStatusValues = ['Pendiente','Recibido', 'En proceso', 'Terminado', 'Pagado'];

        /*devolvemos la vista con las variables de los registros ordenados,
            el num de registros con el estado En proceso y
            devolvemos los posibles estados.
        */

        return view('back.index', compact('registers', 'possibleStatusValues', 'registersInProgress', 'registersForToday'));
    }

    public function limitDateRegisters()
    {
        $registers = Register::orderBy('limitDate', 'asc')->simplePaginate(10);

        //contamos los registros con el estado en proceso
        $registersInProgress = Register::where('status', 'En proceso')->get()->count();

        //sacamos los registros que sean para hoy
        $today = Carbon::today();
        $registersForToday = Register::whereDate('limitDate', $today)->count();

        $possibleStatusValues = ['Pendiente','Recibido', 'En proceso', 'Terminado', 'Pagado'];
        return view('back.index', compact('registers', 'possibleStatusValues', 'registersInProgress', 'registersForToday'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.registers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {

        //creamos un registro nuevo
        $register = new Register();

        /* ------------------------ VALIDAR CLIENTE ------------------------
         SI EXISTE -> RELACIONAS EL client_id CON EL ID DEL CLIENTE EXISTENTE,
         SI NO EXISTE -> CREAS UN CLIENTE Y LO ASOCIAS AL REGISTRO QUE VAS A CREAR
        */

        //cogemos el nombre del cliente que hemos metido por el formulario
        $nameClientFormReceived = $request->get('name');
        //validamos si existe un cliente con ese nombre
        $existClient = Client::where('name', $nameClientFormReceived)->first();

        //si existe el client asocia el id al client_id
        if ($existClient){

            $register->client_id = $existClient->id;

        }

        //si no existe el cliente se crea
        else{

            $client = new Client();
            $client->name = $request->get('name');
            $client->dni = $request->get('dni');
            $client->phone = trim(chunk_split($request->get('phone'), 3, ' '));
            $client->email = $request->get('email');

            $client->save();

            //asociamos el registro que vamos a crear con el id del cliente recien generado
            $register->client_id = $client->id;
        }

        $register->plate = $request->get('plate');
        $register->model = $request->get('model');
        $register->entryDate = $request->get('limitDate');
        $register->limitDate = $request->get('limitDate');

        //creamos el servicio ahora para poder coger su id y asociar los servicios
        $register->save();


        /* ------------------------ ASOCIAR SERVICIOS AL REGISTRO  ------------------------
         POR CADA VALOR DEL ARRAY TRANSFORMADO -> CREARÁ UNA ENTIDAD EN register_service
         ASOCIANDO EL ID DEL REGISTRO CREADO CON EL ID DEL SERVICIO
        */

        //dividimos el array que nos llega del input servicios
        $arrayServicios = explode(",", $request->get('servicios'));

        //cogemos el titulo de cada servicio añadido
        $registros_servicios = DB::table('services')
            ->whereIn('title', $arrayServicios)
            ->get();

        //prueba utilizar metodo pluck, recoge todos los id asociados a el array servicios que tiene name de servicios
        $idsCollectionServiciosAsociados = $registros_servicios->pluck('id');
        echo "Array IDS de cada nombre de servicios: " .$idsCollectionServiciosAsociados;

        foreach ($idsCollectionServiciosAsociados as $idServicio){
            $register_service = new RegisterService();

            $register_service->register_id = $register->id;
            $register_service->service_id = $idServicio;

            $register_service->save();
        }

        return redirect(route('registers.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        $possibleStatusValues = ['Pendiente','Recibido', 'En proceso', 'Terminado', 'Pagado'];
        return view('back.registers.show', compact('register', 'possibleStatusValues'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Register $register)
    {
        $register->status = $request->get('valueNewStatus');
        $register->save();

        return redirect()->back()->with('mensaje', 'El estado del registro ha sido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        $register->delete();
        return redirect()->route('registers.index');
    }
}
