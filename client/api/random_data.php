<?php
include_once('include.php');
include_once('conexion.php');

$objconexion_numbers = new conection();
$maxIdData = $objconexion_numbers->consultar("SELECT MAX(id_curious_data) FROM `random_curious_data`");

$n1 = $n2 = $n3 = $n4 = $n5 = $n6 = 0;

$pos = 1;
while (1) {
    $rand = rand(1, $maxIdData[0]['MAX(id_curious_data)']);
    $repetido = false;

    for ($i = 1; $i <= $pos; $i++) {
        if (${"n" . $i} == $rand) {
            $repetido = true;
        }
    }

    if ($repetido == false) {
        ${"n" . $pos} = $rand;
        $pos++;
        if ($pos == 7) {
            break;
        }
    }
}

if ($_SESSION['lang'] == "en") {
    $tabla = "random_curious_data_en";
} else {
    $tabla = "random_curious_data";
}

$Datos_cards = new conection();
$Datos = $Datos_cards->consultar("SELECT * FROM `$tabla` WHERE id_curious_data  IN ('$n1', '$n2', '$n3', '$n4', '$n5', '$n6')");


echo json_encode($Datos);
