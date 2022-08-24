<?php
include_once('conexion.php');


$sql = $_GET['sql'];
$objconexion = new conection();
$result = $objconexion->consultar($sql);
echo json_encode($result);
