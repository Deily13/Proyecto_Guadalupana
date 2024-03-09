<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Registro.CSS">
    <title>Registro</title>
</head>

<body>

    <div class="form-container">
        <div class="logo-container">
            <img src="imagenes/derecha.jpg" alt="Logo de la empresa">
        </div>
        <form method="post">
            <div class="form-row">
                <div class="form-group">
                    <label for="fname"></label>
                    <input type="text" id="fname" name="fname" placeholder="Primer Nombre*">
                </div>
                <div class="form-group">
                    <label for="sname"></label>
                    <input type="text" id="sname" name="sname" placeholder="Segundo Nombre">
                </div>
                <div class="form-group">
                    <label for="lname"></label>
                    <input type="text" id="lname" name="lname" placeholder="Primer Apellido*">
                </div>
                <div class="form-group">
                    <label for="slname"></label>
                    <input type="text" id="slname" name="slname" placeholder="Segundo Apellido*">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="idtype"></label>
                    <select class="idtype" id="idtype" name="idtype">
                        <option value="">Tipo de Identificación*</option>
                        <option value="cc">Cédula de Ciudadanía</option>
                        <option value="ce">Cédula de Extranjería</option>
                        <option value="ti">Tarjeta de Identidad</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="idnum"></label>
                    <input type="text" id="idnum" name="idnum" placeholder="N. Identificación*" pattern="\d*">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="email"></label>
                    <input type="email" id="email" name="email" placeholder="Correo Electrónico*">
                </div>
                <div class="form-group">
                    <label for="emailconf"></label>
                    <input type="email" id="emailconf" name="emailconf" placeholder="Confirmación de Correo*">
                </div>
                <div class="form-group">
                    <label for="phone"></label>
                    <input type="tel" id="phone" name="phone" placeholder="Número de Celular*" pattern="^\d{10}$">
                </div>
                <div class="form-group">
                    <label for="gender"></label>
                    <select id="gender" name="gender">
                        <option value="">Tipo de Género*</option>
                        <option value="male">Masculino</option>
                        <option value="female">Femenino</option>
                        <option value="other">36 tipos de gay</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" name="ENVIAR" value="Enviar">
            </div>
        </form>
        <?php
        include("registrar.php");
        ?>

</body>

</html>