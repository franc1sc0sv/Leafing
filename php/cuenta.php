<?php include_once('./header.php');?>

    <div class="flex-container">
        <div id="onlyMenu" class="user-menu-container mostrar no-mostrar">
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
        </div>
        <div id="onlyConfig" class="configuracion-cuenta-container mostrar-2 no-mostrar-2">
            <div class="grid-container">
                <div class="back">
                    <a href="#"  id="showConfig" class="btn"><img src="../img/iconos/back.svg" alt=""></a>
                </div>
                <div class="configuracion-name">
                    Configuración de la cuenta
                </div>
                <form action="" class="form-configuracion">
                    <div class="form__grid-labels">
                        <div class="short-labels Nombre">
                            <label for="name">Nombre</label>
                            <input id="name" type="text" name="name">
                        </div>
                        <div class="short-labels Apellido">
                            <label for="lastname">Apellido</label>
                            <input id="lastname" type="text" name="lastname">
                        </div>
                        <div class="short-labels Nombre-de-usuario">
                            <label for="usuario">Nombre de usuario</label>
                            <input id="usuario" type="text" name="usuario">
                        </div>
                        <div class="short-labels nose-algo">
                            <label for="nose">nose algo</label>
                            <input id="nose" type="text" name="nose">
                        </div>
                        <div class="short-labels Email">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email">
                        </div>
                        <div class="short-labels Telefono">
                            <label for="telefono">Número de teléfono</label>
                            <input id="telefono" type="text" name="telefono">
                        </div>
                        <div class="large-label sobre-mi">
                            <label for="sobre-mi">Sobre mí</label>
                            <textarea name="sobre-mi" id="sobre-mi"></textarea>
                        </div>
                    </div>

                    <div class="buttons-container">
                        <div class="guardar-button">
                            <button class="guardar-button">Guardar</button>
                        </div>
                        <div class="cancelar-button">
                            <button class="cancelar-button">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include_once('./footer.php');?>