<?php

include_once('include.php');
include_once('conexion.php');

$id = $_SESSION['dataID'];

if ($_POST){

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $usuario = $_POST['usuario'];

    // $objConnection = new conection();
    // $sql = "UPDATE `user_data` SET `name`='$name',`lastname`='$lastname',`user_name`='$usuario' WHERE id_user_data = $id";
    // $objConnection->ejecutar($sql);

    echo json_encode('updated');

    

}