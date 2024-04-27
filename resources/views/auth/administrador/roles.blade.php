<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/administrador/roles1.css') }}">
    <title>Usuarios</title>
</head>

<body>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="{{ url('/admin') }}">Inicio</a>
        <a href="{{ url('/lista-pedidos') }}">Pedidos Pendientes</a>
        <a href="{{ url('/editar-productos') }}">Agregar Productos</a>
        <a href="{{ url('/roles') }}">Roles</a>
    </div>

    <button class="openbtn" onclick="openNav()">☰ Menú</button>

    <div class="parent-container">
        <form class="form-horizontal" id="Form-user-dat">
            <div>
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div>
                <label for="apellido">Apellido:</label><br>
                <input type="text" id="apellido" name="apellido">
            </div>
            <div>
                <label for="user">User:</label><br>
                <input type="text" id="user" name="user">
            </div>
            <div>
                <label for="correo">Correo:</label><br>
                <input type="text" id="correo" name="correo">
            </div>
            <div>
                <label for="tipoId">Tipo ID:</label><br>
                <select id="tipoId" name="tipoId">
                    <option value="">Tipo de Identificación*</option>
                    <option value="cc">Cédula de Ciudadanía</option>
                    <option value="ce">Cédula de Extranjería</option>
                    <option value="ti">Tarjeta de Identidad</option>
                </select>
            </div>
            <div>
                <label for="numeroId">N ID:</label><br>
                <input type="number" id="numeroId" name="numeroId">
            </div>
            <div>
                <label for="movil">Movil:</label><br>
                <input type="tel" id="movil" name="movil">
            </div>
            <div>
                <label for="direccion">Dirección:</label><br>
                <input type="text" id="direccion" name="direccion">
            </div>
            <div>
                <label for="rol">Rol:</label><br>
                <select id="rol" name="rol">
                    <option value="invitado">Invitado</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>
            <div>
                <label for="clave">Clave:</label><br>
                <input type="password" id="clave" name="clave">
            </div>

            <div class="botones">
                <input type="submit" id="addButton" value="Agregar">
            </div>
        </form>


        <form class="form-horizontal" id="form-buscar" action="{{ route('roles.store') }}" method="POST">
            <div>
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div>
                <label for="apellido">Apellido:</label><br>
                <input type="text" id="apellido" name="apellido">
            </div>
            <div>
                <label for="correo">Correo:</label><br>
                <input type="text" id="correo" name="correo">
            </div>
            <div>
                <label for="rol">Rol:</label><br>
                <select id="rol" name="rol">
                    <option value="invitado">Invitado</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>
            <div class="botones">
                <input type="button" value="Buscar" id="searchButton">
            </div>
        </form>



        <div class="info-container">
            <div class="info">
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>User</th>
                        <th>Rol</th>
                        <th>Correo</th>
                        <th>Tipo Id</th>
                        <th>N Id</th>
                        <th>Cell</th>
                        <th>Dirección</th>
                        <th class="celda-especial"></th>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>User</td>
                        <td>Rol</td>
                        <td>Correo</td>
                        <td>Tipo Id</td>
                        <td>N Id</td>
                        <td>Cell</td>
                        <td>Dirección</td>
                        <td>
                            <button>Quitar Permisos</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>



    <script src="{{ asset('asset/js/roles.js') }}"></script>
</body>

</html>