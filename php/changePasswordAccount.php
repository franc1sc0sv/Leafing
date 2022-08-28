<?php
include_once('./include.php');
include_once('./conexion.php');

$antigua_contraseña = $_POST['antigua_contraseña'];
$nueva_contraseña = $_POST['nueva_contraseña'];
$confirmar_contra = $_POST['confirmar_contra'];
$id = $_SESSION['dataID'];
$objconexion = new conection();

if (!empty($antigua_contraseña) && !empty($nueva_contraseña) && !empty($confirmar_contra)) {
    if ((strlen($antigua_contraseña) < 6 || strlen($antigua_contraseña) > 30) || (strlen($nueva_contraseña) < 6 || strlen($nueva_contraseña) > 30) || (strlen($confirmar_contra) < 6 || strlen($confirmar_contra) > 30)) {
        echo json_encode('invalidPassword');
    } else {
        $data1 = $objconexion->consultar("SELECT * FROM `user_credentials` WHERE id = $id");
        if (password_verify($antigua_contraseña, $data1[0][2])) {
            if ($nueva_contraseña == $confirmar_contra) {
                $Newtoken = bin2hex(random_bytes(16));
                $passwordHashed = password_hash($nueva_contraseña, PASSWORD_DEFAULT, ['cost' => 10]);
                $objconexion->ejecutar("UPDATE `user_credentials` SET `password_user` = '$passwordHashed' WHERE `user_credentials`.`id` = $id;
            UPDATE `user_credentials` SET `token` = '$Newtoken' WHERE `user_credentials`.`id` = $id;");
                echo json_encode('nice');
            } else {
                echo json_encode('dontMacth');
            }
        } else {
            echo json_encode('wrongPassword');
        }
    }
} else {
    echo json_encode('empty');
}
