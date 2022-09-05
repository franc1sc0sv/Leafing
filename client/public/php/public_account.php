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
            //print_r($user);
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

    <div class="flex-container">

        <div id="onlyMenu" class="user-menu-container mostrar">
            <div class="menu-img">
                <div class="behind-menu-img">
                    <img src="/LEAFING/Crea-J-2022/client/public/assets/user_images/profile_images/<?php echo $user[0][6] ?>" class="img-profile" alt="Foto de perfil">
                </div>
            </div>
            <div class="menu-nombre-usuario">
                <p class="nombre-usuario">
                    <?php echo $user[0][4] ?>
                </p>
                <button class="followButon">Seguir</button>
            </div>

            <div class="followsInfo">
                <p><span>1635</span> Seguidores</p>
                <p><span>13541</span> Seguidos</p>
            </div>
            <div class="about">
                <p class="about-me">"<?php echo $user[0][7] ?>"</p>
            </div>

        </div>

        <div id="onlyConfig" class="configuracion-cuenta-container no-mostrar">
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
<?php } ?>


<?php include_once('./templates/footer.php'); ?>