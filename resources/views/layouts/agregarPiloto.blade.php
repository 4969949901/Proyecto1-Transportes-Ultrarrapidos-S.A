@extends('layouts.app')
@section('content')
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
    <h5 class="text-center">Agregar Piloto:</h5>
    <div class="col-auto bg-primary-subtle border border-primary-subtle rounded-3  p-5 text-center">

        <form action="{{route('#')}}"  method="Post" >
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" required id="nombre" >
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" class="form-control" required id="apellido" >
            </div>


            <div class="mb-3">
                <label for="numero_dpi" class="form-label">Numero_dpi:</label>
                <input type="text" class="form-control" required id="numero_dpi" >
            </div>

            <div class="mb-3">
                <label for="numero_licencia" class="form-label">Numero_licencia:</label>
                <input type="text" class="form-control" required id="numero_licencia" >
            </div>


            <a class="btn btn-primary" href="{{route('piloto.index')}}" role="button">Regresar</a>
            <button class="btn btn-success">Agregar</button>


        </form>
    </div>
</div>

</body>
</html>
@endsection
