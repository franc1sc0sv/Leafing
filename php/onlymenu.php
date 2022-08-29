<?php
$objconexion = new conection();
$idUser = $_SESSION['dataID'];
$data = $objconexion->consultar("SELECT * FROM `user_data` WHERE id_user_data = $idUser");
//print_r($data);
?>

<div id="onlyMenu" class="user-menu-container mostrar">
    <div class="menu-img">
        <div class="behind-menu-img">
            <img src="./imgProfile/<?php echo $data[0]['img_path'] ?>" class="img-profile" alt="Foto de perfil">
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
            <a href="./cuenta.php">
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