<?php
include_once('../public/php/templates/conexion.php');


$coment = $_POST['coment'];
$idevnt = $_GET['estiben'];
$id = $_SESSION['dataID'];

if (!empty($coment)) {
    if ((strlen($coment) < 10 || strlen($coment) > 200)) {
        echo json_encode('invalid');
    } else {
        $objconexion = new conection();
        $objconexion->ejecutar("INSERT INTO `coments` (`id`, `coment`, `id_publisher`, `id_event`, `date`) VALUES (NULL, '$coment', '$id', '$idevnt', NOW());");
        echo json_encode('nice');
    }
} else {
    echo json_encode('empty');
}
