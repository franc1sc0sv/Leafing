<div class="card">
    <div>
        <img src="../img/imagenes/limpieza1.png" class="img">
    </div>
    <div class="cardtext">
        <h1><?php echo resaltar_frase($event['name_event'], $_POST['busca']) ?></h1>
        <p><?php echo $event['description_event']
            ?></p>
        <a href="./evento-especifico.php" class="buttonxd">
            <p>
                Inscribirse
            </p>
            <p>
                <img src="../img/imagenes/menor2.svg">
            </p>
        </a>
    </div>
</div>