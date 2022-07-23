<?php
// if (isset($_SESSION['estatus'])) {
//         print_r($_SESSION['estatus']);
//         echo " - Logeado";
// } else {
//         echo "deslogeado";
// }
?>


<?php if (($_SERVER['SCRIPT_NAME'] !== "/LEAFING/Crea-J-2022/php/formulario_registro.php") && ($_SERVER['SCRIPT_NAME'] != "/LEAFING/Crea-J-2022/php/formulario_inicio-sesion.php")) { ?>
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
                <!-- Estilos del headegitr y footer-->
                <link rel="stylesheet" href="../css/style_footer.css">
                <!-- Estilos de index-->
                <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/index.php") { ?>
                        <link rel="stylesheet" href="../css/style_index.css">
                <?php } ?>
                <!-- Estilos de sobre nosotros-->
                <link rel="stylesheet" href="../css/about-us_style.css">
                <!-- Estilos de categorias-->
                <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/categorias.php") { ?>
                        <link rel="stylesheet" href="../css/categorias.css">
                <?php } ?>

                <!-- Estilos de comunity-->
                <link rel="stylesheet" href="../css/comunity.css">
                <!--Estilos de concientizate-->
                <link rel="stylesheet" href="../css/conzientizate_styles.css">
                <!-- Estilos de crear evento-->
                <link rel="stylesheet" href="../css/crear_evento.css">
                <!-- Estilos de evento especifico-->
                <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/evento-especifico.php") { ?>
                        <link rel="stylesheet" href="../css/inscripcion.css">
                <?php } ?>
                <!-- Estilos de conzinetizate-->
                <link rel="stylesheet" href="../css/conzientizate_styles.css">

                <!--Estilos para el perfil - cuenta -->
                <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/cuenta.php") { ?>
                        <link rel="stylesheet" href="../css/cuenta-style.css">
                <?php } ?>

                <!--Estilos para perfil - contraseña -->

                <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/cuenta.php" || $_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/contraseña.php" || $_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/mis_eventos.php" || $_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/eventos_inscritos.php" ) { ?>
                        <link rel="stylesheet" href="../css/contraseña.css">
                        <link rel="stylesheet" href="../css/style-header-perfil-usuario.css">
                <?php } else { ?>
                        <link rel="stylesheet" href="../css/style_header.css">
                <?php } ?>

                <!--Estilos para perfil - mis eventos -->
                <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/mis_eventos.php") { ?>
                        <link rel="stylesheet" href="../css/mis_eventos.css">
                <?php } ?>

                <!--Estilos para perfil - eventos inscritos -->
                <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/eventos_inscritos.php") { ?>
                        <link rel="stylesheet" href="../css/eventos_inscritos.css">
                <?php } ?>

                <!--Estilos para perfil - header -->
                <link rel="stylesheet" href="../css/style-header-perfil-usuario.css">

                <!--Estilos para perfil - footer -->
                <link rel="stylesheet" href="../css/footer-style-perfil-usuario.css">
                


                <link rel="icon" href="../img/favicon/favicon(full-vectorizado-2).svg">
                <!--Aqui inicia el modo oscuro-->
                <link rel="stylesheet" href="../css/darkmode.css">
                <script src="../js/darkmode.js" defer> </script>
                <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script>
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
                                                <li class="li-menu item-menu-desplegable"><a href="../php/index.php" class="a-header">Inicio</a>
                                                </li>
                                                <li class="li-menu item-menu-desplegable"><a href="../php/about_us.php" class="a-header">Nosotros</a></li>
                                                <li class="li-menu item-menu-desplegable"><a href="#" class="a-header">Ayuda al planeta <img src="../img/iconos/flechita.svg" class="menu_arrow" alt="flechita"> </a>
                                                        <ul class="menu_desplegable">
                                                                <li class="li_menu-despleagble"><a href="../php/categorias.php" class="a-header a-header-desplegable">Eventos</a></li>
                                                                <li class="li_menu-despleagble"><a href="../php/crear_evento.php" class="a-header a-header-desplegable">Crea tus eventos</a></li>
                                                                <li class="li_menu-despleagble"><a href="../php/concientizate.php" class="a-header a-header-desplegable">Concientízate</a></li>
                                                        </ul>
                                                </li>
                                                <li> <i class="fas fa-toggle-on on" id="btnMode"></i> </li>
                                                <li class="li-menu item-menu-desplegable iniciar-sesion-burger"><a href="../php/formulario_inicio-sesion.php" class="a-header">Iniciar sesión</a></li>
                                                <li class="li-menu item-menu-desplegable registro-sesion-burger"><a href="../php/formulario_registro.php" class="a-header">Registro</a></li>
                                        </ul>
                                </div>

                                <div id="leafing-header">
                                        <h1 id="LEAFING">Leafing</h1>
                                </div>

                                <?php if (!isset($_SESSION['estatus'])) { ?>
                                        <div id="buttons-header">
                                                <a href="./formulario_registro.php" class="text-button"><button class="buttons-header">Registrarse</button></a>
                                                <a href="./formulario_inicio-sesion.php" class="text-button"><button class="buttons-header">Iniciar sesión</button></a>
                                        </div>
                                <?php } else { ?>
                                        <div id="buttons-header">
                                                <a href="./close.php"><button>CLOSE SESSION</button></a>
                                                <p><?php echo $_SESSION['mail'] ?></p>
                                        </div>

                                <?php } ?>

                        </nav>

                        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/index.php") { ?>
                                <div class="header-container">
                                        <h1>Sé parte de la solución</h1>
                                        <p>El medio amiente está muriendo, sé parte de la solución apoyando y creando eventos comunitarios </p>
                                        <a href="../php/categorias.php"><button class="header-button_index">Eventos</button></a>
                                </div>
                        <?php } ?>

                </header>
        <?php } ?>


        <?php if (($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/formulario_registro.php") || ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/formulario_inicio-sesion.php")) { ?>
                <!DOCTYPE html>
                <html lang="en">

                <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="../css/style_footer.css">
                        <link rel="stylesheet" href="../css/style_header.css">
                        <link rel="stylesheet" href="../css/style_menu_improvisado.css">
                        <link rel="icon" href="../img/favicon/favicon(full-vectorizado-2).svg">
                        <!-- Estilos del formulario de registro-->
                        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/formulario_registro.php") { ?>
                                <link rel="stylesheet" href="../css/formulario-registro_v2_style.css">
                        <?php } ?>
                        <!-- Estilos del formulario de inicio de sesion-->
                        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/formulario_inicio-sesion.php") { ?>
                                <link rel="stylesheet" href="../css/formulario-inicio-sesion_style.css">
                        <?php } ?>
                        <title>Leafing</title>
                </head>

                <body>
                        <div class="ilegal">
                                <div id="menu-2">
                                        <div class="burger-2">
                                                <img src="../img/iconos/burger_img.svg" class="burger_icon-2" alt="icon_burger">
                                        </div>

                                        <div id="links-header">
                                                <ul class="menu-header-2">
                                                        <li class="li-menu item-menu-desplegable"><a href="./index.php" class="a-header">Inicio</a>
                                                        </li>
                                                        <li class="li-menu item-menu-desplegable"><a href="./about_us.php" class="a-header">Nosotros</a></li>
                                                        <li class="li-menu item-menu-desplegable"><a href="#" class="a-header">Ayuda al planeta <img src="../img/iconos/flechita.svg" class="menu_arrow" alt="flechita"> </a>
                                                                <ul class="menu_desplegable">
                                                                        <li class="li_menu-despleagble"><a href="./categorias.php" class="a-header a-header-desplegable">Eventos</a></li>
                                                                        <li class="li_menu-despleagble"><a href="./crear_evento.php" class="a-header a-header-desplegable">Crea tus eventos</a></li>
                                                                        <li class="li_menu-despleagble"><a href="./concientizate.php" class="a-header a-header-desplegable">Concientízate</a></li>
                                                                </ul>
                                                        </li>
                                                </ul>
                                        </div>

                                        <div class="leafing-header-2">
                                                <h1 id="LEAFING">Leafing</h1>
                                        </div>
                                </div>
                        </div>

                        <div class="container-general">
                                <div class="container-1">
                                        <header>
                                                <nav id="menu">
                                                        <div class="burger">
                                                                <img src="../img/iconos/burger_img.svg" class="burger_icon">
                                                        </div>

                                                        <div id="links-header">
                                                                <ul class="menu-header">
                                                                        <li class="li-menu item-menu-desplegable"><a href="../php/index.php" class="a-header">Inicio</a>
                                                                        </li>
                                                                        <li class="li-menu item-menu-desplegable"><a href="../php/about_us.php" class="a-header">Nosotros</a></li>
                                                                        <li class="li-menu item-menu-desplegable"><a href="#" class="a-header">Ayuda al planeta <img src="../img/iconos/flechita.svg" class="menu_arrow" alt="flechita"> </a>
                                                                                <ul class="menu_desplegable">
                                                                                        <li class="li_menu-despleagble"><a href="../php/categorias.php" class="a-header a-header-desplegable">Eventos</a></li>
                                                                                        <li class="li_menu-despleagble"><a href="../php/crear_evento.php" class="a-header a-header-desplegable">Crea tus eventos</a></li>
                                                                                        <li class="li_menu-despleagble"><a href="../php/concientizate.php" class="a-header a-header-desplegable">Concientízate</a></li>
                                                                                </ul>
                                                                        </li>

                                                                        <li class="li-menu item-menu-desplegable iniciar-sesion-burger"><a href="../php/formulario_inicio-sesion.php" class="a-header">Iniciar sesión</a></li>
                                                                        <li class="li-menu item-menu-desplegable registro-sesion-burger"><a href="../php/formulario_registro.php" class="a-header">Registro</a></li>
                                                                </ul>
                                                        </div>
                                                </nav>
                                        </header>
                                </div>

                                <div class="container-2">
                                        <div id="leafing-header">
                                                <h1 id="LEAFING">Leafing</h1>
                                        </div>
                                <?php } ?>