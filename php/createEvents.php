<?php
include_once('include.php');
include_once('conexion.php');

if ($_POST) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $place = $_POST['lugar'];
    $address = $_POST['address'];
    $dateS = $_POST['dateStart'];
    $dateE = $_POST['dateEnd'];
    $category = $_POST['categorias'];


    $date = new DateTime();

    $image = $date->getTimestamp() . "_" . $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];
    move_uploaded_file($tempImage, "images/".$image);


    $objConnection = new conection();
    $sql = "INSERT INTO `events` (`id_events`, `name_event`, `img_event`, `description_event`, `place_event`, `direccion_evento`, `date_event`, `end_date`, `id_categories_events`, `id_user_data`, `id_state_events`) VALUES (NULL, '$title', '$image', '$description', '$place', '$address', '$dateS', '$dateE', '$category', '2', '1')";
    $objConnection->ejecutar($sql);

    header("location:crear_evento.php");

    // print_r($title);
    // echo "<br>";
    // print_r($description);
    // echo "<br>";
    // print_r($place);
    // echo "<br>";
    // print_r($address);
    // echo "<br>";
    // print_r($dateS);
    // echo "<br>";
    // print_r($category);
    // echo "<br>";
    // print_r($image);
}

?>