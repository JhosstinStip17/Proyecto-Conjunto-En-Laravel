@extends('layout')

@section('title', 'Parqueaderos')

@section('content')
<h1 class="text-center">Parqueaderos</h1>

<button class="btn btn-primary"><a href="{{route('parqueadero.create')}}"
        class="link-light link-offset-2 link-underline link-underline-opacity-0">Crear un Parqueadero</a></button>
<br><br>

@if (session('success'))
    <p>{{session('success')}}</p>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Conjunto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        
            @foreach ($parqueaderos as $parqueadero )
                <tr>
                    <td>{{$parqueadero->id}}</td>
                    <td>{{$parqueadero->nombre}}</td>
                    <td>{{$parqueadero->conjunto->nombre}}</td>
                    <td>
                    <button class="btn btn-success"><a href="{{route('parqueadero.edit', $parqueadero)}}"
                            class="link-light link-offset-2 link-underline link-underline-opacity-0">Editar</a></button>
                    <button class="btn btn-danger"><a href="{{route('parqueadero.delete', $parqueadero)}}"
                            class="link-light link-offset-2 link-underline link-underline-opacity-0"
                            onclick="return confirm('Seguro de Eliminar')">Eliminar</a></button>
                    </td>
                </tr>
            @endforeach            
    </tbody>
</table>
@endsection
