<?php
include_once('../public/php/templates/conexion.php');
$inputCategoryES = $_GET['inputCategoryES'];
$inputCategoryEN = $_GET['inputCategoryEN'];
$id = $_GET['id'];
if (!empty($inputCategoryES) && !empty($inputCategoryEN)) {
    $objconexionj = new conection();
    $objconexionj->ejecutar("UPDATE 
        `categories_events` SET `categories` = '$inputCategoryES' WHERE`categories_events`.`id_categories_events` = $id;
        UPDATE `categories_events` SET `categories_en` = '$inputCategoryEN' WHERE`categories_events`.`id_categories_events` = $id;
");
    echo json_encode("nice");
} else {
    echo json_encode("empty");
}
