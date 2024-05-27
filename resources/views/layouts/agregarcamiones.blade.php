@extends('layouts.plantilla')
@section('content')
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<br><br>
<div class="m-0 row justify-content-center">
    <br><br>
    <h5 class="text-center">Agregar nuevo camion:</h5>

    <form action="{{ route('camion.store') }}" method="POST" class="col-auto bg-primary-subtle border border-primary-subtle rounded-3 p-5 text-center">
        @csrf
        <div class="mb-3">
            <label for="placa" class="form-label">Placa:</label>
            <input type="text" class="form-control" required id="placa" name="placa" >

        </div>

        <div class="mb-3">
            <label for="marca" class="form-label">Marca:</label>
            <input type="text" class="form-control" required id="marca" name="marca" >

        </div>

        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo:</label>
            <input type="number" class="form-control" required id="modelo" name="modelo">

        </div>

        <div class="mb-3">
            <label for="capacidad" class="form-label">Capacidad:</label>
            <input type="text" class="form-control" required id="capacidad" name="capacidad">

        </div>

        <div class="mb-3">
            <label for="id_transportista" class="form-label">ID Transportista:</label>
            <input type="number" class="form-control" required id="id_transportista" name="id_transportista">
        </div>

        <a class="btn btn-primary" href="{{route('camion.index')}}" role="button">Regresar</a>
        <button  class="btn btn-success">Agregar</button>
    </form>
</div>

</body>

</html>
@endsection
