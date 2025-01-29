<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConjuntoRequest;
use App\Http\Requests\UpdateConjuntoRequest;
use App\Models\conjunto;
use Illuminate\Http\Request;

class ConjuntoController extends Controller
{
    public function index()
    {
        $conjuntos = conjunto::get();
        return view("conjunto.index", compact('conjuntos'));
    }

    
    public function create()
    {
       $conjuntos = conjunto::all();
        return view('conjunto.create' , ['conjuntos'=> $conjuntos]);
    }

    
    public function store(StoreConjuntoRequest $request)
    {
        conjunto::create($request->all());

        return to_route('conjunto.index')->with('success', 'GUARDADO CORRECTAMENTE');
    }

    
    public function show(conjunto $conjunto)
    {
        //
    }

    
    public function edit(conjunto $conjunto)
    {    
        return view('conjunto.edit',compact('conjunto'));
    }

   
    public function update(UpdateConjuntoRequest $request, conjunto $conjunto)
    {
        $conjunto->update($request->all());

        return to_route('conjunto.index')->with('success','EDITADO CORRECTAMENTE');
    }

    
    public function destroy(conjunto $conjunto)
    {
        // dd($conjunto);
        $conjunto->delete();

        return to_route('conjunto.index')->with('success','ELIMINADO CORRECTAMENTE');
    }
}
