@extends('layout')

@section('title', 'Crear conjuntos')

@section('content')

<div class="container">
    <h1 class="text-center">Crear un conjunto</h1>


    <form action="{{route('conjunto.store')}}" method="post">

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
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre del conjunto</span>
            <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Direccion del conjunto</span>
            <input type="text" name="direccion" value="{{old('direccion')}}" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <button class="btn btn-danger"><a href="{{route('conjunto.index')}}"
                class="link-light link-offset-2 link-underline link-underline-opacity-0">Cancelar</a></button>


    </form>
</div>

@endsection