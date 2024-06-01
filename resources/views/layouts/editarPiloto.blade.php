@extends('layouts.app')

@section('content')

    <style>
        body {
            background-image: url('https://beavertrucks.com/wordpress2017/wp-content/uploads/2017/02/vnl-specs-hero-4k.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Piloto</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('piloto.update', $pilotos->id) }}">
                            @csrf
                            @method('PUT')

                            <!-- Aquí coloca los campos del formulario para editar el camión -->
                            <!-- Por ejemplo: -->

                            <div class="form-group">
                                <label for="placa">Pais:</label>
                                <input type="text" name="placa" id="placa" class="form-control" value="{{ $pilotos->pais }}">
                            </div>

                            <div class="form-group">
                                <label for="marca">Ciudad:</label>
                                <input type="text" name="marca" id="marca" class="form-control" value="{{ $pilotos->ciudad}}">
                            </div>

                            <div class="mb-3">
                                <label for="modelo" class="form-label">Direccion:</label>
                                <input type="text" name="modelo" id="modelo" class="form-control" value="{{ $pilotos->direccion}}">

                            </div>


                            <div class="mb-3">
                                <label for="id" class="form-label">id:</label>
                                <input type="number" name="id" id="id" class="form-control" value="{{ $pilotos->id}}">
                            </div>
                            <!-- Agrega los demás campos del camión que desees editar -->

                            <button href="{{route('piloto.index')}}" type="submit" class="btn btn-primary">Guardar cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
