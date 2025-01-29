@extends('layout')

@section('title', 'Torres')

@section('content')
<h1 class="text-center">Torres</h1>

<button class="btn btn-primary"><a href="{{route('torre.create')}}"
        class="link-light link-offset-2 link-underline link-underline-opacity-0">Crear Torre</a></button>
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
        
            @foreach ($torres as $torre )
                <tr>
                    <td>{{$torre->id}}</td>
                    <td>{{$torre->nombre}}</td>
                    <td>{{$torre->conjunto->nombre}}</td>
                    <td>
                    <button class="btn btn-success"><a href="{{route('torre.edit', $torre)}}"
                            class="link-light link-offset-2 link-underline link-underline-opacity-0">Editar</a></button>
                    <button class="btn btn-danger"><a href="{{route('torre.delete', $torre)}}"
                            class="link-light link-offset-2 link-underline link-underline-opacity-0"
                            onclick="return confirm('Seguro de Eliminar')">Eliminar</a></button>
                    </td>
                </tr>
            @endforeach            
    </tbody>
</table>
@endsection
