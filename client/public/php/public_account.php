<?php
include_once('./templates/include.php');
include_once('./templates/conexion.php');
include_once('./templates/header.php');

$error = false;
//estiben = id del evento
if (isset($_GET['desiree'])) {
    $iduser = $_GET['desiree'];
    if (is_numeric($iduser)) {
        $objconexion = new conection;
        $usersMaxid = $objconexion->consultar("SELECT MAX(id_user_data) FROM `user_data`");
        if ($iduser >= 1 && $iduser <= $usersMaxid[0][0]) {
            $user = $objconexion->consultar("SELECT * FROM `user_data` WHERE id_user_data =  $iduser");
        } else {
            echo "El perfil no existe";
            $error = true;
        }
    } else {
        echo "WTF un error validado";
        $error = true;
    }
} else {
    echo "Nice try estiben";
    $error = true;
}


if (!$error) {
?>
    <link rel="stylesheet" href="../css/responsive_moda_account.css">
    <div class="flex-container">

        <div id="onlyMenu" class="user-menu-container">
            <div class="menu-img">
                <div class="behind-menu-img">
                    <img src="/LEAFING/Crea-J-2022/client/public/assets/user_images/profile_images/<?php echo $user[0][6] ?>" class="img-profile" alt="Foto de perfil">
                </div>
            </div>
            <div class="menu-nombre-usuario">
                <p class="nombre-usuario">
                    <?php echo $user[0][4] ?>
                </p>
                <div id="buttonFollow">

                </div>
                <!-- <div class="sk-fading-circle">
                    <div class="sk-circle1 sk-circle"></div>
                    <div class="sk-circle2 sk-circle"></div>
                    <div class="sk-circle3 sk-circle"></div>
                    <div class="sk-circle4 sk-circle"></div>
                    <div class="sk-circle5 sk-circle"></div>
                    <div class="sk-circle6 sk-circle"></div>
                    <div class="sk-circle7 sk-circle"></div>
                    <div class="sk-circle8 sk-circle"></div>
                    <div class="sk-circle9 sk-circle"></div>
                    <div class="sk-circle10 sk-circle"></div>
                    <div class="sk-circle11 sk-circle"></div>
                    <div class="sk-circle12 sk-circle"></div>
                </div> -->

            </div>

            <div class="followsInfo">
                <p><span id="followers"></span> Seguidores</p>
                <p><span id="following"></span> Seguidos</p>
            </div>
            <div class="about">
                <p class="about-me">"<?php echo $user[0][7] ?>"</p>
            </div>

        </div>

        <div id="onlyConfig" class="configuracion-cuenta-container">
            <div class="grid-container">
                <div class="back">
                    <a href="#" id="showMenu" class="btn"><img src="../img/iconos/back.svg" alt=""></a>
                </div>

                <div class="info_card">
                    <div class="info_header configuracion-name">
                        <span class="s">Informacion de <?php echo $user[0][4] ?></span>
                    </div>
                    <div class="content_info">
                        <p> <span class="infor_content_b">Nombre:</span> <?php echo $user[0][1] ?></p>
                        <p> <span class="infor_content_b">Apellidos:</span> <?php echo $user[0][2] ?></p>
                        <p> <span class="infor_content_b">Nombre de usuario:</span> <?php echo $user[0][4] ?></p>
                    </div>
                </div>

                <div class="myEvents">
                    <div class="configuracion-name">
                        <span class="s">Eventos de <?php echo $user[0][4] ?></span>
                    </div>
                    <div class="eventos-grid">
                        <?php
                        $events = $objconexion->consultar("SELECT * FROM `events` WHERE id_user_data = $iduser");

                        foreach ($events as $event) { ?>

                            <div class="card" id="">
                                <a href="./evento-especifico.php?estiben=<?php echo $event['0'] ?>" class="img_link">
                                    <img src="../assets/user_images/events_images/<?php echo $event['img_event'] ?>" alt="">
                                </a>
                                <div class="card-clock"></div>
                                <p><?php echo $event['name_event'] ?> </p>
                            </div>

                        <?php } ?>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div id="modal_container" class="modal-container">
        <div class="modal" id="modal">
            <div class="contenidoModalInscripcion" id="contenidoModalInscripcion">

            </div>
        </div>
    </div>

    <div id="alertProfile">

    </div>
<?php } ?>

<script src="../js/followers.js"></script>
<?php include_once('./templates/footer.php'); ?>