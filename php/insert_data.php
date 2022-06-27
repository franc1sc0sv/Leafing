<?php
include_once('conexion.php');
if ($_POST) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $obj = new conection();
    $sql = "INSERT INTO `random_curious_data` (`id_curious_data`, `title_curious_data`, `img_curious_data`, `content_curious_data`) VALUES (NULL, '$title', 'img.jpg', '$content');";
    $obj->ejecutar($sql);
    header("location:insert_data.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert_data.php" method="post">

        <input type="text" name="title" placeholder="tilte">
        <input type="text" name="content" placeholder="content">
        <input type="submit" value="enviar">

    </form>
</body>

</html>