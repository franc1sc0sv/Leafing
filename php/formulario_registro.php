<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_footer.css">
    <link rel="stylesheet" href="../css/style_header.css">
    <link rel="stylesheet" href="../css/formulario-registro_v2_style.css">
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
                    <h1>Crea una cuenta</h1>

                    <input type="text" placeholder="Nombre completo" name="name"> <br>
                    <input type="email" placeholder="Correo electrónico" name="name"> <br>
                    <input type="text" placeholder="Contraseña" name="name"> <br>
                    <input type="text" placeholder="Confirmar contraseña" name="name"> <br>
                    <div>
                        <input type="checkbox" name="terms-conditions">
                        <label for="terms-conditions">Estoy de acuerdo con los <a href="#"> Terminos de
                                privacidad</a></label> <br>
                    </div>
                    <input type="submit" name="submit" value="Registrarse" id="submit-registrer">

                    <p>Ya tienes una cuenta? <a href="../html/formulario_inicio-sesion.html">Inicia sesión</a></p>
                </form>

            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="image-footer">
                <img src="../img/logo/Logo_Negativo.png" alt="Logo-footer" id="img-footer">
            </div>
            <div class="links-footer">
                <ul class="ul-footer">
                    <li class="li-footer"><a href="../html/about_us.html" class="a-footer">Nosotros</a></li>
                    <li class="li-footer"><a href="..//html/comunity.html" class="a-footer">Comunidad</a></li>
                    <li class="li-footer"><a href="../html/concientizate.html" class="a-footer">Concientízate</a></li>
                    <li class="li-footer"><a href="../html/categorias.html" class="a-footer">Eventos</a></li>
                </ul>
            </div>

            <div class="Rights-SocialIcons">
                <div class="hr-footer">
                    <hr id="hr-footer">
                </div>

                <div id="R-icon">
                    <div id="Rights">
                        <p id="p-footer">©2022 Todos los derechos reservados</p>
                    </div>
                    <div id="socialIcons-footer">
                        <img src="../img/iconos/Social Icons_fb.svg" alt="fbIcon" class="SocialIcons">
                        <img src="../img/iconos/Social Icons_tw.svg" alt="twIcon" class="SocialIcons">
                        <img src="../img/iconos/Social Icons_ig.svg" alt="igIcon" class="SocialIcons">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/app_burger.js"></script>
    <script src="../js/app_burger_improvisado.js"></script>
</body>

</html>