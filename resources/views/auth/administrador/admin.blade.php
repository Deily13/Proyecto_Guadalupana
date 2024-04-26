<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/administrador/admin.css') }}">
    <title>Inicio</title>
</head>
<body>

    <a class="login" href="#login" id="login">Iniciar sesión</a>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="{{ url('/admin') }}">Inicio</a>
        <a href="{{ url('/lista-pedidos') }}">Pedidos Pendientes</a>
        <a href="{{ url('/editar-productos') }}">Agregar Productos</a>
        <a href="{{ url('/roles') }}">Roles</a>
    </div>

    <button class="openbtn" onclick="openNav()">☰ Menú</button>

    <div class="content">
        <h2 id="welcome">Bienvenido</h2>
        <p>Some text..</p>
    </div>

    <script src="{{ asset('asset/js/administrador.js') }}"></script>
</body>
</html>
