<?php
include_once('../public/php/templates/conexion.php');

$sql = $_GET['sql'];
$objconexion = new conection();
$result = $objconexion->consultar($sql);
echo json_encode($result);
