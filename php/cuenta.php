<?php
include_once('./include.php');
include_once('./conexion.php');
include_once('./header.php');
$objconexion = new conection();
$idUser = $_SESSION['dataID'];
$data = $objconexion->consultar("SELECT * FROM `user_data` WHERE id_user_data = $idUser");
$dataa = $objconexion->consultar("SELECT * FROM `user_credentials` WHERE id = $idUser");

?>

<div class="flex-container">

    <div id="onlyMenu" class="user-menu-container mostrar">
        <div class="menu-img">
            <div class="behind-menu-img">
                <img src="./images/<?php echo $data[0]['img_path'] ?>" class="img-profile" alt="Foto de perfil">
                <img src="../img/iconos/plus-profile.svg" alt="" class="img-plus">
            </div>
        </div>
        <div class="menu-nombre-usuario">
            <p class="nombre-usuario">
                <?php echo $data[0]['name'], " ", $data[0]['lastname'] ?>
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
            <form action="../php/accountUp.php" method="post" class="form-configuracion" id="formCC">
                <div class="form__grid-labels">
                    <div class="short-labels Nombre">
                        <label for="name" class="translate">Nombre</label>
                        <input id="name" class="diseñoGod change" type="text" name="name" value="<?php echo $data[0]['name']; ?>">
                    </div>
                    <div class="short-labels Apellido">
                        <label for="lastname" class="translate">Apellido</label>
                        <input id="lastname" class="diseñoGod change" type="text" name="lastname" value="<?php echo $data[0]['lastname'] ?>">
                    </div>
                    <div class="short-labels Nombre-de-usuario">
                        <label for="usuario" class="translate">Nombre de usuario</label>
                        <input id="usuario" class="diseñoGod change" type="text" name="usuario" value="<?php echo $data[0]['user_name']; ?>">
                    </div>
                    <div class="short-labels nose-algo">
                        <label for="nose" class="translate">Apodo</label>
                        <input id="nose" class="diseñoGod" type="text" name="nose">
                    </div>
                    <div class="short-labels Email">
                        <label for="email" class="translate">Email</label>
                        <input disabled id="email" class="diseñoGod change" type="email" name="email" value="<?php echo $dataa[0]['mail_user'] ?>">
                    </div>
                    <div class="short-labels Telefono">
                        <label for="telefono" class="translate">Número de teléfono</label>
                        <input id="telefono" class="diseñoGod" type="text" name="telefono">
                    </div>
                    <div class="large-label sobre-mi">
                        <label for="sobre-mi" class="translate">Sobre mí</label>
                        <textarea name="sobre-mi" class="diseñoGod" id="sobre-mi"></textarea>
                    </div>
                    <div class="buttons-container hide" id="cont">
                        <div class="guardar-button">
                            <!-- <button class="guardar-button"><span class="translate">Guardar</span></button> -->
                            <input type="submit" value="Guardar" class="guardar-buttonn">
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
<div id="modal_container" class="modal-container">
    <div class="modal" id="modal">
        <div class="contenidoModalInscripcion" id="contenidoModalInscripcion">

        </div>
    </div>
</div>
<script src="../js/app_profile.js"></script>
<script src="../js/account.js"></script>

<?php include_once('./footer.php'); ?>