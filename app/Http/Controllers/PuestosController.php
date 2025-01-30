<?php

namespace App\Http\Controllers;

use App\Models\Parqueadero;
use App\Models\Puestos;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puestos = Puestos::with("parqueadero")->get();
        $usuarios = Usuario::with("apartamento")->get();
        return view("puesto.index", compact("puestos"), ["usuarios"=> $usuarios]);
    }

    
    public function create()
    {
        $parqueaderos = Parqueadero::all(); 
        $usuarios = Usuario::all();
         return view('puesto.create', compact ('parqueaderos'), ['usuarios'=> $usuarios]);
    }                

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(Puestos $puestos)
    {
        //
    }

    
    public function edit(Puestos $puestos)
    {
        //
    }

    
    public function update(Request $request, Puestos $puestos)
    {
        $puestos->update($request->all());
        return to_route("puesto.index",)->with('success', 'EDITADO CORRECTAMENTE');
    }

    
    public function destroy(Puestos $puestos)
    {
        $puestos->delete();
        return to_route('puesto.index')->with('success','PUESTO ELIMINADO CORRECTAMENTE');
    }
}
