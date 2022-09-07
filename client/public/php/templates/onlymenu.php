<?php
$objconexion = new conection();
$idUser = $_SESSION['dataID'];
$data = $objconexion->consultar("SELECT * FROM `user_data` WHERE id_user_data = $idUser");
//print_r($data);
?>

<div id="onlyMenu" class="user-menu-container mostrar">
    <div class="menu-img">
        <div class="behind-menu-img">
            <img src="/LEAFING/Crea-J-2022/client/public/assets/user_images/profile_images/<?php echo $data[0]['img_path'] ?>" class="img-profile" alt="Foto de perfil">
            <img src="../../assets/iconos/plus-profile.svg" alt="" class="img-plus">
        </div>
    </div>
    <div class="menu-nombre-usuario">
        <p class="nombre-usuario">
            <?php echo $data[0]['name'], " ", $data[0]['lastname'] ?>
        </p>
    </div>
    <div>
        <div class="menu-opciones">
            <a href="./cuenta.php">
                <div id="showConfig" class="opciones-item home">
                    <img src="/LEAFING/Crea-J-2022/client/public/assets/iconos/Home.svg" class="opciones-icon">
                    <p class="nombre-opcion translate">Cuenta</p>
                </div>
            </a>
            <a href="./contraseña.php">
                <div class="opciones-item password">
                    <img src="/LEAFING/Crea-J-2022/client/public/assets/iconos/Password.svg" class="opciones-icon">
                    <p class="nombre-opcion translate">Contraseña</p>
                </div>
            </a>
            <a href="./mis_eventos.php">
                <div class="opciones-item mis-eventos">
                    <img src="/LEAFING/Crea-J-2022/client/public/assets/iconos/Mis-eventos.svg" class="opciones-icon">
                    <p class="nombre-opcion translate">Mis eventos</p>
                </div>
            </a>
            <a href="./eventos_inscritos.php">
                <div class="opciones-item eventos-inscritos">
                    <img src="/LEAFING/Crea-J-2022/client/public/assets/iconos/Eventos-inscritos.svg" class="opciones-icon">
                    <p class="nombre-opcion translate">Eventos inscritos</p>
                </div>
            </a>
            <div class="cerrar-sesion1">
                <a href="./close.php">
                    <div class="opciones-item cerrar-sesion">
                        <img src="/LEAFING/Crea-J-2022/client/public/assets/iconos/Cerrar-sesion.svg" class="opciones-icon">
                        <p class="nombre-opcion translate">Cerrar sesión</p>

                    </div>
                </a>
            </div>
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
<script src="../../js/account/app_profile.js"></script>
<script src="../../js/account/account.js"></script>
<script src="../../js/form_img.js"></script>