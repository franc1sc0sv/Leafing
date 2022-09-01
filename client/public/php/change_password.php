<?php session_start();
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "es";
}
include_once('./templates/conexion.php');
?>
<!DOCTYPE html>
<html lang=<?php echo $_SESSION['lang'] ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/changePassword.css">
    <link rel="stylesheet" href="../css/notification.css">
    <link rel="icon" href="../img/favicon/favicon(full-vectorizado-2).svg">
    <title>Leafing</title>
</head>

<body>
    <div class="container" id="container">
        <div class="container2">
            <div class="container-form">
                <div class="form">
                    <a class="littleX" href="../php/index.php"><img src="../img/iconos/x.svg" alt=""></a>
                    <div class="title">
                        <p class="leafing">
                            LEAFING
                        </p>
                    </div>
                    <div class="logo">
                    </div>
                    <div class="slide">
                        <div class="containerinfo1" id="containerinfo1">
                            <?php
                            if (isset($_GET['token'])) {

                                $token = $_GET['token'];
                                $objconexion = new conection();
                                $token = $objconexion->consultarform("SELECT * FROM `user_credentials` WHERE token = '$token'");

                                if ($token == 1) { ?>

                                    <div class="emailpass">
                                        <div class="createaccount">
                                            <p class="translate">Cambia tu contraseña</p>
                                        </div>
                                        <div class="inputs">
                                            <form action="changePassword.php" method="post" id="formCredentialsChangePassword">
                                                <div class="emailInput">
                                                    <label for="email" class="translate">Contraseña</label><br>
                                                    <input type="password" class="mitexto" id="email" name="password"><br>
                                                    <!-- <img class="eye" src="../img/iconos/visibility_black_24dp.svg" alt="eye icon" id="eye2"> -->
                                                </div>

                                                <div class="passwordInput">
                                                    <label for="passwordRe" class="translate">Repetir contraseña</label><br>
                                                    <input type="password" class="mitexto" id="password" name="passwordRe">
                                                    <!-- <img class="eye" src="../img/iconos/visibility_black_24dp.svg" alt="eye icon" id="eye"> -->
                                                </div>

                                                <div class="next">
                                                    <button class="nexto" type="submit"><span class="translate">Enviar</span></button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                <?php } else {
                                    echo "<H1>TOKEN INCORRECTO</H1>";
                                } ?>
                            <?php } else {
                                echo "<H1>TOKEN INVALIDO</H1>";
                            } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="alertXDD">

        </div>
    </div>
    <script src="../js/notification.js"></script>
    <script src="../js/changePassword.js" type="module"></script>
    <script src="../js/translate/translate.js" type="module"></script>
    <!-- <script src="../js/login.js" type="module"> </script> -->

</body>