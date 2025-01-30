@extends('layout')

@section('title', 'Crear Parqueadero')

@section('content')
<div class="container">
    <h1 class="text.center">Crear un Parqueadero</h1>


    <form action="{{route('parqueadero.store')}}" method="post">

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
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre del Parqueadero</span>
            <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>
        <label for="direccion">Conjunto</label>
        <br>
        <select class="form-select" aria-label="Default select example" name="conjunto_id" id="conjunto_id">
            @foreach ($conjuntos as $conjunto)
                <option value="{{$conjunto->id}}">{{$conjunto->nombre}}</option>

            @endforeach
        </select>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
        <button class="btn btn-danger"><a href="{{route('parqueadero.index')}}"
                class="link-light link-offset-2 link-underline link-underline-opacity-0">Cancelar</a></button>


    </form>
</div>

@endsection