<?php
include_once("../conexion.php");

$place = $_GET['place'];

if (!empty($place)) {
    $objconexionj = new conection();
    $rowcount = $objconexionj->consultarform("SELECT * FROM `place_events` WHERE place = '$place'");

    if ($rowcount != 1) {
        $objconexionj->ejecutar("INSERT INTO `place_events` (`id_place`, `place`) VALUES (NULL, '$place');");
        echo json_encode("nice");
    } else {
        echo json_encode("allReadyExist");
    }
} else {
    echo json_encode("empty");
}
