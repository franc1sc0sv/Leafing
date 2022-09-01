<?php

include_once('include.php');
include_once('conexion.php');

$id = $_SESSION['dataID'];

if ($_POST){

    $date = new DateTime();
    
    $image = $date->getTimestamp() . "_" . $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    $allowed =  array('gif','png' ,'jpg', 'jpeg', 'webp', 'svg');
    $filename = $_FILES['image']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    move_uploaded_file($tempImage, "imgProfile/".$image);
    $objConnection = new conection();
    $sql = "UPDATE `user_data` SET `img_path`='$image' WHERE id_user_data = $id";
    $objConnection->ejecutar($sql);

    header('location:cuenta.php');
 

}