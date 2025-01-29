@extends('layout')

@section('title', 'Crear usuario')

@section('content')

<div class="container ">
    <h1 class="text-center">Crear un usuario</h1>

    <form action="{{route('usuario.store')}}" method="post">

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
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre del usuario</span>
            <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>
        <label for="apartamento_id">Apartamento</label>
        <select class="form-select" aria-label="Default select example" name="apartamento_id" id="apartamento_id"
            onchange="updateTorres()">
            @foreach ($apartamentos as $apartamento)
                <option value="{{$apartamento->id}}">{{$apartamento->nombre}} - {{$apartamento->torre->nombre}} - {{$apartamento->torre->conjunto->nombre}}</option>
            @endforeach
        </select>
        <br>



        <button type="submit" class="btn btn-success">Guardar</button>
        <button class="btn btn-danger"><a href="{{route('usuario.index')}}"
                class="link-light link-offset-2 link-underline link-underline-opacity-0">Cancelar</a></button>


    </form>
</div>
@endsection