<?php
//Esta onda va retornar las variables de session activas
include_once('include.php');
include_once('conexion.php');

function getEstatusUser()
{
    if (isset($_SESSION['estatus'])) {
        echo json_encode($_SESSION);
    } else {
        echo json_encode('ERROR');
    }
}

function changeSession($lang)
{
    $_SESSION['lang'] = $lang;
}


if ($_GET['peticion'] == 1) {
    getEstatusUser();
} elseif ($_GET['peticion'] == 3) {
    echo "xd ya no se usa esto";
} elseif ($_GET['peticion'] == 4) {
    changeSession($_GET['lang']);
}
