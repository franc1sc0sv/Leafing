<?php
include_once('../public/php/templates/conexion.php');

$sql = $_GET['sql'];
$objConexion = new conection();
$objConexion->ejecutar($sql);
