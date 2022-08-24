<?php
// if ($_GET['busca'] = ' ') {
//     $_GET['busca'] = '';
// }

// if ($_GET['orden'] = ' ') {
//     $_GET['orden'] = '';
// }
// if ($_GET['lugar'] = ' ') {
//     $_GET['lugar'] = '';
// }

// if ($_GET['categorias'] = ' ') {
//     $_GET['categorias'] = '';
// }

// if ($_GET['date_filtro'] = ' ') {
//     $_GET['date_filtro'] = '';
// }


// if ($_GET['busca'] == '') {
//     $_GET['busca'] = ' ';
// }

//print_r($_GET);
if ($_GET['busca'] == '') {
    $_GET['busca'] = ' ';
}
$resultsearch = explode(" ", $_GET['busca']);

if ($_GET['busca'] == '' && $_GET['lugar'] == '' && $_GET['categorias'] == '' && $_GET['date_filtro'] == '') {
    $sql = "SELECT events.id_events, events.name_event,events.description_event, place_events.place, events.date_event FROM `events` INNER JOIN place_events ON events.place_event = place_events.id_place WHERE id_state_events = 1";
} else {
    $sql = "SELECT events.id_events, events.name_event,events.description_event, place_events.place, events.date_event FROM `events` INNER JOIN place_events ON events.place_event = place_events.id_place WHERE id_state_events = 1";
    if ($_GET["busca"] != '') {
        $sql .= " AND name_event LIKE LOWER('%" . $resultsearch[0] . "%')";

        for ($i = 1; $i < count($resultsearch); $i++) {
            if (!empty($resultsearch[$i])) {
                $sql .= " AND name_event LIKE LOWER('%" . $resultsearch[$i] . "%')";
            }
        }
    }

    if ($_GET['categorias'] != '') {
        $sql .= " AND id_categories_events = '" . $_GET['categorias'] . "' ";
    }

    if ($_GET['date_filtro'] != '') {
        $originalDate = $_GET['date_filtro'];
        $newDate = date("Y-m-a", strtotime($originalDate));
        $sql .= " AND date_event = '" . $originalDate . "' ";
    }

    if ($_GET['lugar'] != '') {
        $sql .= " AND place_event = '" . $_GET['lugar'] . "' ";
    }

    if ($_GET['orden'] == '1') {
        $sql .= " ORDER BY id_categories_events ASC ";
    }

    if ($_GET['orden'] == '2') {
        $sql .= " ORDER BY name_event ASC ";
    }

    if ($_GET['orden'] == '3') {
        $sql .= " ORDER BY place_event ASC ";
    }
}


echo json_encode($sql);
