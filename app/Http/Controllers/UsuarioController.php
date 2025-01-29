<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use App\Models\Torre;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
   
    public function index(Request $request)
    {
        $query = Usuario::query();

        if ($request->has("search")) {
            $query->where("nombre","LIKE","%". $request->search ."%");
        }
        
        $usuarios = $query->get();
        // $usuarios = Usuario::all();
        return view("usuario.index", compact("usuarios"));
    }

  
    public function create()
    {
        $apartamentos = Apartamento::with("torre", "conjunto")->get();
        $torres = Torre::with("conjunto")->get();
        return view("usuario.create", compact("apartamentos"),["torres"=>$torres]);

    }

   
    public function store(Request $request)
    {
        $usuarios = Usuario::create($request->all());
        return to_route("usuario.index",)->with("success","INGRESADO CORRECTAMENTE");
    }

    
    public function show(Usuario $usuario)
    {
        //
    }

   
    public function edit(Usuario $usuario)
    {
        $apartamentos = Apartamento::all();
        $torres = Torre::all();
        return view("usuario.edit", compact("usuario"),["apartamentos"=>$apartamentos,"torres"=>$torres]);

    }

    
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->update($request->all());
        return to_route("usuario.index", $usuario)->with("success","EDITADO CORRECTAMENTE");
    }

    
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return to_route("usuario.index",)->with("success","ELIMINADO CORRECTAMENTE");
    }
}
