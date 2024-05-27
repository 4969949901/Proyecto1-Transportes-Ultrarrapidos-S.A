@extends('layouts/plantilla')
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<br><br>
 <div class="m-0 row justify-content-center">
    <br><br>
    <h5 class="text-center">Agregar nuevo Transportista:</h5>

   <div class="col-auto bg-primary-subtle border border-primary-subtle rounded-3  p-5 text-center">
       <form action="{{route('transportista.store')}}"  method="POST"  >
           @csrf
           <div class="mb-3">
               <label for="nombre" class="form-label">Nombre:</label>
               <input name="nombre" type="text" class="form-control" required id="nombre" PLACEHOLDER="Ingrese nombre con Inicial Mayuscula"  >

           </div>

           <div class="mb-3">
               <label for="direccion" class="form-label">Dirección:</label>
               <input name="direccion"  type="text" class="form-control" required id="direccion" >

           </div>

           <div class="mb-3">
               <label for="telefono" class="form-label">Telefono:</label>
               <input name="telefono"  type="number" class="form-control" required id="telefono" >

           </div>

           <div class="mb-3">
               <label for="correo" class="form-label">Correo Electronico:</label>
               <input name="correo_electronico"  type="email" class="form-control" required id="correo" >

           </div>


           <a class="btn btn-primary" href="{{route('transportista.index')}}" role="button">Regresar</a>
           <button type="submit"  class="btn btn-success">Agregar</button>


       </form>
   </div>



 </div>


</html>







