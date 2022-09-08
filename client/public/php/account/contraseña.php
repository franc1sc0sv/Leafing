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
                    <a href="./cuenta.php" id="showConfig" class="btn"><img src="../../assets/iconos/back.svg" alt=""></a>
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
<div id="modal_container" class="modal-container">
    <div class="modal" id="modal">
        <div class="contenidoModalInscripcion" id="contenidoModalInscripcion">
            <form action="../../../api/account/accountUpImg.php" method="post" enctype="multipart/form-data" class="formcenter">
                <div class="dragfile_container">
                    <img src="../assets/iconos/cloud-computing.png" alt="" class="dragfile_icon">
                    <p class="translate">Arrastra o suelta tu imagen</p>
                    <p>O</p>
                    <label for="image" class="translate">Elige un archivo</label>
                    <input type="file" name="image" id="imagee">
                    <img alt="" id="img-result" class="dragfile_img">
                </div>
                <br>
                <input name="submit" type="submit" class="submit" value="Guardar">
            </form>
            <button id="close" class="buttonxd">Cerrar</button>
        </div>
    </div>
</div>
<script src="/LEAFING/Crea-J-2022/client/public/js/account/forgetPasswordAccount.js" type="module"></script>
<script src="/LEAFING/Crea-J-2022/client/public/js/account/changePasswordAccount.js" type="module"></script>


<?php include_once('../templates/footer.php'); ?>