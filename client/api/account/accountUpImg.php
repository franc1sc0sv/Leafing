<?php

include_once('../../public/php/templates/include.php');
include_once('../../public/php/templates/conexion.php');

$id = $_SESSION['dataID'];

if ($_POST) {
    if (!empty($_FILES['image']['name'])) {
        print_r($_FILES);
        $date = new DateTime();

        $image = $date->getTimestamp() . "_" . $_FILES['image']['name'];
        $tempImage = $_FILES['image']['tmp_name'];

        $allowed =  array('gif', 'png', 'jpg', 'jpeg', 'webp', 'svg');
        $filename = $_FILES['image']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if (!in_array($ext, $allowed)) {
            header('location:../../public/php/account/cuenta.php');
        } else {
            move_uploaded_file($tempImage, "../../public/assets/user_images/profile_images/" . $image);
            $objConnection = new conection();
            $sql = "UPDATE `user_data` SET `img_path`='$image' WHERE id_user_data = $id";
            $objConnection->ejecutar($sql);
        }
        header('location:../../public/php/account/cuenta.php');
    } else {
        header('location:../../public/php/account/cuenta.php');
    }
}
