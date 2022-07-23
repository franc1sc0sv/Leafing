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
                    Mis eventos
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


<!-- <div class="user-menu-container">
                <div class="menu-img">
                    <div class="behind-menu-img">
                        <img src="../img/imagenes/rei3.jpg" class="img-profile" alt="Foto de perfil">
                        <img src="../img/iconos/plus-profile.svg" alt="" class="img-plus"> 
                    </div>
                </div>
            <div class="menu-nombre-usuario">
                <p class="nombre-usuario">
                    Ayanami Rei
                </p>
            </div>
            <div>
                <div class="menu-opciones">
                    <a href="../html/cuenta.html">
                        <div id="showMenu" class="opciones-item home">
                            <img src="../img/iconos/Home.svg" class="opciones-icon">
                            <p class="nombre-opcion">Cuenta</p>
                        </div>
                    </a>
                    <a href="../html/constraseña.html">
                        <div class="opciones-item password">
                            <img src="../img/iconos/Password.svg" class="opciones-icon">
                            <p class="nombre-opcion">Contraseña</p>
                        </div>
                    </a>
                    <a href="../html/mis_eventos.html">
                        <div class="opciones-item mis-eventos">
                            <img src="../img/iconos/Mis-eventos.svg" class="opciones-icon">
                            <p class="nombre-opcion">Mis eventos</p>
                        </div>
                    </a>
                    <a href="../html/eventos_inscritos.html">
                        <div class="opciones-item eventos-inscritos">
                            <img src="../img/iconos/Eventos-inscritos.svg" class="opciones-icon">
                            <p class="nombre-opcion">Eventos inscritos</p>
                        </div>
                    </a>
                    <div class="cerrar-sesion1">
                        <div class="opciones-item cerrar-sesion">
                            <img src="../img/iconos/Cerrar-sesion.svg" class="opciones-icon">
                            <p class="nombre-opcion">Cerrar sesión</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->