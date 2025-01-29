@extends('layout')

@section('title', 'Apartamentos')

@section('content')

<h1 class="text-center">Apartamentos</h1>
<br>
<button class="btn btn-primary"><a href="{{route('apartamento.create')}}"
        class="link-light link-offset-2 link-underline link-underline-opacity-0">Crear Apartamento</a></button>


<br><br>
@if (session('success'))
    <p>{{session('success')}}</p>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Torre</th>
            <th>Conjunto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        
            @foreach ($apartamentos as $apartamento )
                <tr>
                    <td>{{$apartamento->id}}</td>
                    <td>{{$apartamento->nombre}}</td>
                    <td>{{$apartamento->torre->nombre}}</td>
                    <th>{{$apartamento->torre->conjunto->nombre}}</th>
                    <td>
                    <button class="btn btn-success"><a href="{{route('apartamento.edit', $apartamento)}}"
                            class="link-light link-offset-2 link-underline link-underline-opacity-0">Editar</a></button>
                    <button class="btn btn-danger"><a href="{{route('apartamento.delete', $apartamento)}}"
                            class="link-light link-offset-2 link-underline link-underline-opacity-0"
                            onclick="return confirm('Seguro de Eliminar')">Eliminar</a></button>
                    </td>
                </tr>
            @endforeach            
    </tbody>
</table>
@endsection