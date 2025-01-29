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
    
    public function index()
    {
        $sanciones = Sanciones::all();
        return view("sancion.index", compact("sanciones"));
    }

    
    public function create()
    {
        $apartamentos = Apartamento::with("torre", "conjunto")->get();
        $usuarios = Usuario::with("conjunto")->get();
        return view("sancion.create", compact("usuarios"));
    }

    
    public function store(Request $request)
    {
        Sanciones::create($request->all());
        return to_route("sancion.index")->with("success", "CREADO CORRECTAMENTE");
    }

    
    public function show(Sanciones $sanciones)
    {
        //
    }

    
    public function edit(Sanciones $sanciones)
    {
        //
    }

    
    public function update(Request $request, Sanciones $sanciones)
    {
        $sanciones->update($request->all());
        return to_route("sancion.index")->with("success","EDITADO CORRECTAMENTE");
    }

    
    
    public function destroy(Sanciones $sanciones)
    {
        $sanciones->delete();
        return to_route("sancion.index")->with("success","ELIMINADO CORRECTAMENTE");
    }
}
