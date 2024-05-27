
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Camión</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('camion.update', $camion->id) }}">
                            @csrf
                            @method('PUT')

                            <!-- Aquí coloca los campos del formulario para editar el camión -->
                            <!-- Por ejemplo: -->

                            <div class="form-group">
                                <label for="placa">Placa:</label>
                                <input type="text" name="placa" id="placa" class="form-control" value="{{ $camion->placa }}">
                            </div>

                            <div class="form-group">
                                <label for="marca">Marca:</label>
                                <input type="text" name="marca" id="marca" class="form-control" value="{{ $camion->marca }}">
                            </div>

                            <div class="mb-3">
                                <label for="modelo" class="form-label">Modelo:</label>
                                <input type="number" name="modelo" id="modelo" class="form-control" value="{{ $camion->modelo }}">

                            </div>

                            <div class="mb-3">
                                <label for="capacidad" class="form-label">Capacidad:</label>
                                <input type="text" name="capacidad" id="capacidad" class="form-control" value="{{ $camion->capacidad }}">

                            </div>

                            <div class="mb-3">
                                <label for="id_transportista" class="form-label">ID Transportista:</label>
                                <input type="number" name="id_transportista" id="id_transportista" class="form-control" value="{{ $camion->id_transportista }}">
                            </div>
                            <!-- Agrega los demás campos del camión que desees editar -->

                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
