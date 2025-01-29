<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use App\Models\Torre;
use Illuminate\Http\Request;

class ApartamentoController extends Controller
{
    
    public function index()
    {
        $apartamentos = Apartamento::all();
        return view("apartamento.index", compact("apartamentos"));
    }

    
    public function create()
    {
        $torres = Torre::with('conjunto')->get();
        return view("apartamento.create", compact("torres"));
    }

   
    public function store(Request $request)
    {
        Apartamento::create($request->all());
        return to_route("apartamento.index")->with("success", "CREADO CORRECTAMENTE");
    }

  
    public function show(Apartamento $apartamento)
    {
        //
    }

    
    public function edit(Apartamento $apartamento)
    {
        $torres = Torre::all();
        return view("apartamento.edit", compact("apartamento"), ['torres'=>$torres]);
    }

   
    public function update(Request $request, Apartamento $apartamento)
    {
        $apartamento->update($request->all());
        return to_route('apartamento.index')->with('success','ACTUALIZADO CORRECTAMENTE');
    }

    
    public function destroy(Apartamento $apartamento)
    {
        $apartamento->delete();
        return to_route('apartamento.index')->with('success','ELIMINADO CORRECTAMENTE');
    }
}
