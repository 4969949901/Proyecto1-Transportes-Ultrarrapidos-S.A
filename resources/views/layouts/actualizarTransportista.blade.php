@extends('layouts/plantilla')
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<br><br>
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
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-primary-subtle  border border-success-subtle rounded-4 ">
                    <div class="card-header">Editar Transportistas </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('transportista.update', $transportistas->id_transportistas) }}">
                            @csrf
                            @method('PUT')

                            <!-- Aquí coloca los campos del formulario para editar el camión -->
                            <!-- Por ejemplo: -->

                            <div class="form-group">
                                <label for="nombre">Nombre :</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $transportistas->nombre }}">
                            </div>

                            <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $transportistas->direccion }}">
                            </div>

                            <div class="mb-3">
                                <label for="telefono" class="form-label">Telefono:</label>
                                <input type="text" name="modelo" id="modelo" class="form-control" value="{{ $transportistas->telefono }}">

                            </div>

                            <div class="mb-3">
                                <label for="correo_electronico" class="form-label">Correo Electronico:</label>
                                <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" value="{{ $transportistas->correo_electronico }}">

                            </div>


                            <!-- Agrega los demás campos del camión que desees editar -->
                            <a class="btn btn-primary" href="{{route('transportista.index')}}" role="button">Regresar</a>
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
