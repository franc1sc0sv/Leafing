<?php 
include_once('./include.php');
include_once('./conexion.php');
include_once('./header.php');
;?>
<div class="flex-container">

    <?php include_once('./onlymenu.php') ?>
    
    <div class="configuracion-cuenta-container">
        <div class="configuracion-cuenta-container">
            <div class="grid-container">
                <div class="back">
                    <a href="./cuenta.php" id="showConfig" class="btn"><img src="../img/iconos/back.svg" alt=""></a>
                </div>
                <div class="configuracion-name">
                    <span class="translate"> Mis eventos</span>
                </div>
                <div class="eventos-grid">
                    <div class="card">
                        <img src="../img/imagenes/limpieza1.png" alt="">
                        <div class="card-clock"></div>
                        <p>Recolección de basura</p>
                    </div>
                    <div class="card">
                        <img src="../img/imagenes/limpieza2.png" alt="">
                        <div class="card-clock"></div>
                        <p>Recolección de basura</p>
                    </div>
                    <div class="card">
                        <img src="../img/imagenes/limpieza3.png" alt="">
                        <div class="card-clock"></div>
                        <p>Recolección de basura</p>
                    </div>
                    <div class="card">
                        <img src="../img/imagenes/limpieza6.png" alt="">
                        <div class="card-clock"></div>
                        <p>Recolección de basura</p>
                    </div>
                    <div class="card">
                        <img src="../img/imagenes/limpieza1.png" alt="">
                        <div class="card-clock"></div>
                        <p>Recolección de basura</p>
                    </div>
                    <div class="card">
                        <img class="card-past" src="../img/imagenes/limpieza1.png" alt="">
                        <div class="card-clock clock-active"></div>
                        <p>Recolección de basura</p>
                    </div>
                    <div class="card">
                        <img class="card-past" src="../img/imagenes/limpieza1.png" alt="">
                        <div class="card-clock clock-active"></div>
                        <p>Recolección de basura</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('./footer.php'); ?>
