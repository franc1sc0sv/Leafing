<?php

include_once('../../public/php/templates/include.php');
include_once('../../public/php/templates/conexion.php');

$id = $_SESSION['dataID'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$usuario = $_POST['usuario'];
$boutme = $_POST['sobre-mi'];
if (!empty($name) && !empty($lastname) && !empty($usuario)) {
    $objConnection = new conection();
    $sql = "UPDATE `user_data` SET `name`='$name',`lastname`='$lastname',`user_name`='$usuario', `about_me`='$boutme' WHERE id_user_data = $id";
    $objConnection->ejecutar($sql);

    echo json_encode('updated');
} else {
    echo json_encode('vacio');
}
