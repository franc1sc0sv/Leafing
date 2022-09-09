<?php

include_once('../public/php/templates/include.php');
include_once('../public/php/templates/conexion.php');


$objconexion = new conection();

// if ($_GET['stage'] == 1) {
//     $id = $_SESSION['dataID'];
//     $tokenUser = $objconexion->consultar("SELECT token FROM `user_credentials` WHERE id = $id");
//     $_SESSION['token'] = $tokenUser[0][0];
// } else if ($_GET['stage'] == 2) {
if (isset($_SESSION['dataID']) && isset($_GET['eventoID'])) {
    $mensaje = $_POST['mensajeUsuario'];

    if (!empty($mensaje) && preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9_,.()' -]{15,500}$/", $mensaje)) {
        $id_evento = $_GET['eventoID'];
        $idusercreator = $_SESSION['dataID'];
        $is_creator_data = $objconexion->consultar("SELECT * FROM `events` WHERE id_user_data = $idusercreator AND id_events = $id_evento");

        if (!empty($is_creator_data)) {
            $inscritosEventos = $objconexion->consultar("SELECT user_credentials.mail_user FROM `inscriptions` INNER JOIN user_credentials ON inscriptions.id_persona_inscrita = user_credentials.id WHERE id_event = $id_evento");
            if (!empty($inscritosEventos)) {

                for ($i = 0; $i < count($inscritosEventos); $i++) {
                    mail($inscritosEventos[$i][0], "Mensaje del evento", "$mensaje");
                }
                echo json_encode($inscritosEventos);
            } else {
                echo json_encode("nobody");
            }
        } else {
            echo json_encode("error");
        }
    } else {
        echo json_encode("invalidCode");
    }
}
//     } else {
//         echo json_encode("error");
//     }
// }
