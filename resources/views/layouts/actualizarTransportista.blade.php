@section('contenido')
    <div class="mt-3 mb-5">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">

                    <h2 class="display-6">Actualizar informacion de Transportista </h2>
                </div>
            </div>

            <div class="col-md-9">
                <div class="contact-form">
                    <form action="{{route('transportista.update', $transportista -> id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <label for="">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" required value="{{$transportista -> nombre}}">

                        <label for="">Dirección:</label>
                        <input type="text" name="direccion" class="form-control" required value="{{$transportista -> direccion}}">

                        <label for="">Teléfono:</label>
                        <input type="text" name="telefono" class="form-control" required value="{{$transportista -> telefono}}">

                        <label for="">Correo Electronico:</label>
                        <input type="text" name="correo_electronico" class="form-control" required value="{{$transportista -> correo_electronico}}">

                        <a href="{{route("transportista.index")}}" class="btn btn-outline-dark btn-sm my-3">
                            Regresar
                        </a>
                        <button class="btn btn-outline-info btn-sm my-3">
                            Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
