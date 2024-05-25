@extends('layouts/plantilla')
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<br><br>
<div class="m-0 row justify-content-center">
    <br><br>
    <h5 class="text-center">Agregar egreso:</h5>

    <form class="col-auto bg-primary-subtle border border-primary-subtle rounded-3 p-5 text-center">
        <div class="mb-3">
            <label for="id_camion" class="form-label">id_camion:</label>
            <input type="text" class="form-control" required id="id_camion" name="id_camion">
        </div>

        <div class="mb-3">
            <label for="id_bodega_egreso" class="form-label">id_bodega_egreso:</label>
            <input type="text" class="form-control" required id="id_bodega_egreso" name="id_bodega_egreso">
        </div>

        <div class="mb-3">
            <label for="fecha_hora_egreso" class="form-label">fecha_hora_egreso:</label>
            <input type="datetime-local" class="form-control" required id="fecha_hora_egreso" name="fecha_hora_egreso">
        </div>

        <div class="mb-3">
            <label for="destino" class="form-label">destino:</label>
            <input type="text" class="form-control" required id="destino" name="destino">
        </div>

        <div class="mb-3">
            <label for="carga" class="form-label">carga:</label>
            <input type="text" class="form-control" required id="carga" name="carga">
        </div>

        <a class="btn btn-primary" href="{{route('transportista.index')}}" role="button">Regresar</a>
        <button class="btn btn-success">Agregar</button>
    </form>
</div>
</html>
<!--nuevo commit-->
