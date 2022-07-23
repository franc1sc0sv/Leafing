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
    <?php include_once("./header.php") ?>

    <div class="formulario_container-2">
        <form action="formulario_inicio-sesion.php" method="post" class="formulario_registro">
            <h1>Iniciar sesión</h1>
            <input type="email" placeholder="Correo electrónico" name="email"> <br>
            <input type="password" placeholder="Contraseña" name="password"> <br>
            <input type="submit" name="submit" value="Inicia sesión" id="submit-registrer">

            <p>Ya tienes una cuenta? <a href="./formulario_registro.php">Registrate</a></p>
        </form>

    </div>
    </div>
    </div>


    <?php include_once("./footer.php") ?>
<?php } ?>