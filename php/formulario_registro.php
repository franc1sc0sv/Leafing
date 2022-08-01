<?php
include_once 'include.php';
include_once("conexion.php");

if ($_POST) {
    if (empty($_POST['email'])) {
        echo "<script> alert('ALL FIELDS IS REQUERED')</script>";
    } else {
        $mail = $_POST['email'];
        $password = $_POST['password'];

        $objconexion = new conection();
        $emailrepetido =  $objconexion->consultarform("SELECT * FROM `user_credentials` WHERE mail_user	='$mail'");
        // echo $emailrepetido . " ";
        if ($emailrepetido != 1) {
            $_SESSION['mail'] = $mail;
            $_SESSION['password'] = $password;
            $_SESSION['code'] = true;
            header('location:code.php');
        } else {
            echo "<script> alert('El correo esta repetido')</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/register.css" rel="stylesheet" type="text/css">
    <script src="../js/register_slider.js"></script>
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="alreadysignup">
            <p class="question">Ya tienes una cuenta?</p>
            <a href="../php/formulario_inicio-sesion.php" class="login">Inicia sesión</a>
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
                    <div class="slide">
                        <div class="containerinfo1">
                            <div class="emailpass">
                                <div class="createaccount">
                                    <p>Crea una cuenta</p>
                                </div>
                                <div class="inputs">
                                    <form action="formulario_registro.php" method="post">
                                        <label for="email">Email</label><br>
                                        <input type="email" class="mitexto" id="email" name="email"><br>
                                        <label for="password">Constraseña</label><br>
                                        <img class="eye" src="../img/iconos/eye.svg" alt="">
                                        <input type="password" class="mitexto idk" id="password" name="password">
                                    </form>
                                </div>
                                <div class="next">
                                    <button class="nexto">Siguiente</button>
                                </div>
                            </div>
                            <div class="code">
                                <div class="createaccount">
                                    <p>Comprobar el correo electrónico</p>
                                </div>
                                <div class="textcode">
                                    <p>Para verificar tu correo electrónico
                                        te hemos enviado un código de confirmación a correoejemplo@gmail.com.
                                    </p>
                                </div>
                                <div class="inputs">
                                    <input type="text" class="mitexto">

                                    <div class="sendagain">
                                        <p>Enviar de nuevo el código de nuevo</p>
                                    </div>
                                </div>
                                <div class="next">
                                    <button>Siguiente</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/showpassword.js"></script>
</body>

</html>
<!-- <div class="container_general_fomrms">
    <h1>Crea tu cuenta</h1>

    <div class="container_forms">
        <form action="formulario_registro.php" method="post">
            <p> Paso 1: Tu correo y Contraseña</p>
            <input type="text" name="email" placeholder="mail"><br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</div>

</div>
</div> -->