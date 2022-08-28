<?php
include_once("../conexion.php");
$objconexion = new conection();
$places = $objconexion->consultar('SELECT * FROM `place_events`');
header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=lugares.xls");
?>

<table border="1">
    <caption>lugares</caption>
    <tr>
        <th>ID</th>
        <th>Lugar</th>


    </tr>
    <tr>
        <?php for ($i = 0; $i < count($places); $i++) { ?>
            <td><?php echo $places[$i][0] ?></td>
            <td><?php echo $places[$i][1] ?></td>
    </tr>
<?php } ?>
</table>