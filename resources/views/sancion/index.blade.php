@extends('layout')

@section('title', 'Sanciones')

@section('content')

<h1 class="text-center">Sanciones</h1>

@if (session('success'))
    <p>{{session('success')}}</p>
@endif

<br>
<button class="btn btn-primary"><a href="{{route('sancion.create')}}"
        class="link-light link-offset-2 link-underline link-underline-opacity-0">Crear una sancion</a></button>
<br><br>
<!-- <form class="d-inline-flex p-2" role="search" action="{{route('sancion.index')}}" method="GET">
    <input class="form-control me-2" type="search" placeholder="Buscar sancion...." name="search" aria-label="Search"
        value="{{request('search')}}">
    <button class="btn btn-outline-success" type="submit">Buscar</button>
</form> -->


<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descripcion</th>
            <th>Usuario</th>
            <th>Apartamento</th>
            <th>Torre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($sanciones as $sancion)
            <tr>
                <td>{{$sancion->id}}</td>
                <td>{{$sancion->descripcion}}</td>
                <td>{{$sancion->usuario->nombre}}</td>
                <th>{{$sancion->usuario->apartamento->nombre}}</th>
                <th>{{$sancion->usuario->apartamento->torre->nombre}}</th>
                <td>
                    <button class="btn btn-success"><a href="{{route('sancion.edit', $sancion)}}"
                            class="link-light link-offset-2 link-underline link-underline-opacity-0">Editar</a></button>
                    <button class="btn btn-danger"><a href="{{route('sancion.delete', $sancion)}}"
                            class="link-light link-offset-2 link-underline link-underline-opacity-0"
                            onclick="return confirm('Seguro de Eliminar')">Eliminar</a></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection