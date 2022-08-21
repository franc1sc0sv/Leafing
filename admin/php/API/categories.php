<?php
include_once("../conexion.php");

$inputCategoryES = $_GET['inputCategoryES'];
$inputCategoryEN = $_GET['inputCategoryEN'];
if (!empty($inputCategoryES) || !empty($inputCategoryEN)) {
    $objconexionj = new conection();
    $rowcount = $objconexionj->consultarform("SELECT * FROM `categories_events` WHERE categories = '$inputCategoryES' OR categories_en = '$inputCategoryEN'");

    if ($rowcount != 1) {
        $objconexionj->ejecutar("INSERT INTO `categories_events` (`id_categories_events`, `categories`, `categories_en`) VALUES (NULL, '$inputCategoryES', '$inputCategoryEN');");
        echo json_encode("nice");
    } else {
        echo json_encode("allReadyExist");
    }
} else {
    echo json_encode("empty");
}
