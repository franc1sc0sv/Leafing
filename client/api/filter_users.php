<?php

if ($_POST['buscaUsers'] == '') {
    $_POST['buscaUsers'] = ' ';
}
$resultsearch = explode(" ", $_POST['buscaUsers']);

// if ($_POST['buscaUsers'] == '') {
//     $sql = "SELECT SELECT id_user_data, name, lastname, user_name, img_path, about_me FROM `user_data`;";
// } else {
$sql = "SELECT id_user_data, name, lastname, user_name, img_path, about_me FROM `user_data` 
WHERE name LIKE LOWER('%" . $resultsearch[0] . "%') 
OR lastname LIKE LOWER('%" . $resultsearch[0] . "%')
OR user_name LIKE LOWER('%" . $resultsearch[0] . "%')";

if (count($resultsearch) > 1) {

    for ($i = 1; $i < count($resultsearch); $i++) {
        if (!empty($resultsearch[$i])) {
            $sql .= " OR name LIKE LOWER('%" . $resultsearch[$i] . "%') 
            OR lastname LIKE LOWER('%" . $resultsearch[$i] . "%')
            OR user_name LIKE LOWER('%" . $resultsearch[$i] . "%')";
        }
    }
}

$sql .= "ORDER BY RAND();";

echo json_encode(urlencode($sql));
// }
