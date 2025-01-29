<?php

namespace App\Http\Controllers;

use App\Models\conjunto;
use App\Models\Torre;
use Illuminate\Http\Request;

class TorreController extends Controller
{
    
    public function index()
    {
        $torres = Torre::get();
        return view("torre.index", compact('torres'));
    }

    
    public function create()
    {
        $conjuntos = conjunto::all();
        return view('torre.create' , ['conjuntos'=> $conjuntos]);
    }

   
    public function store(Request $request)
    {
        Torre::create($request->all());

        return to_route('torre.index')->with('success', 'GUARDADO CORRECTAMENTE');
    }


    
    public function show(Torre $torre)
    {
        //
    }


    public function edit(Torre $torre)
    {
        $conjuntos = conjunto::all();
        return view('torre.edit', compact('torre'), ['conjuntos' => $conjuntos]);
    }

   
    public function update(Request $request, Torre $torre)
    {
        $torre->update($request->all());
        return to_route('torre.index')->with('success','EDITADO CORRECTAMENTE');
    }

    
    public function destroy(Torre $torre)
    {
        $torre->delete();
        return to_route('torre.index')->with('success','ELIMINADO CORRECTAMENTE');
    }
}
