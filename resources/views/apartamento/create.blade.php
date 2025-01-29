@extends('layout')

@section('title', 'Crear apartamentos')

@section('content')

<div class="container">
    <h1 class="text-center">Crear un apartamento</h1>


    <form action="{{route('apartamento.store')}}" method="post">

        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre del apartamento</span>
            <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>
        <label for="torre_id">Torre</label>
        <select class="form-select" aria-label="Default select example" name="torre_id" id="torre_id" >
            @foreach ($torres as $torre)
                <option value="{{$torre->id}}">{{$torre->nombre}} - {{$torre->conjunto->nombre}}</option>
            @endforeach
        </select>
        <!-- <br>
        <label for="conjunto_id">Del conjunto:</label>
        <select class="form-select" aria-label="Default select example" disabled name="conjunto_id" id="conjunto_id" readonly>
        </select> -->
        <br>

        <button type="submit" class="btn btn-success">Guardar</button>
        <button class="btn btn-danger"><a href="{{route('apartamento.index')}}"
                class="link-light link-offset-2 link-underline link-underline-opacity-0">Cancelar</a></button>


    </form>

    <script>
        function updateConjuntos() {
            const torreId = document.getElementById('torre_id').value;
            const conjuntoSelect = document.getElementById('conjunto_id');

            conjuntoSelect.innerHTML = '';

            @foreach ($torres as $torre)
                if ({{$torre->id}} == torreId) {
                    const option = document.createElement('option');
                    option.value = "{{$torre->conjunto_id}}";
                    option.text = "{{$torre->conjunto->nombre}}";
                    option.selected = true;
                    conjuntoSelect.appendChild(option);
                }
            @endforeach
        }

        updateConjuntos();

    </script>
</div>

@endsection