@extends ('layout')

@section('title', 'Conjuntos')

@section('content')

<h1 class="text-center">Conjuntos</h1>

<button class="btn btn-primary">
    <a href="{{route('conjunto.create')}}" class="link-light link-offset-2 link-underline link-underline-opacity-0">
        Crear Conjunto
    </a>
</button>
<br><br>

@if (session('success'))
    <p>{{session('success')}}</p>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($conjuntos as $conjunto)
            <tr>
                <td>{{$conjunto->id}}</td>
                <td>{{$conjunto->nombre}}</td>
                <td>{{$conjunto->direccion}}</td>
                <td>
                <button class="btn btn-success"><a href="{{route('conjunto.edit', $conjunto)}}"
                            class="link-light link-offset-2 link-underline link-underline-opacity-0">Editar</a></button>
                    <button class="btn btn-danger"><a href="{{route('conjunto.delete', $conjunto)}}"
                            class="link-light link-offset-2 link-underline link-underline-opacity-0"
                            onclick="return confirm('Seguro de Eliminar')">Eliminar</a></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection