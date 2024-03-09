<?php

include("con_db.php");

if (isset($_POST['ENVIAR'])){
    if (strlen($_POST['fname']) >= 1 &&
    strlen($_POST['sname']) >= 1 &&
    strlen($_POST['lname']) >= 1 &&
    strlen($_POST['slname']) >= 1 &&
    strlen($_POST['idtype']) >= 1 &&
    strlen($_POST['idnum']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['emailconf']) >= 1 &&
    strlen($_POST['phone']) >= 1 &&
    strlen($_POST['gender']) >= 1) {

    $fname = trim($_POST['fname']);
    $sname = trim($_POST['sname']);
    $lname = trim($_POST['lname']);
    $slname = trim($_POST['slname']);
    $idtype = trim($_POST['idtype']);
    $idnum = trim($_POST['idnum']);
    $email = trim($_POST['email']);
    $emailconf = trim($_POST['emailconf']);
    $phone = trim($_POST['phone']);
    $gender = trim($_POST['gender']);
    $fechareg = date("d/m/y");
    $consulta = "INSERT INTO datos( fname, sname, lname, slname, idtype, idnum, email, emailconf, phone, gender, fecha_reg) VALUES ('$fname','$sname','$lname','$slname','$idtype','$idnum','$email','$emailconf','$phone','$gender','$fechareg')";
    $resultado=mysqli_query($conex,$consulta);
    if ($resultado){
        ?>
        <h3 class="bien">¡Te has registrado correctamente!</h3>
        <?php
    }else{
        ?>
        <h3 class="mal">¡Error en el servidor!</h3>
        <?php
    }
} else {
    ?>
    <h3 class="mal">!Rellena los campos¡</h3>
    <?php
}
}
?>