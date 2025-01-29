@extends('layout')

@section('title', 'Editar torres')

@section('content')
<div class="container">
    <h1 class="text-center">Editar un Torre</h1>

    @if (session('success'))
        <p>{{session('success')}}</p>
    @endif


    <form action="{{route('torre.update', $torre)}}" method="post">

        @csrf
        @method('PUT')

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre de la Torre</span>
            <input type="text" name="nombre" value="{{$torre->nombre}}" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>
        <label for="conjunto_id">Conjunto</label>
        <select class="form-select" aria-label="Default select example" name="conjunto_id" id="conjunto_id">
            @foreach ($conjuntos as $conjunto)
                <option value="{{$conjunto->id}}" {{$torre->conjunto_id == $conjunto->id ? 'selected' : '' }}>
                    {{$conjunto->nombre}}
                </option>
            @endforeach
        </select>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
        <button class="btn btn-danger"><a href="{{route('torre.index')}}"
                class="link-light link-offset-2 link-underline link-underline-opacity-0">Cancelar</a></button>



    </form>
</div>

@endsection