<?php session_start();

if (isset($_SESSION['dataID'])) {
    header("location:./index.php");
}
/*  */
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "es";
}
?>
<!DOCTYPE html>
<html lang=<?php echo $_SESSION['lang'] ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/personal_data.css">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/notification.css">
    <link rel="icon" href="../img/favicon/favicon(full-vectorizado-2).svg">
    <title>Registro</title>
</head>

<body>
    <div class="container">
        <div class="container2">
            <div class="alreadysignup">
                <p class="question translate">¿Ya tienes una cuenta?</p>
                <a href="formulario_inicio-sesion.php" class="login"><span class="translate">Inicia sesión</span></a>
            </div>
            <div class="container-form">
                <div class="form">
                    <a class="littleX" href="./index.php"><img src="../assets/iconos/x.svg" alt=""></a>
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
                                    <p class="translate">Crea una cuenta</p>
                                </div>
                                <div class="inputs">
                                    <form action="formulario_registro.php" method="post" id="formEmail">
                                        <div class="emailInput">
                                            <label for="email" class="translate">Email</label><br>
                                            <input type="text" class="mitexto inpuxD" id="email" name="email"><br>
                                        </div>

                                        <div class="passwordinput">
                                            <label for="password" class="translate">Constraseña</label><br>
                                            <input type="password" class="mitexto idk inpuxD" id="password" name="password">
                                            <img class="eye" src="../assets/iconos/visibility_black_24dp.svg" alt="eye icon" id="eye">

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
                                        te hemos enviado un código de confirmación a </p>
                                    <span id="correoEnviado"> correoejemplo@gmail.com. </span>
                                </div>
                                <form action="formulario_registro.php" method="post" id="formCode">
                                    <div class="inputs">
                                        <input type="number" class="mitexto inpuxD" name="codeEmail">
                                    </div>
                                    <div class="sendagain">
                                        <!-- <p class="translate">Enviar de nuevo el código de nuevo</p> -->
                                    </div>

                                    <div class="alertCode" id="alertCode">

                                    </div>

                                    <div class="next">
                                        <button type="submit"><span class="translate">Siguiente</span></button>
                                    </div>
                                </form>
                            </div>
                            <div class="YourInfo">
                                <div class="createaccount" id="completeInfo">
                                    <p class="translate">Completa tu información</p>
                                </div>
                                <div class="inputs">
                                    <form action="formulario_registro.php" method="post" id="formData">

                                        <div class="yeprow">
                                            <div class="nonrow">
                                                <label for="name" class="translate">Nombre</label><br>
                                                <input type="text" name="name" id="name"><br>
                                            </div>

                                            <div class="nonrow">
                                                <label for="lastname" class="translate">Apellido</label><br>
                                                <input type="text" name="lastname" id="lastname"><br>
                                            </div>
                                        </div>

                                        <label for="user" class="translate">Nombre de usuario</label><br>
                                        <input type="text" name="user" id="user"><br>

                                        <div class="yeprow">
                                            <div class="nonrow">
                                                <label for="borndate" class="translate">Fecha de nacimiento</label><br>
                                                <input type="date" name="borndate" id="borndate"><br>
                                            </div>

                                            <div class="nonrow">
                                                <label for="gender" class="translate">Género</label><br>
                                                <input type="text" name="gender" id="gender" id="borndate"><br>
                                            </div>
                                        </div>

                                        <div class="alertData" id="alertData">

                                        </div>

                                        <div class="send">
                                            <input type="submit" value="Enviar">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="alertRegister">
        </div>
    </div>

    <script src="../js/notification.js"></script>
    <script src="../js/register.js" type="module"></script>
    <script src="../js/translate/translate.js" type="module"></script>
</body>

</html>