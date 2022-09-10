<?php
include_once('../public/php/templates/include.php');
include_once('../public/php/templates/conexion.php');


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

    $allowed =  array('gif', 'png', 'jpg', 'jpeg', 'webp', 'svg');
    $filename = $_FILES['image']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);



    $DateAndTime = date('Y-m-d h:i:s', time()); //ver zona horaria

    $fecgaEvent1 = new DateTime($dateS);
    $fecgaEvent2 = new DateTime($dateE);

    $fecgaEvent1->modify('+1 hours');
    // echo $fecgaEvent1->format('d-m-Y H:i:s');
    // echo $fecgaEvent2->format('d-m-Y H:i:s');
    // if ($fecgaEvent1 >= $fecgaEvent2) {
    //     echo "xD";
    // }
    if (empty($title) || empty($description) || empty($place) || empty($address) || empty($dateS) || empty($dateE) || empty($category) || empty($image)) {
        echo json_encode('EmptyFields'); //Arreglar empty image
    } else if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9_,.' -]{5,80}$/", $title)) {
        echo json_encode('TitleNotMatched');
    } else if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9_,.()' -]{15,500}$/", $description)) {
        echo json_encode('DescriptionNotMatched');
    } else if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9_,.&'()# -]{8,60}$/", $address)) {
        echo json_encode('AddressNotMatched');
    } else if ($DateAndTime > $dateS) {
        echo json_encode('DateStartNotMatched');
    } else if ($dateS > $dateE) {
        echo json_encode('DateEndNotMatched');
    } else if ($fecgaEvent1 >= $fecgaEvent2) {
        echo json_encode('timeEvent');
    } else if (!in_array($ext, $allowed)) {
        echo json_encode('FilesNotMatched');
    } else {
        move_uploaded_file($tempImage, "../public/assets/user_images/events_images/" . $image);
        $objConnection = new conection();
        $id = $_SESSION['dataID'];
        $sql = "INSERT INTO `events` (`id_events`, `name_event`, `img_event`, `description_event`, `place_event`, `direccion_evento`, `date_event`, `end_date`, `id_categories_events`, `id_user_data`, `id_state_events`) VALUES (NULL, '$title', '$image', '$description', '$place', '$address', '$dateS', '$dateE', '$category', '$id', '1')";
        $objConnection->ejecutar($sql);

        echo json_encode('Nice');

        // header("location:crear_evento.php");
    }
}
?>