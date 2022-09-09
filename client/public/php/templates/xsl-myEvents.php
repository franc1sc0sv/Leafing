<?php
include_once('conexion.php');
$idEvent = $_GET['id'];
$objconexion = new conection();
$data = $objconexion->consultar("SELECT inscriptions.id_inscriptions, user_data.name, user_data.lastname, user_data.name, user_credentials.mail_user FROM `inscriptions` 
INNER JOIN user_credentials ON inscriptions.id_persona_inscrita = user_credentials.id 
INNER JOIN user_data ON inscriptions.id_persona_inscrita = user_data.id_user_data WHERE id_event = $idEvent");
header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=Personas_inscritas.xls");
?>

<table border="1">
    <caption>Personas inscritas</caption>
    <tr>
        <th>ID inscription</th>
        <th>Nombre</th>
        <th>Nombre de usuario</th>
        <th>Email</th>
    </tr>
    <tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <td><?php echo $data[$i][0] ?></td>
            <td><?php echo $data[$i][1] . " " .  $data[$i][2] ?></td>
            <td><?php echo $data[$i][3] ?></td>
            <td><?php echo $data[$i][4] ?></td>

    </tr>
<?php } ?>
</table>