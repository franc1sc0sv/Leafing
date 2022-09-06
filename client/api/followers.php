<?php
include_once('../public/php/templates/include.php');
include_once('../public/php/templates/conexion.php');
$objconxion = new conection();

if ($_GET['stage'] == 1) {
    if (isset($_SESSION['dataID'])) {
        $idFollowing = $_GET['desiree'];
        $idFollower = $_SESSION['dataID'];

        if ($idFollower != $idFollowing) {
            $is_following = $objconxion->consultarform("SELECT * FROM `followers` WHERE id_follower = $idFollower AND id_following = $idFollowing;");
            echo json_encode($is_following);
        } else {
            echo json_encode('same');
        }
    } else {
        echo json_encode('sesion');
    }
} else if ($_GET['stage'] == 2) {
    $idFollowing = $_GET['desiree'];
    $idFollower = $_SESSION['dataID'];
    $objconxion->ejecutar("INSERT INTO `followers` (`id_follow`, `id_follower`, `id_following`, `date_following`) VALUES (NULL, '$idFollower', '$idFollowing', NOW());");
} else if ($_GET['stage'] == 3) {
    $idFollowing = $_GET['desiree'];
    $idFollower = $_SESSION['dataID'];
    $objconxion->ejecutar("DELETE FROM `followers` WHERE followers.id_follower = $idFollower AND followers.id_following = $idFollowing");
} else if ($_GET['stage'] == 4) {
    $idFollowing = $_GET['desiree'];
    $followers = $objconxion->consultar("SELECT count(*) FROM `followers` WHERE id_follower = $idFollowing");
    echo json_encode($followers);
} else if ($_GET['stage'] == 5) {
    $idFollowing = $_GET['desiree'];
    $following = $objconxion->consultar("SELECT count(*) FROM `followers` WHERE id_following = $idFollowing");
    echo json_encode($following);
}
