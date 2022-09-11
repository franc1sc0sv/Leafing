<?php
if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = "es";
}

?>


<!DOCTYPE html>
<html lang=<?php echo $_SESSION['lang'] ?> id="html">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="descripción" content="LEAFING">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/style_header.css">
        <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/style_footer.css">
        <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/notification.css">
        <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/menu_dropdown.css">
        <!-- Estilos de index-->
        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/index.php" || $_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/") { ?>
                <link rel="stylesheet" href="../css/style_index.css">
                <link rel="stylesheet" href="../css/darkmode_index.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/about_us.php") { ?>
                <!-- Estilos de sobre nosotros-->
                <link rel="stylesheet" href="../css/about-us_style.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/comunity.php") { ?>
                <!-- Estilos de comunity-->
                <link rel="stylesheet" href="../css/comunity.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/concientizate.php") { ?>
                <!--Estilos de concientizate-->
                <link rel="stylesheet" href="../css/conzientizate_styles.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/crear_evento.php") { ?>
                <!-- Estilos de crear evento-->
                <link rel="stylesheet" href="../css/crear_evento.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/evento-especifico.php" || $_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/crear_evento.php" || $_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/cuenta.php") { ?>
                <!-- Estilos de evento especifico-->
                <link rel="stylesheet" href="../css/inscripcion.css">
        <?php } ?>



        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/account/cuenta.php") { ?>
                <!--Estilos para el perfil - cuenta -->

                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/cuenta-style.css">
                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/crear_evento.css">
                <!-- <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/crear_evento.css"> -->
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/public_account.php") { ?>

                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/cuenta-style.css">
                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/mis_eventos.css">
                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/followInfo.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/account/contraseña.php") { ?>
                <!--Estilos para perfil - contraseñas -->
                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/contraseña.css">
                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/crear_evento.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/account/mis_eventos.php") { ?>
                <!--Estilos para perfil - mis eventos -->
                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/mis_eventos.css">
                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/crear_evento.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/account/eventos_inscritos.php") { ?>
                <!--Estilos para perfil - eventos inscritos -->
                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/eventos_inscritos.css">
                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/crear_evento.css">
        <?php } ?>

        <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/modal.css">

        <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/modalAcount.css">

        <?php if ($_SERVER['SCRIPT_NAME'] != "/LEAFING/Crea-J-2022/client/public/php/index.php") { ?>
                <!--Aqui inicia el modo oscuro-->
                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/darkmode.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/specific_test.php") { ?>
                <!-- Estilos de crear evento-->
                <link rel="stylesheet" href="../css/inscripcion.css">
                <link rel="stylesheet" href="../css/specific.css">
        <?php } ?>


        <!--Favicon-->
        <link rel="icon" href="/LEAFING/Crea-J-2022/client/public/assets/favicon/favicon(full-vectorizado-2).svg">

        <title>Leafing</title>
</head>

<body class="darkmode">

        <header>
                <nav id="menu">
                        <div class="burger">
                                <img src="/LEAFING/Crea-J-2022/client/public/assets/iconos/burger_img.svg" class="burger_icon" alt="icon_burger">
                        </div>
                        <div id="leafing-header">
                                <h1 id="LEAFING">Leafing</h1>

                        </div>

                        <div id="links-header">
                                <ul class="menu-header">
                                        <li class="li-menu item-menu-desplegable"><a href="/LEAFING/Crea-J-2022/client/public/php/index.php" class="a-header"><span class="translateHeader">Inicio</span></a>
                                        </li>
                                        <li class="li-menu item-menu-desplegable"><a href="/LEAFING/Crea-J-2022/client/public/php/about_us.php" class="a-header"><span class="translateHeader">Nosotros</span></a></li>
                                        <li class="li-menu item-menu-desplegable">
                                                <p class="a-header"> <a href="/LEAFING/Crea-J-2022/client/public/php/comunity.php" class="a-header "> <span class="translateHeader">Ayuda al planeta</span></a> <img src="/LEAFING/Crea-J-2022/client/public/assets/iconos/flechita.svg" class="menu_arrow" alt="flechita"> </p>
                                                <ul class="menu_desplegable">
                                                        <li class="li_menu-despleagble"><a href="/LEAFING/Crea-J-2022/client/public/php/comunity.php" class="a-header a-header-desplegable translateHeader">Eventos</a></li>
                                                        <li class="li_menu-despleagble"><a href="/LEAFING/Crea-J-2022/client/public/php/crear_evento.php" class="a-header a-header-desplegable translateHeader">Crea tus eventos</a></li>
                                                        <li class="li_menu-despleagble"><a href="/LEAFING/Crea-J-2022/client/public/php/concientizate.php" class="a-header a-header-desplegable translateHeader">Concientízate</a></li>
                                                </ul>
                                        </li>
                                </ul>
                        </div>

                        <?php if (!isset($_SESSION['estatus'])) { ?>
                                <div id="buttons-header">
                                        <a href="./formulario_registro.php" class="text-button"><button class="buttons-header"><span class="translateHeader"> Registrarse</span></button></a>
                                        <a href="./formulario_inicio-sesion.php" class="text-button"><button class="buttons-header"><span class="translateHeader">Iniciar sesión</span></button></a>
                                        <a href="./formulario_inicio-sesion.php"><img src="/LEAFING/Crea-J-2022/client/public/assets/iconos/login_register.png " class="iconRegisterLogin"></a>
                                </div>
                        <?php } else {
                                $IDuserdata = $_SESSION['dataID'];
                                $objconexion = new conection();
                                $datauser = $objconexion->consultar("SELECT * FROM `user_data` WHERE id_user_data ='$IDuserdata'");
                                $dataemail = $objconexion->consultar("SELECT mail_user FROM `user_credentials` WHERE id ='$IDuserdata'");
                                //Consulta me va a traer a las personas que me siguen
                                $newFollowers = $objconexion->consultar("SELECT date_following, user_data.img_path, user_data.user_name,user_data.id_user_data FROM `followers`
                                INNER JOIN user_data ON followers.id_follower = user_data.id_user_data 
                                WHERE followers.id_following = $IDuserdata ORDER BY date_following DESC");
                                //Consulta me va a traer a las personas que me van a traer los id de las personas que sigo
                                $who_follow = $objconexion->consultar("SELECT user_data.id_user_data FROM `followers` INNER JOIN user_data ON followers.id_following = user_data.id_user_data WHERE followers.id_follower = $IDuserdata");
                                //Las notificaciones que de todos los eventos que suban
                                $notifiactionsEvents = $objconexion->consultar("SELECT notifications_events.date_following, events.id_events, user_data.img_path, user_data.user_name, user_data.id_user_data FROM `notifications_events` INNER JOIN events ON notifications_events.id_events = events.id_events INNER JOIN user_data ON events.id_user_data = user_data.id_user_data;");

                                $arrayFollowers = [];
                                $arrayEventsNotifications = [];
                                $arrayNotifications = [];


                                // array_push($arrayNotifications, $arrayEventsNotifications);
                                for ($i = 0; $i < count($who_follow); $i++) {
                                        array_push($arrayFollowers, $who_follow[$i]['id_user_data']);
                                }
                                // print_r($arrayFollowers);
                                for ($i = 0; $i < count($notifiactionsEvents); $i++) {
                                        if (in_array($notifiactionsEvents[$i]['id_user_data'], $arrayFollowers)) {
                                                array_push($arrayEventsNotifications, $notifiactionsEvents[$i]);
                                        }
                                }

                                for ($i = 0; $i < count($arrayEventsNotifications); $i++) {
                                        array_push($arrayNotifications, $arrayEventsNotifications[$i]);
                                }

                                for ($i = 0; $i < count($newFollowers); $i++) {
                                        array_push($arrayNotifications, $newFollowers[$i]);
                                }

                                // print_r($newFollowers);
                                // print_r($arrayEventsNotifications);
                                $fechasArray = [];
                                foreach ($arrayNotifications as $key => $row) {
                                        $fechasArray[$key] = $row['date_following'];
                                }
                                // print_r($fechasArray);
                                array_multisort($fechasArray, SORT_DESC, $arrayNotifications);
                                // print_r($arrayNotifications);

                        ?>
                                <div id="buttons-header">
                                        <ul class="menu-header-perfil">
                                                <p class="usernamexD"><?php echo $datauser[0]['user_name']; ?></p>
                                                <div class="dropdown-toggle notificationxD" data-toggle="notification-menu">
                                                        <span class="number_notification"><?php echo count($arrayNotifications); ?></span>
                                                        <ul id="notification-menu" class="dropdown-menu notification-menu notificationUl">
                                                                <div class="dropdown-menu-header">
                                                                        <span class="notifications_title">
                                                                                Notifications
                                                                        </span>
                                                                </div>
                                                                <div class="dropdown-menu-content overlay-scrollbar scrollbar-hover">
                                                                        <?php foreach ($arrayNotifications as $arrayNotification) {

                                                                                if (isset($arrayNotification['id_events'])) { ?>
                                                                                        <li class="dropdown-menu-item">
                                                                                                <a href="/LEAFING/Crea-J-2022/client/public/php/specific_test.php?estiben=<?php echo $arrayNotification['id_events'] ?>" class="dropdown-menu-link menu_notification_a">
                                                                                                        <img src="/LEAFING/Crea-J-2022/client/public/assets/user_images/profile_images/<?php echo $arrayNotification['img_path'] ?>" alt="" class="img_perfil_menu_notifications">
                                                                                                        <span>
                                                                                                                <?php echo $arrayNotification['user_name'] ?> a publicado un nuevo evento
                                                                                                                <br>
                                                                                                                <span>
                                                                                                                        <?php echo $arrayNotification['date_following'] ?>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </a>
                                                                                        </li>
                                                                                <?php } else { ?>
                                                                                        <li class="dropdown-menu-item">
                                                                                                <a href="/LEAFING/Crea-J-2022/client/public/php/public_account.php?desiree=<?php echo $arrayNotification['id_user_data'] ?>" class="dropdown-menu-link menu_notification_a">
                                                                                                        <img src="/LEAFING/Crea-J-2022/client/public/assets/user_images/profile_images/<?php echo $arrayNotification['img_path'] ?>" alt="" class="img_perfil_menu_notifications">
                                                                                                        <span>
                                                                                                                <?php echo $arrayNotification['user_name'] ?> a comenzado a seguirte
                                                                                                                <br>
                                                                                                                <span>
                                                                                                                        <?php echo $arrayNotification['date_following'] ?>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </a>
                                                                                        </li>
                                                                                <?php } ?>
                                                                        <?php } ?>

                                                                </div>
                                                        </ul>
                                                </div>
                                                <div class="dropdown-toggle" data-toggle="user-menu" style="background-image: url('/LEAFING/Crea-J-2022/client/public/assets/user_images/profile_images/<?php echo $datauser[0]['img_path'] ?>');background-size: contain;background-size: cover;background-repeat: no-repeat;background-position: center;">
                                                        <ul id="user-menu" class="dropdown-menu">
                                                                <li class="dropdown-menu-item data_user">
                                                                        <img src="/LEAFING/Crea-J-2022/client/public/assets/user_images/profile_images/<?php echo $datauser[0]['img_path'] ?>" alt="" class="img_perfil_menu">
                                                                        <p class="name_perfil"><?php echo $datauser[0]['name'], " ", $datauser[0]['lastname']; ?></p>
                                                                        <p class="correo_perfil"><?php echo $dataemail[0]['mail_user']; ?></p>
                                                                        <a href="/LEAFING/Crea-J-2022/client/public/php/account/cuenta.php">
                                                                                <button class="button_perfil translateHeader"> Gestionar tu cuenta </button>
                                                                        </a>
                                                                </li>
                                                                <li class="dropdown-menu-item close_session">
                                                                        <a href="/LEAFING/Crea-J-2022/client/public/php/templates/close.php" class="dropdown-menu-link link_close translateHeader">
                                                                                Cerrar Sesion
                                                                        </a>
                                                                </li>

                                                        </ul>
                                                </div>
                                        </ul>
                                </div>

                        <?php } ?>
                </nav>

                <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/index.php" || $_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/") { ?>
                        <div class="header-container">
                                <h1 class="green translate">Sé parte de la solución.</h1>
                                <p class="green translate">El medio amiente está muriendo, sé parte de la solución apoyando y creando eventos comunitarios.</p>
                                <a href="../php/comunity.php"><button class="header-button_index"><span class="translate">Eventos</span></button></a>
                        </div>
                <?php } ?>

        </header>