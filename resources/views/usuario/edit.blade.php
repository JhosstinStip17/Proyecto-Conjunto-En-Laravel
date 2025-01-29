@extends ('layout')

@section('title', 'Editar Usuario')

@section('content')

<div class="container">
    <h1 class="text-center">Editar un Usuario</h1>

    @if (session('success'))
        <p>{{session('success')}}</p>
    @endif


    <form action="{{route('usuario.update', $usuario)}}" method="post">

        @csrf
        @method('PUT')

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre del usuario</span>
            <input type="text" name="nombre" value="{{$usuario->nombre}}" class="form-control"
                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
        </div>
        <label for="apartamento_id">Apartamento</label>
        <select class="form-select" aria-label="Default select example" name="apartamento_id" id="apartamento_id" onclick="updateTorres()">
            @foreach ($apartamentos as $apartamento)
                <option value="{{$apartamento->id}}" {{$usuario->apartamento_id == $apartamento->id ? 'selected' : '' }}>
                    {{$apartamento->nombre}} - {{$apartamento->torre->nombre}} - {{$apartamento->torre->conjunto->nombre}}
                </option>
            @endforeach
        </select>
        <!-- <label for="torre_id">De la torre:</label>
        <select class="form-select" aria-label="Default select example" disabled name="torre_id" id="torre_id" readonly onchange="updateConjunto()">
        </select>
        <br>
        <label for="conjunto_id">Del Connjunto:</label>
        <select class="form-select" aria-label="Default select example" disabled name="conjunto_id" id="conjunto_id" readonly>
        </select> -->
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
        <button class="btn btn-danger"><a href="{{route('usuario.index')}}"
                class="link-light link-offset-2 link-underline link-underline-opacity-0">Cancelar</a></button>


    </form>

    <!-- <script>
        function updateTorres() {
            const apartamentoId = document.getElementById('apartamento_id').value;
            const torreSelect = document.getElementById('torre_id');

            torreSelect.innerHTML = '';

            @foreach ($apartamentos as $apartamento)
                if ({{$apartamento->id}} == apartamentoId) {
                    const option = document.createElement('option');
                    option.value = "{{$apartamento->torre_id}}";
                    option.text = "{{$apartamento->torre->nombre}}";
                    option.selected = true;
                    torreSelect.appendChild(option);
                    updateConjuntos();
                }
            @endforeach
        }



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

        updateTorres();

    </script> -->

</div>


@endsection