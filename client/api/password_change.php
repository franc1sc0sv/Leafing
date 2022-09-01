<?php
include_once('conexion.php');
//$array = array($_POST['password'], $_POST['passwordRe']);
$password = $_POST['password'];
$passwordRe = $_POST['passwordRe'];
$token = $_GET['token'];

if (!empty($password) && !empty($passwordRe)) {
    if ($password == $passwordRe) {
        $objconexcion = new conection();
        $iduser = $objconexcion->consultar("SELECT id  FROM `user_credentials` WHERE token = '$token' ");
        $id = $iduser[0][0];
        $Newtoken = bin2hex(random_bytes(16));
        $passwordHashed = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
        $objconexcion->ejecutar("UPDATE `user_credentials` SET `password_user` = '$passwordHashed' WHERE `user_credentials`.`id` = $id;
        UPDATE `user_credentials` SET `token` = '$Newtoken' WHERE `user_credentials`.`id` = $id;");
        echo json_encode("nice");
    } else {
        echo json_encode("invalid");
    }
} else {
    echo json_encode("vacio");
}

//echo json_encode($array);
