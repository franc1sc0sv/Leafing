<?php
include_once('include.php');
include_once('conexion.php');

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $objconexion = new conection();
    $result = $objconexion->consultar("SELECT * FROM user_credentials WHERE mail_user = '$email'");

    //Verificar si el correo existe en la bd
    if (!empty($result)) {
        //Quitarle el hash a la contraseña y verificar si es la misma
        if (password_verify($password, $result[0][2])) {
            if ($result[0][3] == 1) {
                //Es admin
                //echo json_encode("LogeadoADMIN");
            } else {
                $_SESSION['typeof'] = $result[0][3];
                $_SESSION['estatus'] = true;
                $_SESSION['dataID'] = $result[0][0];
                echo json_encode('LogeadoUSER');
            }
        } else {
            echo json_encode('ErrorData');
        }
    } else {
        echo json_encode('ErrorData');
    }
} else {
    echo json_encode('empty');
}
