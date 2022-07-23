<?php include_once('./header.php');?>

    <div class="flex-container">
        <div class="user-menu-container">
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
        </div>
        <div class="configuracion-cuenta-container">
            <div class="configuracion-cuenta-container">
                <div class="grid-container">
                    <div class="back">
                        <a href="../html/cuenta.html"  id="showConfig" class="btn"><img src="../img/iconos/back.svg" alt=""></a>
                    </div>
                    <div class="configuracion-name">
                        Configuración de contraseña
                    </div>
                    <form action="" class="form-configuracion">
                        <div class="form__grid-labels">
                            <div class="short-labels antigua-contraseña">
                                <label for="antigua-contraseña">Antigua contraseña</label>
                                <input id="antigua-contraseña" type="password" name="antigua-contraseña">
                            </div>
                            <div class="short-labels nueva-contraseña">
                                <label for="nueva-contraseña">Nueva contraseña</label>
                                <input id="nueva-contraseña" type="password" name="nueva-contraseña">
                            </div>
                            <div class="short-labels confirmar-contra">
                                <label for="confirmar-contra">Confirmar nueva contraseña</label>
                                <input id="confirmar-contra" type="password" name="confirmar-contra">
                            </div>
                        </div>
    
                        <div class="buttons">
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
    </div>

<?php include_once('./footer.php');?>