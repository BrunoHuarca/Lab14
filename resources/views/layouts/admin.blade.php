<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('style')
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
    <title>Document</title>
</head>
<body>
<div class="dashboard">
    <div class="dashboard-two">
        <div class="dashboard-left">
            <nav class="dashboard-nav">
                <a href="" class="dashboard-logo"><img src="" alt=""></a>
                <button class="nav_toggle">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <h1 class="dashboard-h1">Admin</h1>
                <ul class="dashboard-ul">
                    <li><a class="dashboard-link" href="/admin/producto"><img src="" alt="">Productos</a></li>
                    <li><a class="dashboard-link" href="/admin/categorias"><img src="" alt="">Categorias</a></li>
                    <li><a class="dashboard-link" href=""><img src="" alt="">Pedidos</a></li>
                </ul>
                <h1 class="dashboard-h1">Settings</h1>
                <ul class="dashboard-ul">
                    <li><a class="dashboard-link" href=""><img src="" alt="">Settings</a></li>
                    <li><a class="dashboard-link" href=""><img src="" alt="">Opciones</a></li>
                </ul>
            </nav>
        </div>
        @yield('alerta')
        <div class="dashboard-content">
            <div class="dashboard-content-right">
                @yield('contenido')
            </div>
        </div>
    </div>
</div>
@yield('js')
</body>
</html>
