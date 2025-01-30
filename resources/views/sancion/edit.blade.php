@extends('layout')

@section('title', 'Editar Sancion')

@section('content')
<div class="container">
    <h1 class="text-center">Editar un Sancion</h1>

    @if (session('success'))
        <p>{{session('success')}}</p>
    @endif


    <form action="{{route('sancion.update', $sancion)}}" method="post">

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
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre de la Sancion</span>
            <input type="text" name="descripcion" value="{{$sancion->descripcion}}" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>
        <label for="usuario_id">usuario</label>
        <select class="form-select" aria-label="Default select example" name="usuario_id" id="usuario_id">
            @foreach ($usuarios as $usuario)
                <option value="{{$usuario->id}}" {{$sancion->usuario_id == $usuario->id ? 'selected' : '' }}>
                    {{$usuario->nombre}}
                </option>
            @endforeach
        </select>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
        <button class="btn btn-danger"><a href="{{route('sancion.index')}}"
                class="link-light link-offset-2 link-underline link-underline-opacity-0">Cancelar</a></button>



    </form>
</div>

@endsection