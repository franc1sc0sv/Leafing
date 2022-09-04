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
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/account/mis_eventos.php") { ?>
                <!--Estilos para perfil - mis eventos -->
                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/mis_eventos.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/account/eventos_inscritos.php") { ?>
                <!--Estilos para perfil - eventos inscritos -->
                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/eventos_inscritos.css">
        <?php } ?>

        <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/modal.css">

        <?php if ($_SERVER['SCRIPT_NAME'] != "/LEAFING/Crea-J-2022/client/public/php/index.php") { ?>
                <!--Aqui inicia el modo oscuro-->
                <link rel="stylesheet" href="/LEAFING/Crea-J-2022/client/public/css/darkmode.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/client/public/php/specific_test.php") { ?>
                <!-- Estilos de crear evento-->
                <link rel="stylesheet" href="../css/specific.css">
        <?php } ?>
        
        
        <!--Favicon-->
        <link rel="icon" href="../img/favicon/favicon(full-vectorizado-2).svg">

        <title>Leafing</title>
</head>

<body class="darkmode">

        <header>
                <nav id="menu">
                        <div class="burger">
                                <img src="../assets/iconos/burger_img.svg" class="burger_icon" alt="icon_burger">
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
                                                <p class="a-header"><span class="translateHeader">Ayuda al planeta</span> <img src="/LEAFING/Crea-J-2022/client/public/assets/iconos/flechita.svg" class="menu_arrow" alt="flechita"> </p>
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
                                </div>
                        <?php } else {
                                $IDuserdata = $_SESSION['dataID'];
                                $objconexion = new conection();
                                $datauser = $objconexion->consultar("SELECT * FROM `user_data` WHERE id_user_data ='$IDuserdata'");
                                //print_r($datauser);
                        ?>
                                <div id="buttons-header">
                                        <ul class="menu-header-perfil">
                                                <p><?php echo $datauser[0]['user_name']; ?></p>
                                                <div class="dropdown-toggle" data-toggle="user-menu" style="background-image: url(/LEAFING/Crea-J-2022/client/public/assets/user_images/profile_images/<?php echo $datauser[0]['img_path'] ?>);background-size: contain;background-size: cover;background-repeat: no-repeat;">
                                                        <ul id="user-menu" class="dropdown-menu">
                                                                <li class="dropdown-menu-item">
                                                                        <a class="dropdown-menu-link">
                                                                                <span>Profile</span>
                                                                        </a>
                                                                </li>
                                                                <li class="dropdown-menu-item">
                                                                        <a href="#" class="dropdown-menu-link">
                                                                                <span>Settings</span>
                                                                        </a>
                                                                </li>
                                                                <li class="dropdown-menu-item">
                                                                        <a href="#" class="dropdown-menu-link">
                                                                                <span>Payments</span>
                                                                        </a>
                                                                </li>
                                                                <li class="dropdown-menu-item">
                                                                        <a href="#" class="dropdown-menu-link">
                                                                                <span>Projects</span>
                                                                        </a>
                                                                </li>
                                                                <li class="dropdown-menu-item">
                                                                        <a href="#" class="dropdown-menu-link">
                                                                                <span>Logout</span>
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