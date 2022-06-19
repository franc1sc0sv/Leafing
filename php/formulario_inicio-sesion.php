<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_footer.css">
    <link rel="stylesheet" href="../css/style_header.css">
    <link rel="stylesheet" href="../css/formulario-inicio-sesion_style.css">
    <link rel="stylesheet" href="../css/style_menu_improvisado.css">
    <link rel="icon" href="../img/favicon/favicon(full-vectorizado-2).svg">
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
                    <li class="li-menu item-menu-desplegable"><a href="../html/index.html" class="a-header">Inicio</a>
                    </li>
                    <li class="li-menu item-menu-desplegable"><a href="../html/about_us.html"
                            class="a-header">Nosotros</a></li>
                    <li class="li-menu item-menu-desplegable"><a href="#" class="a-header">Ayuda al planeta <img
                                src="../img/iconos/flechita.svg" class="menu_arrow" alt="flechita"> </a>
                        <ul class="menu_desplegable">
                            <li class="li_menu-despleagble"><a href="../html/categorias.html"
                                    class="a-header a-header-desplegable">Eventos</a></li>
                            <li class="li_menu-despleagble"><a href="../html/crear_evento.html"
                                    class="a-header a-header-desplegable">Crea tus eventos</a></li>
                            <li class="li_menu-despleagble"><a href="../html/concientizate.html"
                                    class="a-header a-header-desplegable">Concientízate</a></li>
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
                            <li class="li-menu item-menu-desplegable"><a href="../html/index.html"
                                    class="a-header">Inicio</a></li>
                            <li class="li-menu item-menu-desplegable"><a href="../html/about_us.html"
                                    class="a-header">Nosotros</a></li>
                            <li class="li-menu item-menu-desplegable"><a href="#" class="a-header">Ayuda al planeta <img
                                        src="../img/iconos/flechita.svg" class="menu_arrow"> </a>
                                <ul class="menu_desplegable">
                                    <li class="li_menu-despleagble"><a href="../html/categorias.html"
                                            class="a-header a-header-desplegable">Eventos</a></li>
                                    <li class="li_menu-despleagble"><a href="../html/crear_evento.html"
                                            class="a-header a-header-desplegable">Crea tus eventos</a></li>
                                    <li class="li_menu-despleagble"><a href="../html/concientizate.html"
                                            class="a-header a-header-desplegable">Concientízate</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>

        <div class="container-2">
            <div id="leafing-header">
                <h1 id="LEAFING">Leafing</h1>
            </div>

            <div class="formulario_container-2">
                <form action="./" method="post" class="formulario_registro">
                    <h1>Iniciar sesión</h1>

                    <input type="email" placeholder="Correo electrónico" name="email"> <br>
                    <input type="password" placeholder="Contraseña" name="password"> <br>
                    <input type="submit" name="submit" value="Inicia sesión" id="submit-registrer">

                    <p>Ya tienes una cuenta? <a href="../html/formulario_registro_v2.html">Registrate</a></p>
                </form>

            </div>
        </div>
    </div>
    
    
    <?php include_once("./footer.php") ?>

    <script src="../js/app_burger.js"></script>
    <script src="../js/app_burger_improvisado.js"></script>
</body>

</html>