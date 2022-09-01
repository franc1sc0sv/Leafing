<?php
include_once('../public/php/templates/include.php');
include_once('../public/php/templates/conexion.php');

$idEvent = $_GET['estiben'];
$idReport = $_GET['idReport'];
$objconexion = new conection();
$objconexion->ejecutar("INSERT INTO `reports_transactional` (`id_reports_transactional`, `id_event`, `id_report`, `date_report`) VALUES (NULL, '$idEvent', '$idReport', NOW());");
