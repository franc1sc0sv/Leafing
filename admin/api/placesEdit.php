<?php
include_once('../public/php/templates/conexion.php');
$place = $_GET['place'];
$id = $_GET['id'];
if (!empty($place)) {
    $objconexionj = new conection();
    $objconexionj->ejecutar("UPDATE `place_events` SET `place` = '$place' WHERE `place_events`.`id_place` = $id;");
    echo json_encode("nice");
} else {
    echo json_encode("empty");
}
