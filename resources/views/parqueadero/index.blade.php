@extends('layout')
@section ('title','parqueadero')
@section ('content')

<h1>Parqueaderos</h1>

<a href="{{route('parqueadero.create')}}">Crear un Parqueadero</a>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>conjunto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($parqueaderos as $parqueadero)
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