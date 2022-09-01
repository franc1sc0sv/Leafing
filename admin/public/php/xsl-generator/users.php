<?php
include_once("../conexion.php");
$objconexion = new conection();
$credentialsdata = $objconexion->consultar("SELECT id,mail_user,token FROM `user_credentials`;");
$userData = $objconexion->consultar("SELECT name,lastname,user_name,borndate,gender FROM `user_data`;");
header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=userdata.xls");
// print_r($userData)
?>

<table border="1">
    <caption>Datos del usuario</caption>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Token</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Nombre de usuario</th>
        <th>Fecha de nacimiento</th>
        <th>Genero</th>
    </tr>
    <tr>
        <?php for ($i = 0; $i < count($credentialsdata); $i++) { ?>

            <td><?php echo $credentialsdata[$i][0] ?></td>
            <td><?php echo $credentialsdata[$i][1] ?></td>
            <td><?php echo $credentialsdata[$i][2] ?></td>
            <td><?php echo $userData[$i][0] ?></td>
            <td><?php echo $userData[$i][1] ?></td>
            <td><?php echo $userData[$i][2] ?></td>
            <td><?php echo $userData[$i][3] ?></td>
            <td><?php echo $userData[$i][4] ?></td>
    </tr>
<?php } ?>
</table>