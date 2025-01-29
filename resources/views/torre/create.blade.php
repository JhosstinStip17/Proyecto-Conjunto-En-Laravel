@extends('layout')

@section('title', 'Crear torres')

@section('content')
<div class="container">
    <h1 class="text.center">Crear un Torre</h1>


    <form action="{{route('torre.store')}}" method="post">

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
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre de la torre</span>
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
        <button class="btn btn-danger"><a href="{{route('torre.index')}}"
                class="link-light link-offset-2 link-underline link-underline-opacity-0">Cancelar</a></button>


    </form>
</div>

@endsection