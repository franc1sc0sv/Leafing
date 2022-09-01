<?php
include_once("./conexion.php");

$sql = $_GET['sql'];
$objConexion = new conection();
$objConexion->ejecutar($sql);
