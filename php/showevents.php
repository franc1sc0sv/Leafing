<div class="card">
    <div>
        <img src="../img/imagenes/limpieza1.png" class="img">
    </div>
    <div class="cardtext">
        <h1><?php echo resaltar_frase($event['name_event'], $_GET['busca']) ?></h1>
        <p><?php echo $event['description_event']
            ?></p>
        <a href="./evento-especifico.php?estiben=<?php echo $event['id_events']?>" class="buttonxd" target="_blank">
            <p>
                Inscribirse
            </p>
            <p>
                <img src="../img/imagenes/menor2.svg">
            </p>
        </a>
    </div>
</div>