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
