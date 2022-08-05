<?php
//echo $_SERVER['SCRIPT_NAME'];
//print_r($_SESSION);
?>


<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="descripción" content="LEAFING">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/index.php") { ?>
                <!-- Estilos de index-->
                <link rel="stylesheet" href="../css/style_index.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/about_us.php") { ?>
                <!-- Estilos de sobre nosotros-->
                <link rel="stylesheet" href="../css/about-us_style.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/categorias.php") { ?>
                <!-- Estilos de categorias-->
                <link rel="stylesheet" href="../css/categorias.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/comunity.php") { ?>
                <!-- Estilos de comunity-->
                <link rel="stylesheet" href="../css/comunity.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/concientizate.php") { ?>
                <!--Estilos de concientizate-->
                <link rel="stylesheet" href="../css/conzientizate_styles.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/crear_evento.php") { ?>
                <!-- Estilos de crear evento-->
                <link rel="stylesheet" href="../css/crear_evento.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/evento-especifico.php") { ?>
                <!-- Estilos de evento especifico-->
                <link rel="stylesheet" href="../css/inscripcion.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/cuenta.php" || $_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/contraseña.php" || $_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/mis_eventos.php" || $_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/eventos_inscritos.php") { ?>
                <link rel="stylesheet" href="../css/style-header-perfil-usuario.css">
                <link rel="stylesheet" href="../css/footer-style-perfil-usuario.css">
        <?php } else { ?>
                <link rel="stylesheet" href="../css/style_header.css">
                <link rel="stylesheet" href="../css/style_footer.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/cuenta.php") { ?>
                <!--Estilos para el perfil - cuenta -->
                <link rel="stylesheet" href="../css/cuenta-style.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/contraseña.php") { ?>
                <!--Estilos para perfil - contraseñas -->
                <link rel="stylesheet" href="../css/contraseña.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/mis_eventos.php") { ?>
                <!--Estilos para perfil - mis eventos -->
                <link rel="stylesheet" href="../css/mis_eventos.css">
        <?php } ?>

        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/eventos_inscritos.php") { ?>
                <!--Estilos para perfil - eventos inscritos -->
                <link rel="stylesheet" href="../css/eventos_inscritos.css">
        <?php } ?>

        <!--Aqui inicia el modo oscuro-->
        <link rel="stylesheet" href="../css/darkmode.css">
        <!--Favicon-->
        <link rel="icon" href="../img/favicon/favicon(full-vectorizado-2).svg">


        <title>Leafing</title>
</head>

<body class="darkmode">
        <header>
                <nav id="menu">
                        <div class="burger">
                                <img src="../img/iconos/burger_img.svg" class="burger_icon" alt="icon_burger">
                        </div>

                        <div id="links-header">
                                <ul class="menu-header">
                                        <li class="li-menu item-menu-desplegable"><a href="../php/index.php" class="a-header"><span class="translate-header">Inicio</span></a>
                                        </li>
                                        <li class="li-menu item-menu-desplegable"><a href="../php/about_us.php" class="a-header"><span class="translate-header">Nosotros</span></a></li>
                                        <li class="li-menu item-menu-desplegable">
                                                <p class="a-header"><span class="translate-header">Ayuda al planeta</span> <img src="../img/iconos/flechita.svg" class="menu_arrow" alt="flechita"> </p>
                                                <ul class="menu_desplegable">
                                                        <li class="li_menu-despleagble"><a href="../php/categorias.php" class="a-header a-header-desplegable">Eventos</a></li>
                                                        <li class="li_menu-despleagble"><a href="../php/crear_evento.php" class="a-header a-header-desplegable">Crea tus eventos</a></li>
                                                        <li class="li_menu-despleagble"><a href="../php/concientizate.php" class="a-header a-header-desplegable">Concientízate</a></li>
                                                </ul>
                                        </li>
                                        <li class="li-menu item-menu-desplegable">
                                                <p class="a-header"><span class="translate-header">Ajustes especiales</span> <img src="../img/iconos/flechita.svg" class="menu_arrow" alt="flechita"> </p>
                                                <ul class="menu_desplegable">
                                                        <li> <i class="fas fa-toggle-on on" id="btnMode"></i> </li>
                                                        <li class="li_menu-despleagble"><button id="buttonChange">Cambiar xd</button></li>
                                                </ul>
                                        </li>
                                        <li class="li-menu item-menu-desplegable iniciar-sesion-burger"><a href="../php/formulario_inicio-sesion.php" class="a-header"><span class="translate-header">Iniciar sesión</span></a></li>
                                        <li class="li-menu item-menu-desplegable registro-sesion-burger"><a href="../php/formulario_registro.php" class="a-header"><span class="translate-header">Registro</span></a></li>
                                </ul>
                        </div>

                        <div id="leafing-header">
                                <h1 id="LEAFING">Leafing</h1>
                        </div>

                        <?php if (!isset($_SESSION['estatus'])) { ?>
                                <div id="buttons-header">
                                        <a href="./formulario_registro.php" class="text-button"><button class="buttons-header"><span class="translate-header"> Registrarse</span></button></a>
                                        <a href="./formulario_inicio-sesion.php" class="text-button"><button class="buttons-header"><span class="translate-header">Iniciar sesión</span></button></a>
                                </div>
                        <?php } else {
                                $IDuserdata = $_SESSION['dataID'];
                                $objconexion = new conection();
                                $datauser = $objconexion->consultar("SELECT * FROM `user_data` WHERE id_user_data ='$IDuserdata'");
                                //print_r($datauser);
                        ?>
                                <div id="buttons-header">
                                        <!-- <a href="./close.php"><button>CLOSE SESSION</button></a> -->
                                        <ul class="menu-header-perfil">
                                                <li class="li-menu_perfil"><img src="../img/iconos/usuario.png" alt="iconouser" height="50px" width="50px" class="img-perfil">
                                                        <ul class="menu_desplegable-peril">
                                                                <li class="li-menu_perfil-desplegable" -><a class="a-header" href="./cuenta.php"><span class="translate-header"> Mi perfil</span></a></li>
                                                                <li class="li-menu_perfil-desplegable"><a class="a-header" href="./close.php"><span  class="translate-header">Cerrar Sesion</span></a></li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </div>

                        <?php } ?>

                </nav>

                <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/index.php") { ?>
                        <div class="header-container">
                                <h1 class="green translate-header">Sé parte de la solución.</h1>
                                <p class="green translate-header" >El medio amiente está muriendo, sé parte de la solución apoyando y creando eventos comunitarios.</p>
                                <a href="../php/categorias.php"><button class="header-button_index translate-header">Eventos</button></a>
                        </div>
                <?php } ?>

        </header>