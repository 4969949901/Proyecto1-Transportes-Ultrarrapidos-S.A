@section('contenido')

<div class="mt-3 mb-5">
    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <h2 class="display-6">Eliminar Registro de Transportista </h2>
            </div>
        </div>
        <div class="col-md-9">
            <div>
                <table class="table table-responsive">
                    <thead>
                    <th>Codigo</th>
                    <th>Nombre de  Transportista</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Correo Electronico </th>
                    </thead>

                    <tbody>

                        <tr>

                            <td>{{$transportistas->nombre}}</td>
                            <td>{{$transportistas->direccion}}</td>
                            <td>{{$transportistas->telefono}}</td>
                            <td>{{$transportistas->correo_electronico}}</td>
                        </tr>

                    </tbody>
                </table>
                <form action="{{route('transportista.destroy', $transportistas->transportistas)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="mt-5">
                        <a href="{{route('transportista.index')}}" class="btn btn-sm btn-outline-dark">
                            Regresar
                        </a>
                        <button class="btn btn-sm btn-outline-danger mx-3">
                            Eliminar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
