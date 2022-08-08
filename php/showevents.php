<div class="card">
    <div class="event-img">
        <a href="./evento-especifico.php?estiben=<?php echo $event['id_events'] ?>" target="_blank"><img src="https://img.freepik.com/foto-gratis/equipo-voluntario-multietnico-quitando-basura-hierba_1262-21191.jpg?w=1380&t=st=1659765322~exp=1659765922~hmac=2d1e91e1c03ff53d2933078b1348599fad72b1d8114c449e011fc208f2eb6352" class="img"></a>
    </div>
    <div class="cardtext">
        <a href="./evento-especifico.php?estiben=<?php echo $event['id_events'] ?>" target="_blank" class="title"><?php echo resaltar_frase($event['name_event'], $_GET['busca']) ?></a>
        <div class="specificInfo">
            <div class="date">
                <img src="../img/iconos/location.svg" class="location" alt="">
                27 - Junio
            </div>
            <div class="place">
                <img src="../img/iconos/location.svg" class="location" alt="">
                <?php echo $event['place_event'] ?>
            </div>
        </div>
        <p><?php echo $event['description_event']
            ?></p>
        <a href="./evento-especifico.php?estiben=<?php echo $event['id_events'] ?>" class="button" target="_blank">
            Inscribirse
        </a>
    </div>
    <span class="event-time">
        <span class="day-time">27</span>
        Feb
    </span>
</div>