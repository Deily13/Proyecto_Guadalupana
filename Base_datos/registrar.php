<?php

include("con_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();

    // Validación de campos vacíos
    $required_fields = array('fname', 'lname', 'slname', 'idtype', 'idnum', 'email', 'emailconf', 'phone', 'gender');
    foreach ($required_fields as $field) {
        if (empty(trim($_POST[$field]))) {
            $errors[] = "El campo $field es obligatorio.";
        }
    }

    // Validación de correo electrónico
    $email = trim($_POST['email']);
    $emailconf = trim($_POST['emailconf']);
    if ($email !== $emailconf) {
        $errors[] = "Los correos electrónicos no coinciden.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El correo electrónico no es válido.";
    }

    // Si no hay errores, insertar en la base de datos
    if (empty($errors)) {
        $fname = trim($_POST['fname']);
        $sname = trim($_POST['sname']);
        $lname = trim($_POST['lname']);
        $slname = trim($_POST['slname']);
        $idtype = trim($_POST['idtype']);
        $idnum = trim($_POST['idnum']);
        $phone = trim($_POST['phone']);
        $gender = trim($_POST['gender']);
        $fechareg = date("Y-m-d");

        $consulta = "INSERT INTO datos (fname, sname, lname, slname, idtype, idnum, email, emailconf, phone, gender, fecha_reg) VALUES ('$fname','$sname','$lname','$slname','$idtype','$idnum','$email','$emailconf','$phone','$gender','$fechareg')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            echo '<h3 class="bien">¡Te has registrado correctamente!</h3>';
        } else {
            echo '<h3 class="mal">¡Error en el servidor!</h3>';
        }
    } else {
        // Mostrar errores
        foreach ($errors as $error) {
            echo "<h3 class='mal'>$error</h3>";
        }
    }
}    //else {
    //echo '<h3 class="mal">¡Acceso no autorizado!</h3>';
   //}
?>