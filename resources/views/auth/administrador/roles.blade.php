<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/admin.css/css/roles1.css') }}">
    <title>Usuarios</title>
</head>

<body>

    <a class="login" href="#login" id="login">Iniciar sesión</a>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="{{ url('/admin') }}">Inicio</a>
        <a href="{{ url('/usuarios') }}">Usuarios</a>
        <a href="{{ url('/roles') }}">Roles</a>
        <a href="{{ url('/nuevos_usuarios') }}">Usuarios registrados</a>
        <a href="{{ url('/productos') }}">Agregar Productos</a>
        <a href="{{ url('/pedidos_pendientes') }}">Pedidos Pendientes</a>
    </div>

    <button class="openbtn" onclick="openNav()">☰ Menú</button>

    <div class="parent-container">
        <form class="form-horizontal" id="myForm">
            <div>
                <label for="name">Nombre:</label><br>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="email">Correo:</label><br>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="operator">Operador:</label><br>
                <select id="operator" name="operator">
                    <option value="operator1">Operador 1</option>
                    <option value="operator2">Operador 2</option>
                    <!-- Agrega más opciones de operadores aquí -->
                </select>
            </div>
            <div>
                <label for="role">Rol:</label><br>
                <select id="role" name="role">
                    <option value="invitado">Invitado</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>
            <div>
                <input type="button" value="Agregar" onclick="addInfo()">
            </div>
        </form>
        <div class="info-container">
            <div id="info"></div>
        </div>
    </div>

    <div class="center-div">
        <button id="createUserButton" class="create-user-button">Crear Usuario</button>
    </div>

    <div id="createForm" style="display: none;">
        <h2>Crear Usuario</h2>
        <label for="createName">Nombre:</label><br>
        <input type="text" id="createName"><br>
        <label for="createPosition">Posición:</label><br>
        <input type="text" id="createPosition"><br>
        <label for="createEmail">Email:</label><br>
        <input type="text" id="createEmail"><br>
        <button onclick="addUser()">Guardar</button>
    </div>

    <table id="userTable">
        <!-- Tu código HTML existente -->
    </table>

    <script>
        var userCount = 0;

        document.getElementById('createUserButton').addEventListener('click', showForm);

        function showForm() {
            document.getElementById('createForm').style.display = 'block';
        }

        function addUser() {
            userCount++;
            var table = document.getElementById("userTable");
            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            cell1.innerHTML = userCount;
            cell2.innerHTML = document.getElementById('createName').value;
            cell3.innerHTML = document.getElementById('createPosition').value;
            cell4.innerHTML = document.getElementById('createEmail').value;
            cell5.innerHTML = '<button class="button button2" onclick="deleteUser(event)">Eliminar</button>';
            document.getElementById('createForm').style.display = 'none';
        }

        function deleteUser(event) {
            var row = event.target.parentNode.parentNode; // Obtener la fila actual
            row.parentNode.removeChild(row); // Eliminar la fila de la tabla
        }
    </script>

    <script src="{{ asset('asset/js/users.js') }}"></script>
</body>

</html>