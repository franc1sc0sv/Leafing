<?php
//Esta onda va retornar las variables de session activas
include_once('include.php');
include_once('conexion.php');


function verifyInscriptionUser($eventID)
{
    $id = $_SESSION['dataID'];
    $sql = "SELECT * FROM `inscriptions` WHERE id_persona_inscrita = $id AND id_event = $eventID";
    $objConexion = new conection();
    $rowCount = $objConexion->consultarform($sql);
    echo json_encode($rowCount);
}

function getEstatusUser()
{
    if (isset($_SESSION['estatus'])) {
        echo json_encode($_SESSION);
    } else {
        echo json_encode('ERROR');
    }
}

if ($_GET['peticion'] == 1) {
    getEstatusUser();
} elseif ($_GET['peticion'] == 2) {
    verifyInscriptionUser($_GET['estiben']);
}
