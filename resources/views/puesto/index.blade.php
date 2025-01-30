@extends('layout')

@section('title', 'puestos')

@section('content')
<h1 class="text-center">puestos</h1>

<button class="btn btn-primary"><a href="{{route('puesto.create')}}"
        class="link-light link-offset-2 link-underline link-underline-opacity-0">Crear puesto de parqueadero</a></button>
<br><br>

@if (session('success'))
    <p>{{session('success')}}</p>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Apartamento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        
            @foreach ($puestos as $puesto )
                <tr>
                    <td>{{$puesto->id}}</td>
                    <td>{{$puesto->nombre}}</td>
                    <td>{{$puesto->usuario->nombre}}</td>
                    <td>
                    <button class="btn btn-success"><a href="{{route('puesto.edit', $puesto)}}"
                            class="link-light link-offset-2 link-underline link-underline-opacity-0">Editar</a></button>
                    <button class="btn btn-danger"><a href="{{route('puesto.delete', $puesto)}}"
                            class="link-light link-offset-2 link-underline link-underline-opacity-0"
                            onclick="return confirm('Seguro de Eliminar')">Eliminar</a></button>
                    </td>
                </tr>
            @endforeach            
    </tbody>
</table>
@endsection
