@extends('layouts.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
    <!doctype html>
    <html lang="en">
    <head>
        <title>Transportes Ultrarrapidos, S.A</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a39aeb331d.js" crossorigin="anonymous"></script>
        <link href="{{ asset('css/styleHome.css') }}" rel="stylesheet">
    </head>

    <body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">

            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>

            <div class="img bg-wrap text-center py-4" style="background-image: url(https://www.shutterstock.com/image-photo/worker-loading-package-boxes-on-600nw-1996690826.jpg)">
                <div class="user-logo">
                    <div class="img" style="background-image: url(https://media.istockphoto.com/id/1445074332/es/foto/semirremolques-de-plataformas-grandes-y-coloridos-brillantes-con-semirremolques-parados-en-la.jpg?s=612x612&w=0&k=20&c=8H_zXHhDJ9CqXj_xGJ83n7hDmR5wXIQ54q6D2PDNwu4=);"></div>
                    <h3></h3>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="#"><span class="fa fa-home mr-3"></span> Transportistas</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-download mr-3 "><small class="d-flex align-items-center justify-content-center"></small></span> Ingreso Camiones</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-gift mr-3"></span>Ingresos </a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-trophy mr-3"></span> Egresos</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-gift mr-3"></span>Ingreso  Predio </a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-cog mr-3"></span>Agregar Pilotos</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-support mr-3"></span> Generar reportes</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"><span class="fa fa-support mr-3"></span> Cerrar Sesión</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Bienvenido {{ Auth::user()->name }} .</h2>
            <div class="card">
                <br><br>
                <h5 class="card-header">Transportes Ultrarrapidos,S.A</h5>
                <div class="card-body">
                    <h5 class="card-title">Registro de Pilotos</h5>
                    <p>
                        <a href="{{route('piloto.create')}}" class="btn btn-secondary">Agregar nuevo Registro </a>
                    </p>
                    <p>
                        <a href="{{route('predio.index')}}" class="btn btn-secondary">Ver Predio</a>
                    </p>
                    <p class="card-text"></p>
                    <br>

                    <div class="table table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead>
                            <td>id</td>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Numero_dpi</td>
                            <td>Numero_licencia</td>
                            <td>Editar</td>
                            <td>Eliminar</td>
                            </thead>
                            <tbody>

                            @foreach($pilotos as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->apellido}}</td>
                                    <td>{{$item->numero_dpi}}</td>
                                    <td>{{$item->numero_licencia}}</td>
                                    <td>
                                        <form action="{{ route('piloto.edit', ['id' => $item->id]) }}" method="GET" style="display: inline;">
                                            <button class="btn btn-outline-info btn-sm">
                                                <span class="fa-solid fa-pen-to-square"></span>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('piloto.delete', ['id' => $item->id]) }}" method="GET" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger btn-sm">
                                                <span class="fa-solid fa-trash-can"></span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination pagination-sm">
                            {{ $pilotos->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src=" {{ asset('javascript/main.js') }}"></script>
    </body>
    </html>

@endsection
