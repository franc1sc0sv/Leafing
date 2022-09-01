<?php
include_once('../public/php/templates/include.php');
include_once('../public/php/templates/conexion.php');

$id = $_SESSION['dataID'];
$objconexion = new conection();
$data = $objconexion->consultar("SELECT * FROM `user_credentials` WHERE id = $id");
$tokenPro = $data[0][3];
$email = $data[0][1];
mail($email, "Cambio de contraseña", "Entra en este link para cambiar tu contraseña: \n http://localhost/LEAFING/Crea-J-2022/php/changePassword.php?token=$tokenPro");
