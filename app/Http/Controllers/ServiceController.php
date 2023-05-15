<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{

    public function getAllServices(){
        $data = DB::table('services')->select('id', 'description')->get();
        return response()->json($data);
    }

    public function getAllClients(){
        $data = DB::table('clients')->get();
        return response()->json($data);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();

        return view('back.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->get('title');
        $service->description = $request->get('description');
        $service->price = $request->get('price');
        $service->category = $request->get('category');

        $service->save();
        return redirect(route('services.index'));
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
