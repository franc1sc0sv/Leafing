<?php
include_once('../public/php/templates/include.php');
include_once('../public/php/templates/conexion.php');

if ($_GET['estatus'] == "stage1") {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $objconexion = new conection;
    $emailrepetido =  $objconexion->consultarform("SELECT * FROM `user_credentials` WHERE mail_user	='$email'");

    if ($emailrepetido != 1) {
        $code = $objconexion->sendcode($email);
        $_SESSION['codeValidation'] = $code;
        $_SESSION['codeStatus'] = false;
        echo json_encode('nice');
    } else {
        echo json_encode('repetido');
    }
} else if ($_GET['estatus'] == "stage2") {
    //print_r($_SESSION);
    if (isset($_SESSION['codeStatus'])) {
        $codeVerification = $_GET['codeVerification'];

        if ($_SESSION['codeStatus'] == true) {
            $objconexion = new conection();

            $Dataemail = $_GET['Dataemail'];
            $Datapassword = $_GET['Datapassword'];

            $borndate = $_GET['borndate'];
            $gender = $_GET['gender'];
            $lastname = $_GET['lastname'];
            $name = $_GET['name'];
            $user_name = $_GET['user'];


            //Password Hashed
            $passwordHashed = password_hash($Datapassword, PASSWORD_DEFAULT, ['cost' => 10]);
            $token = bin2hex(random_bytes(16));
            //Tabla de las credenciales del usuarios
            $sql1 = "INSERT INTO `user_credentials` (`id`, `mail_user`, `password_user`, `token`, `rol_id`) VALUES (NULL, '$Dataemail', '$passwordHashed','$token', '2')";
            $lastID = $objconexion->ejecutar($sql1);
            //Tabla de la data del usuarios
            $sql = "INSERT INTO `user_data` (`id_user_data`, `name`, `lastname`, `borndate`, `user_name`, `gender`, `img_path`, `about_me`) VALUES ($lastID, '$name', '$lastname', '$borndate', '$user_name', '$gender', 'defaultImage.png', '');";
            $objconexion->ejecutar($sql);
            echo json_encode('niceYourAreLogin');
            unset($_SESSION['codeValidation']);
            unset($_SESSION['codeStatus']);
        } else {
            echo "nice try zaz x2";
        }
    } else {
        echo "nice try zaz";
    }
} else if ($_GET['estatus'] == "stage3") {
    $codxd = $_SESSION['codeValidation'];
    $codigouser = $_GET['code'];
    if ($codxd == $codigouser) {
        echo json_encode('correct');
        $_SESSION['codeStatus'] = true;
    } else {
        echo json_encode('incorrect');
    }
}
