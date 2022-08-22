<?php include_once 'createEvents.php' ?>

<div class="card">
    <div class="event-img">
        <a href="./evento-especifico.php?estiben=<?php echo $event['id_events'] ?>" target="_blank"><img src="images/<?php echo $image; ?> class="img"></a>
    </div> 
    <div class="cardtext">
        <a href="./evento-especifico.php?estiben=<?php echo $event['id_events'] ?>" target="_blank" class="title"><?php echo resaltar_frase($event['name_event'], $_GET['busca']) ?></a>
        <div class="specificInfo">
            <div class="date">
                <img src="../img/iconos/location.svg" class="location" alt="">
                <?php echo $event['date_event'] ?>
            </div>
            <div class="place">
                <img src="../img/iconos/location.svg" class="location" alt="">
                <?php echo $event['place_event'] ?>
            </div>
        </div>
        <p><?php echo $event['description_event']
            ?></p>

    </div>
    <span class="event-time">
        <span class="day-time">27</span>
        Feb
    </span>
</div>