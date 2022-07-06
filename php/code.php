<?php
include_once('include.php');
include_once("conexion.php");

$email = $_SESSION['mail'];

if ($_SESSION['code'] == true) {
    $_SESSION['code'] = false;

    $objmail = new conection();
    $_SESSION['codeNunber'] = $objmail->sendcode($email);
}

if ($_POST) {
    $codeuser = $_POST['code'];

    if ($codeuser == $_SESSION['codeNunber']) {
        header('location:personal_data.php');
    } else {
        echo "<script> alert('Codigo incorrecto') </script>";
    }
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

    <form action="code.php" method="post">
        <p> Paso 2: Verifica tu correo</p>
        <input type="text" name="code" placeholder="code"><br><br>
        <input type="submit" value="Enviar">
        <a href="./index.php">xD</a>
    </form>
</body>

</html>