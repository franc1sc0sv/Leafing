<?php
include_once('include.php');
if (!isset($_SESSION['dataID'])) {
    header("location:../index.php");
}
include_once('conexion.php');
if ($_POST) {
    $objconexion = new conection();
    $mail = $_SESSION['mail'];
    $password = $_SESSION['password'];

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $borndate = $_POST['borndate'];

    $sql1 = "INSERT INTO `user_credentials` (`id`, `mail_user`, `password_user`, `rol_id`) VALUES (NULL, '$mail', '$password', '2')";
    $lastID = $objconexion->ejecutar($sql1);
    echo $lastID;
    $sql = "INSERT INTO `user_data` (`id_user_data`, `name`, `lastname`, `borndate`) VALUES ($lastID, '$name', '$lastname', '$borndate')";
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
    <link href="../css/personal_data.css" rel="stylesheet" type="text/css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="haventsignup">
            <p class="question">Ya tienes una cuenta?</p>
            <p class="login">Inicia sesión</p>
        </div>
        <div class="container2">
            <div class="container-form">
                <div class="form">
                    <div class="littleX">

                    </div>
                    <div class="title">
                        <p class="leafing">
                            LEAFING
                        </p>
                    </div>
                    <div class="logo">
                    </div>

                    <!-- <div class="containerinfo1"> -->
                    <div class="createaccount">
                        <p>Completa tu información</p>
                    </div>
                    <div class="inputs">
                        <form action="personal_data.php" method="post">

                            <div class="yeprow">
                                <div class="nonrow">
                                    <label for="name">Nombre</label><br>
                                    <input type="text" name="name" id="name"><br>
                                </div>

                                <div class="nonrow">
                                    <label for="lastname">Apellido</label><br>
                                    <input type="text" name="lastname" id="lastname"><br>
                                </div>
                            </div>

                            <label for="user">Nombre de usuario</label><br>
                            <input type="text" name="user" id="user"><br>

                            <div class="yeprow">
                                <div class="nonrow">
                                    <label for="borndate">Fecha de nacimiento</label><br>
                                    <input type="date" name="borndate" id="borndate"><br>
                                </div>

                                <div class="nonrow">
                                    <label for="gender">Género</label><br>
                                    <input type="text" name="gender" id="gender" id="borndate"><br>
                                </div>
                            </div>
                            <div class="send">
                                <input type="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!-- <!DOCTYPE html>
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

</html> -->