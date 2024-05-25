<!DOCTYPE html>
<html>
<head><title>Transportes S.A</title></head>
<link href="{{asset('css/stylewelcome.css')}}" rel="stylesheet">


<body>

<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">


        <div class="img bg-wrap text-center py-4" style="background-image: url(https://www.shutterstock.com/image-photo/worker-loading-package-boxes-on-600nw-1996690826.jpg)">
            <div class="user-logo">
                <div class="img" style="background-image: url(https://media.istockphoto.com/id/1445074332/es/foto/semirremolques-de-plataformas-grandes-y-coloridos-brillantes-con-semirremolques-parados-en-la.jpg?s=612x612&w=0&k=20&c=8H_zXHhDJ9CqXj_xGJ83n7hDmR5wXIQ54q6D2PDNwu4=);"></div>
                <h3></h3>
            </div>
        </div>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="{{route('register')}}"><span class="fa fa-home mr-3"></span>Register</a>
            </li>
            <li>
                <a href="{{route('login')}}"><span class="fa fa-gift mr-3"></span>Login</a>
            </li>
            <li>
                <a href="{{ route('logout') }}"><span class="fa fa-support mr-3"></span> Cerrar Sesión</a>
            </li>
        </ul>

    </nav>
</div>
</body>


</html>
