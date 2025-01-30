<?php

namespace App\Http\Controllers;

use App\Models\conjunto;
use App\Models\Parqueadero;
use Illuminate\Http\Request;

class ParqueaderoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parqueaderos = Parqueadero::all();
        return view("parqueadero.index", compact("parqueaderos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conjuntos = conjunto::all();
        return view("parqueadero.create", compact("conjuntos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Parqueadero::create($request->all());
        return to_route("parqueadero.index")->with("success","INGRESA CORRECTAMENTE");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parqueadero  $parqueadero
     * @return \Illuminate\Http\Response
     */
    public function show(Parqueadero $parqueadero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parqueadero  $parqueadero
     * @return \Illuminate\Http\Response
     */
    public function edit(Parqueadero $parqueadero)
    {
        $conjuntos = conjunto::all();
        return view('parqueadero.edit', compact('parqueadero'), ['conjuntos' => $conjuntos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parqueadero  $parqueadero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parqueadero $parqueadero)
    {
        $parqueadero->update($request->all());
        return to_route('parqueadero.index')->with('success','EDITADO CORRECTAMENTE');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parqueadero  $parqueadero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parqueadero $parqueadero)
    {
        $parqueadero->delete();
        return to_route('parqueadero.index')->with('success','ELIMINADO CORRECTAMENTE');
    
    }
}
