<?php session_start();
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "es";
} ?>
<!DOCTYPE html>
<html lang=<?php echo $_SESSION['lang'] ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/login_.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/notification.css">
    <link rel="icon" href="../img/favicon/favicon(full-vectorizado-2).svg">
    <title>Leafing</title>
</head>

<body>
    <div class="container" id="container">
        <div class="container2">
            <div class="alreadysignup">
                <p class="question"> <span class="translate"> ¿Aún no tienes una cuenta?</span></p>
                <a href="../php/formulario_registro.php" class="login"><span class="translate">Regístrate</span></a>
            </div>
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
                            <div class="emailpass">
                                <div class="createaccount">
                                    <p class="translate">Inicia sesión</p>
                                </div>
                                <div class="inputs">
                                    <form action="formulario_inicio-sesion.php" method="post" id="formCredentials">
                                        <div class="emailInput">
                                            <label for="email" class="translate">Email</label><br>
                                            <input type="email" class="mitexto" id="email" name="email"><br>
                                        </div>

                                        <div class="passwordInput">
                                            <label for="password" class="translate">Contraseña</label><br>
                                            <input type="password" class="mitexto" id="password" name="password">
                                            <img class="eye" src="../img/iconos/visibility_black_24dp.svg" alt="eye icon" id="eye">
                                        </div>

                                        <div class="forget">
                                            <p id="passordForget" class="translate">
                                                Olvide mi contraseña
                                            </p>
                                        </div>
                                        <div class="next">
                                            <button class="nexto" type="submit"><span class="translate">Siguiente</span></button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="code">
                                <form action="formulario_inicio-sesion.php" method="post" id="formEmail">
                                    <div class="createaccount">
                                        <p class="translate">Olvidaste tu correo electrónico</p>
                                    </div>
                                    <div class="textcode">
                                        <p class="translate">Escribe tu correo electronico y te mandaremos las instrucciones de como restablecerla</p>
                                    </div>

                                    <div class="inputs">
                                        <input type="email" class="mitexto" name="email">
                                    </div>
                                    <div class="regresar" id="regresar">
                                        <p class="translate">Regresar</p>
                                    </div>

                                    <div class="next">
                                        <button type="submit"><span class="translate" id="enviarcodigo">Enviar</span></button>
                                    </div>
                                </form>
                            </div>
                            <div class="mensaje">
                                <form action="formulario_inicio-sesion.php" method="post" id="formEmail">
                                    <div class="createaccount">
                                        <p class="translate">El siguiente paso</p>
                                    </div>
                                    <div class="textcode">
                                        <p class="translate">Revisa tu correo con las instrucciones</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="alertLogin">

        </div>
    </div>
    <script src="../js/notification.js"></script>
    <script src="../js/forgetPassword.js" type="module"></script>
    <script src="../js/translate.js" type="module"></script>
    <script src="../js/login.js" type="module"> </script>

</body>

</html>