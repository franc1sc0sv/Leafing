<?php
//Archivo dedicado para hacer un include y optimizar codigo del header
?>
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

                        <li class="li-menu item-menu-desplegable iniciar-sesion-burger"><a href="../php/formulario_inicio-sesion.php" class="a-header">Iniciar sesión</a></li>
                        <li class="li-menu item-menu-desplegable registro-sesion-burger"><a href="../php/formulario_registro.php" class="a-header">Registro</a></li>
                </ul>
        </div>

        <div id="leafing-header">
                <h1 id="LEAFING">Leafing</h1>
        </div>

        <div id="buttons-header">
                <a href="../html/formulario_registro_v2.html" class="text-button"><button class="buttons-header">Registrarse</button></a>
                <a href="../html/formulario_inicio-sesion.html" class="text-button"><button class="buttons-header">Iniciar sesión</button></a>
        </div>
</nav>