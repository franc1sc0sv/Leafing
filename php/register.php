<?php
include_once('conexion.php');

if ($_GET['estatus'] == "stage1") {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if (!empty($email) && !empty($pass)) {
        $objconexion = new conection;
        $emailrepetido =  $objconexion->consultarform("SELECT * FROM `user_credentials` WHERE mail_user	='$email'");

        if ($emailrepetido != 1) {
            $code = $objconexion->sendcode($email);
            echo json_encode($code);
        } else {
            echo json_encode('repetido');
        }
    } else {
        echo json_encode('empty');
    }
} else if ($_GET['estatus'] == "stage2") {
    $objconexion = new conection();

    $Dataemail = $_GET['Dataemail'];
    $Datapassword = $_GET['Datapassword'];

    $borndate = $_GET['borndate'];
    $gender = $_GET['gender'];
    $lastname = $_GET['lastname'];
    $name = $_GET['name'];
    $user_name = $_GET['user'];
    //Password Hashed
    $passwordHashed = password_hash($Datapassword, PASSWORD_DEFAULT, ['cost' => 10]);
    //Tabla de las credenciales del usuarios
    $sql1 = "INSERT INTO `user_credentials` (`id`, `mail_user`, `password_user`, `rol_id`) VALUES (NULL, '$Dataemail', '$passwordHashed', '2')";
    $lastID = $objconexion->ejecutar($sql1);
    //Tabla de la data del usuarios
    $sql = "INSERT INTO `user_data` (`id_user_data`, `name`, `lastname`, `borndate`, `user_name`, `gender`) VALUES ($lastID, '$name', '$lastname', '$borndate', '$user_name', '$gender');";
    $objconexion->ejecutar($sql);
    echo json_encode('niceYourAreLogin');
}
