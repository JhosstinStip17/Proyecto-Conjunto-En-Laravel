@extends('layout')

@section('title', 'Usuarios')

@section('content')

<h1 class="text-center">Usuarios</h1>

@if (session('success'))
    <p>{{session('success')}}</p>
@endif

<br>
<button class="btn btn-primary"><a href="{{route('usuario.create')}}"
        class="link-light link-offset-2 link-underline link-underline-opacity-0">Crear Usuario</a></button>
<br><br>
<form class="d-inline-flex p-2" role="search" action="{{route('usuario.index')}}" method="GET">
    <input class="form-control me-2" type="search" placeholder="Buscar usuario...." name="search" aria-label="Search"
        value="{{request('search')}}">
    <button class="btn btn-outline-success" type="submit">Buscar</button>
</form>


<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apartamento</th>
            <th>Torre</th>
            <th>Conjunto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->nombre}}</td>
                <td>{{$usuario->apartamento->nombre}}</td>
                <th>{{$usuario->apartamento->torre->nombre}}</th>
                <th>{{$usuario->apartamento->torre->conjunto->nombre}}</th>
                <td>
                    <button class="btn btn-success"><a href="{{route('usuario.edit', $usuario)}}"
                            class="link-light link-offset-2 link-underline link-underline-opacity-0">Editar</a></button>
                    <button class="btn btn-danger"><a href="{{route('usuario.delete', $usuario)}}"
                            class="link-light link-offset-2 link-underline link-underline-opacity-0"
                            onclick="return confirm('Seguro de Eliminar')">Eliminar</a></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection