@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

</head>
    <style>

        body{
            font-family: font-primary;
            font-size: 14px;
            line-height: 1.8;
            font-weight: normal;
            background: #fff;
            color: black;
        }
        a {
            transition: .3s all ease;
            color: white;
            &:hover, &:focus {
                text-decoration: none !important;
                outline: none !important;
                box-shadow: none;
            }
        }
        button {
            transition: .3s all ease;
            &:hover, &:focus {
                text-decoration: none !important;
                outline: none !important;
                box-shadow: none !important;
            }
        }
        h1, h2, h3, h4, h5,
        .h1, .h2, .h3, .h4, .h5 {
            line-height: 1.5;
            font-weight: 400;
            font-family: font-primary;
            color: black;
        }



        .img{
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }



        .wrapper {
            width: 100%;
        }

        #sidebar {
            min-width: 300px;
            max-width: 300px;
            background: #32373d;
            color: #fff;
            transition: all 0.3s;
            position: relative;
            .h6{
                color: white;
            }
            &.active{
                margin-left: -300px;
                .custom-menu{
                    margin-right: -50px;
                }
                .btn{
                    &.btn-primary{
                        &:before{
                            content: "\f053";
                            font-family: "FontAwesome";
                            right: 2px !important;
                        }
                        &:after{
                            display: none;
                        }
                    }
                }
            }
            h1{
                margin-bottom: 20px;
                font-weight: 700;
                font-size: 20px;
                .logo{
                    color: white;
                    display: block;
                    padding: 10px 30px;
                    background: skyblue;
                }
            }
            ul.components{
                padding: 0;
            }
            ul{
                li{
                    font-size: 16px;
                    >ul{
                        margin-left: 10px;
                        li{
                            font-size: 14px;
                        }
                    }
                    a{
                        padding: 15px 30px;
                        display: block;
                        color: rgba(255,255,255,.6);
                        border-bottom: 1px solid rgba(255,255,255,.05);
                        span{
                            &.notif{
                                position: relative;
                                small{
                                    position: absolute;
                                    top: -3px;
                                    bottom: 0;
                                    right: -3px;
                                    width: 12px;
                                    height: 12px;
                                    content: '';
                                    background: red;
                                    border-radius: 50%;
                                    font-family: font-primary;
                                    font-size: 8px;
                                }
                            }
                        }
                        &:hover{
                            color: white;
                            background: greenyellow;
                            border-bottom: 1px solid;
                        }
                    }
                    &.active{
                        > a{
                            background: transparent;
                            color: white;
                            &:hover{
                                background: #3498db;
                                border-bottom: 1px solid;
                            }
                        }
                    }
                }
            }
        media-breakpoint-down(md){
            margin-left: -300px;
            &.active {
                margin-left: 0;
            }
            .custom-menu{
                margin-right: -60px !important;
                top: 10px !important;
            }
        }

            .custom-menu{
                display: inline-block;
                position: absolute;
                top: 20px;
                right: 0;
                margin-right: -35px;
            transition(.3s);
                .btn{
                    &.btn-primary{
                        border-color: transparent;
                        position: relative;
                        color: black;
                        width: 30px;
                        height: 30px;
                        &:after,&:before{
                            position: absolute;
                            top: 2px;
                            left: 0;
                            right: 0;
                            bottom: 0;
                            font-family: "FontAwesome";
                            color: white;
                        }
                        &:after{
                            content: "\f054";
                            left: 2px;
                        }
                    }
                }
            }
        }


        .bg-wrap{
            width: 100%;
            position: relative;
            z-index: 0;
            &:after{
                z-index: -1;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                content: '';
                background: black;
                opacity: .3;
            }
            .user-logo{
                .img{
                    width: 100px;
                    height: 100px;
                    border-radius: 50%;
                    margin: 0 auto;
                    margin-bottom: 10px;
                }
                h3{
                    color: white;
                    font-size: 18px;
                }
            }
        }



        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
        }

        #sidebarCollapse{
            span{
            media-breakpoint-down(md){
                display: none;
            }
            }
        }

        #content {
            width: 100%;
            padding: 0;
            min-height: 100vh;
            transition: all 0.3s;
        }


        .btn{
            &.btn-primary{
                background: navajowhite;
                border-color: white;
                &:hover, &:focus{
                    background: skyblue !important;
                    border-color: greenyellow !important;
                }
            }
        }

        .footer{
            p{
                color: rgba(255,255,255,.5);
            }
        }



        .form-control {
            height: 40px!important;
            background: white;
            color: black;
            font-size: 13px;
            border-radius: 4px;
            box-shadow: none !important;
            border: transparent;
            &:focus, &:active {
                border-color: black;
            }
            &::-webkit-input-placeholder { /* Chrome/Opera/Safari */
                color: rgba(255,255,255,.5);
            }
            &::-moz-placeholder { /* Firefox 19+ */
                color: rgba(255,255,255,.5);
            }
            &:-ms-input-placeholder { /* IE 10+ */
                color: rgba(255,255,255,.5);
            }
            &:-moz-placeholder { /* Firefox 18- */
                color: rgba(255,255,255,.5);
            }
        }


        .subscribe-form{
            .form-control{
                background: #4a5568;
            }
        }

    </style>

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
                    <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Ingreso Camiones</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-gift mr-3"></span>Ingresos </a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-trophy mr-3"></span> Egresos</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-cog mr-3"></span> </a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-support mr-3"></span> Generar reportes</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-sign-out mr-3"></span> Cerrar Sesion</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Sidebar #09</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    </body>
    </html>

@endsection
