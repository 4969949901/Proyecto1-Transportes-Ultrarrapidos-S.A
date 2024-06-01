@section('contenido')

    <div class="mt-3 mb-5">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <h2 class="display-6">Eliminar Registro de piloto </h2>
                </div>
            </div>
            <div class="col-md-9">
                <div>
                    <table class="table table-responsive">
                        <thead>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Numero_dpi</th>
                        <th>Numero_licencia</th>
                        </thead>

                        <tbody>

                        <tr>
                            <td>{{$pilotos->id}}</td>
                            <td>{{$pilotos->nombre}}</td>
                            <td>{{$pilotos->apellido}}</td>
                            <td>{{$pilotos->numero_dpi}}</td>
                            <td>{{$pilotos->numero_licencia}}</td>
                        </tr>

                        </tbody>
                    </table>
                    <form action="{{route('piloto.delete', $pilotos->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="mt-5">
                            <a href="{{route('piloto.index')}}" class="btn btn-sm btn-outline-dark">
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
