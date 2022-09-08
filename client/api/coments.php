<?php
include_once('../public/php/templates/include.php');
include_once('../public/php/templates/conexion.php');


$coment = $_POST['coment'];
$idevnt = $_GET['estiben'];
$id = $_SESSION['dataID'];

if (!empty($coment)) {

    if (preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ,.' -]{5,200}$/", $coment)) {
        $objconexion = new conection();
        $objconexion->ejecutar("INSERT INTO `coments` (`id`, `coment`, `id_publisher`, `id_event`, `date`) VALUES (NULL, '$coment', '$id', '$idevnt', NOW());");
        echo json_encode('nice');
    } else {
        echo json_encode('invalid');
    }
} else {
    echo json_encode('empty');
}
