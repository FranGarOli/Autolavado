<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Register;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registers = Register::all();
        return view('back.index', compact('registers'));
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
    public function store(Request $request)
    {
        //$register = new Register();

        if (Client::where('dni')->get() == $request->get('dni')){
            //creará registro con un cliente asociado
            echo 'Dni ya introducido';
        }else{
            //Crea el cliente
            $client = new Client();
            $client->name = $request->get('name');
            $client->dni = $request->get('dni');
            $client->email = $request->get('email');
            $client->phone = $request->get('phone');

            $client->save();

            $register = new Register();
            $register->client_id = $client->id;
            $register->status = "Recibido";
            $register->total = 10.99;

            $register->save();
        }

//
//        $register->total = $request->get('total');
//        $register->status = $request->get('status');
//        $register->save();

        return redirect(route('registers.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
