<?php
include_once('include.php');
include_once("conexion.php");
if ($_POST) {
    $objconexion = new conection();
    $mail = $_SESSION['mail'];
    $password = $_SESSION['password'];
    $sql1 = "INSERT INTO `user_credentials` (`id`, `mail_user`, `password_user`, `rol_id`) VALUES (NULL, '$mail', '$password', '2')";
    $objconexion->ejecutar($sql1);

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $borndate = $_POST['borndate'];

    $sql = "INSERT INTO `user_data` (`id_user_data`, `name`, `lastname`, `borndate`) VALUES (NULL, '$name', '$lastname', '$borndate')";
    $objconexion->ejecutar($sql);
    header('location:index.php');
    session_destroy();
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
    <form action="personal_data.php" method="post">
        Nombres:
        <input type="text" placeholder="Nombres:" name="name"><br>
        Apellidos:
        <input type="text" placeholder="Apellidos" name="lastname"><br>
        Fecha de nacimiento:
        <input type="date" name="borndate"><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>