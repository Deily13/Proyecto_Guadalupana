<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $usuario = trim($_POST['user']);
    $correo = trim($_POST['correo']);
    $tipoId = $_POST['tipoId'];
    $numeroId = trim($_POST['numeroId']);
    $movil = trim($_POST['movil']);
    $direccion = trim($_POST['direccion']);
    $rol = $_POST['rol'];

    if (!empty($nombre) && !empty($apellido) && !empty($usuario) && !empty($correo) && !empty($tipoId) && !empty($numeroId) && !empty($movil) && !empty($direccion) && !empty($rol)) {
        // Crea una conexión a la base de datos (debes reemplazar los valores)
        $servername = 'localhost';
        $username = 'username';
        $password = 'password';
        $dbname = 'nombre_base_de_datos';

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica la conexión
        if ($conn->connect_error) {
            die('Conexión fallida: ' . $conn->connect_error);
        }

        // Inserta los datos en la base de datos
        $sql = "INSERT INTO usuarios (nombre, apellido, usuario, correo, tipo_id, numero_id, movil, direccion, rol) VALUES ('$nombre', '$apellido', '$usuario', '$correo', '$tipoId', '$numeroId', '$movil', '$direccion', '$rol')";

        if ($conn->query($sql) === true) {
            echo 'Registro insertado correctamente';
        } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
        }

        $conn->close();
    } else {
        echo 'Por favor, complete todos los campos del formulario.';
    }
}
?>

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
        <form class="form-horizontal" id="form-buscar" action="{{ route('user.store') }}" method="POST">
            @csrf
            <div>
                <label for="first_name">Nombre:</label><br>
                <input type="text" id="first_name" name="first_name">
            </div>
            <div>
                <label for="last_name">Apellido:</label><br>
                <input type="text" id="last_name" name="last_name">
            </div>
            <div>
                <label for="name">Usuario:</label><br>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="email">Correo:</label><br>
                <input type="text" id="email" name="email">
            </div>
            <div>
                <label for="identification_type">Tipo ID:</label><br>
                <select id="identification_type" name="identification_type">
                    <option value="">Tipo de Identificación*</option>
                    <option value="cc">Cédula de Ciudadanía</option>
                    <option value="ce">Cédula de Extranjería</option>
                    <option value="ti">Tarjeta de Identidad</option>
                </select>
            </div>
            <div>
                <label for="identification_number">N ID:</label><br>
                <input type="number" id="identification_number" name="identification_number">
            </div>
            <div>
                <label for="phone_number">Móvil:</label><br>
                <input type="tel" id="phone_number" name="phone_number">
            </div>
            <div>
                <label for="address">Dirección:</label><br>
                <input type="text" id="address" name="address">
            </div>
            <div>
                <label for="rol">Rol:</label><br>
                <select id="rol" name="rol">
                    <option value="admin">Administrador</option>
                    <option value="usuario">usuario</option>
                </select>
            </div>
            <div>
                <label for="password">Clave:</label><br>
                <input type="password" id="password" name="password">
            </div>

            <div class="botones">
                <input type="submit" value="Agregar" id="addButton">
            </div>
        </form>


        <form class="form-horizontal" id="form-buscar">
            @csrf
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
                    <option value="admin">Administrador</option>
                    <option value="usuario">Usuario</option>
                </select>
            </div>
            <div class="botones">
                <input type="submit" value="Agregar" id="addButton">
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
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->rol }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->identification_type }}</td>
                            <td>{{ $user->identification_number }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                <form id="removePermissionsForm{{ $user->id }}" action="{{ route('user.change-role', ['id' => $user->id]) }}" method="POST">
                                    @csrf
                                    @if ($user->rol)
                                    <button type="submit" class="remove-permissions-btn" onclick="changeRoleAndHideButton(this, '{{ $user->id }}')">Quitar Permisos</button>
                                    @endif
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <script src="{{ asset('asset/js/roles.js') }}"></script>
</body>

</html>
