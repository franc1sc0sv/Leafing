<?php
include_once('./include.php');
include_once('./conexion.php');
include_once('./header.php');; ?>

<div class="flex-container">

    <div id="onlyMenu" class="user-menu-container mostrar">
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
                <a href="#">
                    <div id="showConfig" class="opciones-item home">
                        <img src="../img/iconos/Home.svg" class="opciones-icon">
                        <p class="nombre-opcion translate">Cuenta</p>
                    </div>
                </a>
                <a href="./contraseña.php">
                    <div class="opciones-item password">
                        <img src="../img/iconos/Password.svg" class="opciones-icon">
                        <p class="nombre-opcion translate">Contraseña</p>
                    </div>
                </a>
                <a href="./mis_eventos.php">
                    <div class="opciones-item mis-eventos">
                        <img src="../img/iconos/Mis-eventos.svg" class="opciones-icon">
                        <p class="nombre-opcion translate">Mis eventos</p>
                    </div>
                </a>
                <a href="./eventos_inscritos.php">
                    <div class="opciones-item eventos-inscritos">
                        <img src="../img/iconos/Eventos-inscritos.svg" class="opciones-icon">
                        <p class="nombre-opcion translate">Eventos inscritos</p>
                    </div>
                </a>
                <div class="cerrar-sesion1">
                    <a href="./close.php">
                        <div class="opciones-item cerrar-sesion">
                            <img src="../img/iconos/Cerrar-sesion.svg" class="opciones-icon">
                            <p class="nombre-opcion translate">Cerrar sesión</p>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="onlyConfig" class="configuracion-cuenta-container no-mostrar">
        <div class="grid-container">
            <div class="back">
                <a href="#" id="showMenu" class="btn"><img src="../img/iconos/back.svg" alt=""></a>
            </div>
            <div class="configuracion-name translate">
                Configuración de la cuenta
            </div>
            <form action="" class="form-configuracion">
                <div class="form__grid-labels">
                    <div class="short-labels Nombre">
                        <label for="name" class="translate">Nombre</label>
                        <input id="name" type="text" name="name">
                    </div>
                    <div class="short-labels Apellido">
                        <label for="lastname" class="translate">Apellido</label>
                        <input id="lastname" type="text" name="lastname">
                    </div>
                    <div class="short-labels Nombre-de-usuario">
                        <label for="usuario" class="translate">Nombre de usuario</label>
                        <input id="usuario" type="text" name="usuario">
                    </div>
                    <div class="short-labels nose-algo">
                        <label for="nose" class="translate">Apodo</label>
                        <input id="nose" type="text" name="nose">
                    </div>
                    <div class="short-labels Email">
                        <label for="email" class="translate">Email</label>
                        <input id="email" type="email" name="email">
                    </div>
                    <div class="short-labels Telefono">
                        <label for="telefono" class="translate">Número de teléfono</label>
                        <input id="telefono" type="text" name="telefono">
                    </div>
                    <div class="large-label sobre-mi">
                        <label for="sobre-mi" class="translate">Sobre mí</label>
                        <textarea name="sobre-mi" id="sobre-mi"></textarea>
                    </div>
                </div>

                <div class="buttons-container">
                    <div class="guardar-button">
                        <button class="guardar-button"><span class="translate">Guardar</span></button>
                    </div>
                    <div class="cancelar-button">
                        <button class="cancelar-button" class="boton-negro"><span class="translate">Cancelar</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../js/app_profile.js"></script>

<?php include_once('./footer.php'); ?>