@extends('layout')

@section('title', 'Crear sancion')

@section('content')

<div class="container ">
    <h1 class="text-center">Crear un sancion</h1>

    <form action="{{route('sancion.store')}}" method="post">

        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre de la sancion</span>
            <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>
        <label for="usuario_id">usuario</label>
        <select class="form-select" aria-label="Default select example" name="usuario_id" id="usuario_id"
            onchange="updateTorres()">
            @foreach ($usuarios as $usuario)
                <option value="{{$usuario->id}}">{{$usuario->nombre}} - {{$usuario->torre->nombre}} - {{$usuario->torre->conjunto->nombre}}</option>
            @endforeach
        </select>
        <br>



        <button type="submit" class="btn btn-success">Guardar</button>
        <button class="btn btn-danger"><a href="{{route('sancion.index')}}"
                class="link-light link-offset-2 link-underline link-underline-opacity-0">Cancelar</a></button>


    </form>
</div>
@endsection