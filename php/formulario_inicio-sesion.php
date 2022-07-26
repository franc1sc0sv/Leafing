<?php
include_once 'include.php';
include_once("conexion.php");

if (isset($_SESSION['estatus'])) {
    header("location:index.php");
} else { ?>
    <?php
    if ($_POST) {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            echo "<script> alert('ALL FIELDS IS REQUERED')</script>";
        } else {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $objconexion = new conection();
            $result = $objconexion->consultarform("SELECT * FROM user_credentials WHERE mail_user = '$email' AND password_user = '$password'");
            //print_r($result);

            if ($result == 1) {
                $result2 = $objconexion->consultar("SELECT * FROM user_credentials WHERE mail_user = '$email' AND password_user = '$password'");
                if ($result2[0]['rol_id'] == 1) {
                    header("location:index_admin.php");
                } else {
                    header("location:index.php");
                    $_SESSION['estatus'] = true;
                    $_SESSION['dataID'] = $result2[0]['id'];
                }
            } else {
                echo "<script> alert('MAIL OR PASSWORD INCORRECT')</script>";
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
    <link href="../css/login.css" rel="stylesheet" type="text/css">
    <title>LogIn</title>
</head>

<body>
    <div class="container">
        <div class="alreadysignup">
            <p class="question">Aún no tienes una cuenta?</p>
            <a href="../php/formulario_registro.php" class="login">Regístrate</a>
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
                                    <p>Inicia sesión</p>
                                </div>
                                <div class="inputs">
                                    <form action="formulario_inicio-sesion.php" method="post">
                                        <label for="email">Correo electrónico</label><br>
                                        <input type="email" class="mitexto" id="email" name="email"><br>
                                        <label for="password">Constraseña</label><br>
                                        <input type="password" class="mitexto" id="password" name="password">
                                        <div class="send">
                                            <input type="submit" name="submit" value="Inicia sesión" id="submit-registrer">
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="next">
                                    <button class="nexto">Siguiente</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

    <!-- <div class="formulario_container-2">
        <form action="formulario_inicio-sesion.php" method="post" class="formulario_registro">
            <h1>Iniciar sesión</h1>
            <input type="email" placeholder="Correo electrónico" name="email"> <br>
            <input type="password" placeholder="Contraseña" name="password"> <br>
            <input type="submit" name="submit" value="Inicia sesión" id="submit-registrer">

            <p>Ya tienes una cuenta? <a href="./formulario_registro.php">Registrate</a></p>
        </form>

    </div>
    </div>
    </div> -->


<?php } ?>