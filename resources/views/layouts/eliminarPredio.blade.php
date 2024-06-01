@section('contenido')

    <div class="mt-3 mb-5">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <h2 class="display-6">Eliminar Registro de predio </h2>
                </div>
            </div>
            <div class="col-md-9">
                <div>
                    <table class="table table-responsive">
                        <thead>
                        <th>id</th>
                        <th>pais</th>
                        <th>ciudad</th>
                        <th>Dirección</th>
                        </thead>

                        <tbody>

                        <tr>
                            <td>{{$predios->id}}</td>
                            <td>{{$predios->pais}}</td>
                            <td>{{$predios->ciudad}}</td>
                            <td>{{$predios->direccion}}</td>
                        </tr>

                        </tbody>
                    </table>
                    <form action="{{route('predio.delete', $predios->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="mt-5">
                            <a href="{{route('predio.index')}}" class="btn btn-sm btn-outline-dark">
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
