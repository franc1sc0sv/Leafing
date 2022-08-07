<?php
include_once('conexion.php');

$idEvent = $_GET['estiben'];
$idReport = $_GET['idReport'];
$objconexion = new conection();
$lastID = $objconexion->ejecutar("INSERT INTO `reports_transactional` (`id_reports-transactional`, `id_event`, `id_report`, `date_report`) VALUES (NULL, '$idEvent', '$idReport', NOW());");


?>