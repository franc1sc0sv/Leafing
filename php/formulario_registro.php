<?php
include_once 'include.php';
include_once("conexion.php");

if ($_POST) {
    if (empty($_POST['email'])) {
        echo "<script> alert('ALL FIELDS IS REQUERED')</script>";
    } else {
        $mail = $_POST['email'];
        $password = $_POST['password'];

        $objconexion = new conection();
        $emailrepetido =  $objconexion->consultarform("SELECT * FROM `user_credentials` WHERE mail_user	='$mail'");
        // echo $emailrepetido . " ";
        if ($emailrepetido != 1) {
            $_SESSION['mail'] = $mail;
            $_SESSION['password'] = $password;
            $_SESSION['code'] = true;
            header('location:code.php');
        } else {
            echo "<script> alert('El correo esta repetido')</script>";
        }
    }
}



?>

<?php include_once("header.php"); ?>

<div class="container_general_fomrms">
    <h1>Crea tu cuenta</h1>

    <div class="container_forms">
        <form action="formulario_registro.php" method="post">
            <p> Paso 1: Tu correo y Contraseña</p>
            <input type="text" name="email" placeholder="mail"><br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</div>

</div>
</div>

<?php include_once("./footer.php") ?>