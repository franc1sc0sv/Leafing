<?php //XD 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/login_.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../img/favicon/favicon(full-vectorizado-2).svg">
    <title>Registrarse</title>
</head>

<body>
    <div class="container">
        <div class="container2">
            <div class="alreadysignup">
                <p class="question" class="translate">¿Aún no tienes una cuenta?</p>
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
                        <div class="containerinfo1">
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

                                        <div class="alert" id="alert">

                                        </div>
                                        <div class="next">
                                            <button class="nexto" type="submit"><span class="translate">Siguiente</span></button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="code">
                                <div class="createaccount">
                                    <p class="translate">Comprobar el correo electrónico</p>
                                </div>
                                <div class="textcode">
                                    <p class="translate">Para verificar tu correo electrónico
                                        te hemos enviado un código de confirmación a correoejemplo@gmail.com.
                                    </p>
                                </div>
                                <div class="inputs">
                                    <input type="text" class="mitexto">

                                    <div class="sendagain">
                                        <p class="translate">Enviar el código de nuevo</p>
                                    </div>
                                </div>
                                <div class="next">
                                    <button><span class="translate">Siguiente</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/login.js"> </script>
</body>

</html>