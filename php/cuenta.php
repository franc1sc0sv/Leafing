<?php 
include_once('./include.php');
include_once('./conexion.php');
include_once('./header.php');
;?>

    <div class="flex-container">
        
        <?php include_once('./onlymenu.php') ?>

        <div id="onlyConfig" class="configuracion-cuenta-container no-mostrar">
            <div class="grid-container">
                <div class="back">
                    <a href="#"  id="showMenu" class="btn"><img src="../img/iconos/back.svg" alt=""></a>
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
    <script src="../js/app_profile.js"></script>

    <?php include_once('./footer.php');?>