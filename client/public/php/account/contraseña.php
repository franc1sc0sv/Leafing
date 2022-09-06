<?php
include_once('../templates/include.php');
if (!isset($_SESSION['dataID'])) {
    header("location:../index.php");
}
include_once('../templates/conexion.php');
include_once('../templates/header.php');

?>
<div class="flex-container">

    <?php include_once('../templates/onlymenu.php') ?>

    <div class="configuracion-cuenta-container">
        <div class="configuracion-cuenta-container">
            <div class="grid-container">
                <div class="back">
                    <a href="./cuenta.php" id="showConfig" class="btn"><img src="../img/iconos/back.svg" alt=""></a>
                </div>
                <div class="configuracion-name">
                    <span class="translate">Configuración de contraseña</span>
                </div>
                <form action="contraseña.php" class="form-configuracion" id="formConfiguracionPassword">
                    <div class="form__grid-labels">
                        <div class="short-labels antigua-contraseña">
                            <label for="antigua-contraseña"><span class="translate">Antigua contraseña</span></label>
                            <input id="antigua-contraseña" type="password" name="antigua_contraseña" class="cambio">
                        </div>
                        <div class="short-labels nueva-contraseña">
                            <label for="nueva-contraseña"><span class="translate">Nueva contraseña</span></label>
                            <input id="nueva-contraseña" type="password" name="nueva_contraseña" class="cambio">
                        </div>
                        <div class="short-labels confirmar-contra">
                            <label for="confirmar-contra"><span class="translate">Confirmar nueva contraseña</span></label>
                            <input id="confirmar-contra" type="password" name="confirmar_contra" class="cambio">
                        </div>
                    </div>
                    <p class="forget translate" id="forgetPassword">Olvidaste tu contraseña?</p>
                    <div class="buttons">
                        <div class="guardar-button">
                            <button class="guardar-button" type="submit"><span class="translate">Guardar</span></button>
                        </div>
                        <!-- <div class="cancelar-button">
                            <button class="cancelar-button"><span class="translate">Cancelar</span></button>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
        <div id="alertNotification">

        </div>
    </div>
</div>

<?php include_once('../templates/footer.php'); ?>