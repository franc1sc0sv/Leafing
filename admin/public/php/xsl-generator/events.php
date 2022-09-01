<?php
include_once("../conexion.php");
$objconexion = new conection();
$eventsData = $objconexion->consultar('SELECT events.id_events, events.name_event,events.description_event, events.direccion_evento,events.date_event, events.end_date, user_data.user_name, categories_events.categories, place_events.place, state_events.state FROM `events` 
INNER JOIN categories_events ON events.id_categories_events = categories_events.id_categories_events
INNER JOIN user_data ON events.id_user_data = user_data.id_user_data 
INNER JOIN state_events ON events.id_state_events = state_events.id_state_events 
INNER JOIN place_events ON events.place_event = place_events.id_place;');
header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=eventos.xls");
?>

<table border="1">
    <caption>Datos de los eventos</caption>
    <tr>
        <th>ID</th>
        <th>Nombre del evento</th>
        <th>Direccion evento</th>
        <th>Name</th>
        <th>Fecha de inicio</th>
        <th>Fecha de finalizacion</th>
        <th>Creador</th>
        <th>categorias</th>
        <th>Lugar</th>
        <th>Estado</th>

    </tr>
    <tr>
        <?php for ($i = 0; $i < count($eventsData); $i++) { ?>
            <td><?php echo $eventsData[$i][0] ?></td>
            <td><?php echo $eventsData[$i][1] ?></td>
            <td><?php echo $eventsData[$i][2] ?></td>
            <td><?php echo $eventsData[$i][3] ?></td>
            <td><?php echo $eventsData[$i][4] ?></td>
            <td><?php echo $eventsData[$i][5] ?></td>
            <td><?php echo $eventsData[$i][6] ?></td>
            <td><?php echo $eventsData[$i][7] ?></td>
            <td><?php echo $eventsData[$i][8] ?></td>
            <td><?php echo $eventsData[$i][9] ?></td>
    </tr>
<?php } ?>
</table>