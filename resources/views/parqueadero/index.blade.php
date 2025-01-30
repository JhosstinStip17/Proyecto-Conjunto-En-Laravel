@extends('layout') 
@section ('title','parqueadero')
@section ('content')

<h1>Parqueaderos</h1>
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
        
    </tr>
    @endforeach
    </tbody>
</table>

@endsection 