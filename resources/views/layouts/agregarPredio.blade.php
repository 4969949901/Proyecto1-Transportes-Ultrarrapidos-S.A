@extends('layouts/plantilla')
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

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

<br><br>
<body>
<div class="m-0 row justify-content-center">
    <br><br>
    <h5 class="text-center">Agregar Predio:</h5>

    <div class="col-auto bg-primary-subtle border border-primary-subtle rounded-3  p-5 text-center">
        <form action="{{route('predio.store')}}"  method="POST"  >
            @csrf

        <div class="mb-3">
            <label for="pais" class="form-label">Pais:</label>
            <input type="text" class="form-control" required id="pais" >

        </div>

        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad:</label>
            <input type="text" class="form-control" required id="ciudad" >

        </div>


        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <input type="text" class="form-control" required id="direccion" >

        </div>


        <a class="btn btn-primary" href="{{route('predio.index')}}" role="button">Regresar</a>
        <button type="submit" class="btn btn-success">Agregar</button>


    </form>
    </div>
</div>

</body>
</html>







