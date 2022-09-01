<?php
include_once("../templates/conexion.php");
$objconexion = new conection();
$categories = $objconexion->consultar('SELECT * FROM `categories_events`');
header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=categorias.xls");
?>

<table border="1">
    <caption>Categorias</caption>
    <tr>
        <th>ID</th>
        <th>Categorias ES</th>
        <th>Categorias EN</th>


    </tr>
    <tr>
        <?php for ($i = 0; $i < count($categories); $i++) { ?>
            <td><?php echo $categories[$i][0] ?></td>
            <td><?php echo $categories[$i][1] ?></td>
            <td><?php echo $categories[$i][2] ?></td>

    </tr>
<?php } ?>
</table>