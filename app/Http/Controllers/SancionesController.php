<?php

namespace App\Http\Controllers;
use App\Models\Torre;
use App\Models\Apartamento;
use App\Models\Sanciones;
use App\Models\Usuario;
use App\Models\Usuarios;
use Illuminate\Http\Request;



class SancionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanciones = Sanciones::all();
        return view("sancion.index", compact("sanciones"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartamentos = Apartamento::with("torre", "conjunto")->get();
        $usuarios = Usuario::with("conjunto")->get();
        return view("sancion.create", compact("usuarios"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sanciones::create($request->all());
        return to_route("sancion.index")->with("success", "CREADO CORRECTAMENTE");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sanciones  $sanciones
     * @return \Illuminate\Http\Response
     */
    public function show(Sanciones $sanciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sanciones  $sanciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Sanciones $sanciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sanciones  $sanciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sanciones $sanciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sanciones  $sanciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sanciones $sanciones)
    {
        //
    }
}
