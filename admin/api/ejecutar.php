<?php
include_once('../public/php/templates/conexion.php');

$sql = $_GET['sql'];
$objConexion = new conection();
$dataError = $objConexion->ejecutar($sql);

if (empty($dataError[2])) {
    echo json_encode("nice");
}else{
    echo json_encode("error");
}
//print_r($dataError);