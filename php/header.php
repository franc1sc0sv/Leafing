<?php
if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = "es";
}
//print_r($_SESSION);
//$objconexionxD = new conection();
//$xD = $objconexionxD->consultar("SELECT * FROM `user_data` WHERE id_user_data = 6");
//print_r($xD);
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
        <link rel="stylesheet" href="../css/style_header.css">
        <link rel="stylesheet" href="../css/style_footer.css">
        <link rel="stylesheet" href="../css/notification.css">
        <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/index.php") { ?>
                <!-- Estilos de index-->
                <link rel="stylesheet" href="../css/style_index.css">
                <link rel="stylesheet" href="../css/darkmode_index.css">
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

        <?php //if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/cuenta.php" || $_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/contraseña.php" || $_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/mis_eventos.php" || $_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/eventos_inscritos.php") { 
        ?>
        <!-- <link rel="stylesheet" href="../css/style-header-perfil-usuario.css">
                <link rel="stylesheet" href="../css/footer-style-perfil-usuario.css"> -->
        <?php //} else { 
        ?>

        <?php //} 
        ?>

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

        <link rel="stylesheet" href="../css/modal.css">

        <?php if ($_SERVER['SCRIPT_NAME'] != "/LEAFING/Crea-J-2022/php/index.php") { ?>
                <!--Aqui inicia el modo oscuro-->
                <link rel="stylesheet" href="../css/darkmode.css">
        <?php } ?>


        <!--Favicon-->
        <link rel="icon" href="../img/favicon/favicon(full-vectorizado-2).svg">


        <title>Leafing</title>
</head>

<body class="darkmode">
        <!-- <div class="preloaderContainer" id="onload">
                 <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 100%;" width="200px" height="200px">
                        <g class="ldl-scale" style="transform-origin: 50% 50%; transform: rotate(0deg) scale(0.8, 0.8);">
                                <g class="ldl-ani">
                                        <g class="ldl-layer">
                                                <g class="ldl-ani">
                                                        <g>
                                                                <g class="ldl-layer">
                                                                        <g class="ldl-ani" style="transform-origin: 50px 50px; filter: blur(0px); opacity: 1; animation: 1.11111s linear 0.462963s 1 normal forwards running blur-out-feb63119-9b86-47c4-bfdc-eddeab303dad;">
                                                                                <path stroke-miterlimit="10" stroke-linecap="round" stroke-width="3.5" stroke="#333" fill="#abbd81" d="M85.4 66.8C79.9 77.2 69 79.5 63.2 76.3c-10.7-6-8.5-18.5 0-21 18.7-5.5 19.6-15.9 19.6-15.9s11.1 11 2.6 27.4z" style="fill: rgb(171, 189, 129); stroke: rgb(51, 51, 51);"></path>
                                                                        </g>
                                                                </g>
                                                                <g class="ldl-layer">
                                                                        <g class="ldl-ani">
                                                                                <g>
                                                                                        <g class="ldl-layer">
                                                                                                <g class="ldl-ani" style="transform-origin: 50px 50px; filter: blur(0px); opacity: 1; animation: 1.11111s linear 0.37037s 1 normal forwards running blur-out-feb63119-9b86-47c4-bfdc-eddeab303dad;">
                                                                                                        <path fill="#333" d="M81.5 50.6c-.3 2.4-.9 4.8-2 7.1-1 2.3-2.4 4.4-4.2 6.3-3.5 3.7-7.8 6.3-12 8.7-2.1 1.2-4.4 2.5-6.1 3.5-1.7 1.1-3.1 2.4-4 3.9-.8 1.5-1.1 3.4-.8 5.6.3 2.1 1.1 4.4 2.1 6.6.1.1 0 .3-.1.3h-.3c-2.1-1.5-3.8-3.5-4.9-5.9-.6-1.2-1-2.6-1.1-4.1-.1-1.5.1-3 .6-4.5 1.1-2.9 3.4-5.1 5.8-6.4 1.2-.7 2.5-1.2 3.5-1.6 1.1-.4 2.2-.8 3.3-1.3 2.2-.9 4.3-1.9 6.3-3.1 2-1.1 4-2.3 5.8-3.8 1.8-1.5 3.3-3.2 4.5-5.1 1.2-2 2.1-4.2 2.9-6.5 0-.1.2-.2.3-.2.4.3.4.4.4.5z" style="fill: rgb(51, 51, 51);"></path>
                                                                                                </g>
                                                                                        </g>
                                                                                </g>
                                                                        </g>
                                                                </g>
                                                        </g>
                                                </g>
                                        </g>
                                        <g class="ldl-layer">
                                                <g class="ldl-ani">
                                                        <g>
                                                                <g class="ldl-layer">
                                                                        <g class="ldl-ani" style="transform-origin: 50px 50px; filter: blur(0px); opacity: 1; animation: 1.11111s linear 0.277778s 1 normal forwards running blur-out-feb63119-9b86-47c4-bfdc-eddeab303dad;">
                                                                                <path stroke-miterlimit="10" stroke-linecap="round" stroke-width="3.5" stroke="#333" fill="#abbd81" d="M13.7 62.9C18.2 73.7 29 76.9 35 74.1c11.1-5.1 10-17.7 1.8-20.9-18.2-7-18.2-17.4-18.2-17.4s-12.1 10-4.9 27.1z" style="fill: rgb(171, 189, 129); stroke: rgb(51, 51, 51);"></path>
                                                                        </g>
                                                                </g>
                                                                <g class="ldl-layer">
                                                                        <g class="ldl-ani">
                                                                                <g>
                                                                                        <g class="ldl-layer">
                                                                                                <g class="ldl-ani" style="transform-origin: 50px 50px; filter: blur(0px); opacity: 1; animation: 1.11111s linear 0.185185s 1 normal forwards running blur-out-feb63119-9b86-47c4-bfdc-eddeab303dad;">
                                                                                                        <path fill="#333" d="M19.7 48.2c.6 1.9 1.4 3.7 2.3 5.4.9 1.7 2.1 3.2 3.4 4.6 2.7 2.7 6 4.7 9.4 6.4 1.7.9 3.5 1.7 5.3 2.4.9.4 1.8.7 2.7 1.1l1.5.6c.5.2 1 .5 1.5.7 1 .5 1.9 1.2 2.8 2 .9.8 1.7 1.8 2.2 2.9.6 1.1.9 2.4 1 3.6 0 .6 0 1.2-.1 1.8-.1.6-.2 1.2-1.3 1.6-.2.1-.3 0-.5 0-.9-.6-1.1-1-1.2-1.4-.1-.4-.3-.8-.5-1.2-.4-.7-.8-1.3-1.3-1.9-1-1.2-2.2-2.1-3.7-3.1-1.4-.9-3.3-1.9-5-2.9-1.8-1-3.5-2-5.3-3.1-1.7-1.1-3.4-2.3-5-3.6-1.6-1.3-3.1-2.8-4.3-4.5-1.2-1.7-2.3-3.5-3-5.5-.7-1.9-1.2-3.9-1.5-5.9 0-.1.1-.3.2-.3.3.1.4.2.4.3z" style="fill: rgb(51, 51, 51);"></path>
                                                                                                </g>
                                                                                        </g>
                                                                                </g>
                                                                        </g>
                                                                </g>
                                                        </g>
                                                </g>
                                        </g>
                                        <g class="ldl-layer">
                                                <g class="ldl-ani">
                                                        <g>
                                                                <g class="ldl-layer">
                                                                        <g class="ldl-ani" style="transform-origin: 50px 50px; filter: blur(0px); opacity: 1; animation: 1.11111s linear 0.0925926s 1 normal forwards running blur-out-feb63119-9b86-47c4-bfdc-eddeab303dad;">
                                                                                <path stroke-miterlimit="10" stroke-linecap="round" stroke-width="3.5" stroke="#333" fill="#abbd81" d="M67.1 29.1c.4 13.3-10.1 21.3-17.6 21-13.9-.6-16-14.8-10.8-21.3C45.5 20.3 57 7.5 57 7.5s9.7 7.5 10.1 21.6z" style="fill: rgb(171, 189, 129); stroke: rgb(51, 51, 51);"></path>
                                                                        </g>
                                                                </g>
                                                                <g class="ldl-layer">
                                                                        <g class="ldl-ani">
                                                                                <g>
                                                                                        <g class="ldl-layer">
                                                                                                <g class="ldl-ani" style="transform-origin: 50px 50px; filter: blur(0px); opacity: 1; animation: 1.11111s linear 0s 1 normal forwards running blur-out-feb63119-9b86-47c4-bfdc-eddeab303dad;">
                                                                                                        <path fill="#333" d="M50.7 79.3c-.3-1.4-.5-2.7-.8-4-.3-1.3-.7-2.5-.8-3.8-.2-2.5-.7-5-1.3-7.5-1.1-5-2.7-10.1-3.2-15.6-.2-2.8-.1-5.7.7-8.4.4-1.4.9-2.7 1.7-4 .3-.6.8-1.2 1.1-1.8l1.1-1.6c1.5-2.2 2.9-4.3 4.3-6.6.7-1.1 1.3-2.2 1.9-3.4.6-1.2 1.2-2.3 1.5-3.6 0 1.3-.4 2.6-.8 3.9-.4 1.3-.9 2.5-1.4 3.7-1 2.5-2.2 4.8-3.4 7.2l-.9 1.8c-.3.6-.6 1.1-.8 1.7-.5 1.1-.8 2.3-1 3.4-.4 2.3-.4 4.8.1 7.2C49.3 53 51 58 52 63.3c.5 2.6.9 5.4 1 8.1.1 1.4-.3 2.8-.7 4.1-.4 1.3-.9 2.6-1.6 3.8z" style="fill: rgb(51, 51, 51);"></path>
                                                                                                </g>
                                                                                        </g>
                                                                                </g>
                                                                        </g>
                                                                </g>
                                                        </g>
                                                </g>
                                        </g>
                                </g>
                        </g>
                </svg> 
                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="height: 100%; width: 100%;" width="300px" height="300px">
                        <g class="ldl-scale" style="transform-origin: 50% 50%; transform: rotate(0deg) scale(0.8, 0.8);">
                                <g class="ldl-ani">
                                        <g class="ldl-layer">
                                                <g class="ldl-ani">
                                                        <g>
                                                                <g class="ldl-layer">
                                                                        <g class="ldl-ani" style="transform-origin: 50px 50px; opacity: 1; animation: 0.934579s linear 0.389408s 1 normal forwards running fade-out-5023c08d-5bd5-40ce-95c1-6a5e0b8a9e9f;">
                                                                                <path stroke-miterlimit="10" stroke-linecap="round" stroke-width="3.5" stroke="#333" fill="#abbd81" d="M85.4 66.8C79.9 77.2 69 79.5 63.2 76.3c-10.7-6-8.5-18.5 0-21 18.7-5.5 19.6-15.9 19.6-15.9s11.1 11 2.6 27.4z" style="fill: rgb(171, 189, 129); stroke: rgb(51, 51, 51);"></path>
                                                                        </g>
                                                                </g>
                                                                <g class="ldl-layer">
                                                                        <g class="ldl-ani">
                                                                                <g>
                                                                                        <g class="ldl-layer">
                                                                                                <g class="ldl-ani" style="transform-origin: 50px 50px; opacity: 1; animation: 0.934579s linear 0.311526s 1 normal forwards running fade-out-5023c08d-5bd5-40ce-95c1-6a5e0b8a9e9f;">
                                                                                                        <path fill="#333" d="M81.5 50.6c-.3 2.4-.9 4.8-2 7.1-1 2.3-2.4 4.4-4.2 6.3-3.5 3.7-7.8 6.3-12 8.7-2.1 1.2-4.4 2.5-6.1 3.5-1.7 1.1-3.1 2.4-4 3.9-.8 1.5-1.1 3.4-.8 5.6.3 2.1 1.1 4.4 2.1 6.6.1.1 0 .3-.1.3h-.3c-2.1-1.5-3.8-3.5-4.9-5.9-.6-1.2-1-2.6-1.1-4.1-.1-1.5.1-3 .6-4.5 1.1-2.9 3.4-5.1 5.8-6.4 1.2-.7 2.5-1.2 3.5-1.6 1.1-.4 2.2-.8 3.3-1.3 2.2-.9 4.3-1.9 6.3-3.1 2-1.1 4-2.3 5.8-3.8 1.8-1.5 3.3-3.2 4.5-5.1 1.2-2 2.1-4.2 2.9-6.5 0-.1.2-.2.3-.2.4.3.4.4.4.5z" style="fill: rgb(51, 51, 51);"></path>
                                                                                                </g>
                                                                                        </g>
                                                                                </g>
                                                                        </g>
                                                                </g>
                                                        </g>
                                                </g>
                                        </g>
                                        <g class="ldl-layer">
                                                <g class="ldl-ani">
                                                        <g>
                                                                <g class="ldl-layer">
                                                                        <g class="ldl-ani" style="transform-origin: 50px 50px; opacity: 1; animation: 0.934579s linear 0.233645s 1 normal forwards running fade-out-5023c08d-5bd5-40ce-95c1-6a5e0b8a9e9f;">
                                                                                <path stroke-miterlimit="10" stroke-linecap="round" stroke-width="3.5" stroke="#333" fill="#abbd81" d="M13.7 62.9C18.2 73.7 29 76.9 35 74.1c11.1-5.1 10-17.7 1.8-20.9-18.2-7-18.2-17.4-18.2-17.4s-12.1 10-4.9 27.1z" style="fill: rgb(171, 189, 129); stroke: rgb(51, 51, 51);"></path>
                                                                        </g>
                                                                </g>
                                                                <g class="ldl-layer">
                                                                        <g class="ldl-ani">
                                                                                <g>
                                                                                        <g class="ldl-layer">
                                                                                                <g class="ldl-ani" style="transform-origin: 50px 50px; opacity: 1; animation: 0.934579s linear 0.155763s 1 normal forwards running fade-out-5023c08d-5bd5-40ce-95c1-6a5e0b8a9e9f;">
                                                                                                        <path fill="#333" d="M19.7 48.2c.6 1.9 1.4 3.7 2.3 5.4.9 1.7 2.1 3.2 3.4 4.6 2.7 2.7 6 4.7 9.4 6.4 1.7.9 3.5 1.7 5.3 2.4.9.4 1.8.7 2.7 1.1l1.5.6c.5.2 1 .5 1.5.7 1 .5 1.9 1.2 2.8 2 .9.8 1.7 1.8 2.2 2.9.6 1.1.9 2.4 1 3.6 0 .6 0 1.2-.1 1.8-.1.6-.2 1.2-1.3 1.6-.2.1-.3 0-.5 0-.9-.6-1.1-1-1.2-1.4-.1-.4-.3-.8-.5-1.2-.4-.7-.8-1.3-1.3-1.9-1-1.2-2.2-2.1-3.7-3.1-1.4-.9-3.3-1.9-5-2.9-1.8-1-3.5-2-5.3-3.1-1.7-1.1-3.4-2.3-5-3.6-1.6-1.3-3.1-2.8-4.3-4.5-1.2-1.7-2.3-3.5-3-5.5-.7-1.9-1.2-3.9-1.5-5.9 0-.1.1-.3.2-.3.3.1.4.2.4.3z" style="fill: rgb(51, 51, 51);"></path>
                                                                                                </g>
                                                                                        </g>
                                                                                </g>
                                                                        </g>
                                                                </g>
                                                        </g>
                                                </g>
                                        </g>
                                        <g class="ldl-layer">
                                                <g class="ldl-ani">
                                                        <g>
                                                                <g class="ldl-layer">
                                                                        <g class="ldl-ani" style="transform-origin: 50px 50px; opacity: 1; animation: 0.934579s linear 0.0778816s 1 normal forwards running fade-out-5023c08d-5bd5-40ce-95c1-6a5e0b8a9e9f;">
                                                                                <path stroke-miterlimit="10" stroke-linecap="round" stroke-width="3.5" stroke="#333" fill="#abbd81" d="M67.1 29.1c.4 13.3-10.1 21.3-17.6 21-13.9-.6-16-14.8-10.8-21.3C45.5 20.3 57 7.5 57 7.5s9.7 7.5 10.1 21.6z" style="fill: rgb(171, 189, 129); stroke: rgb(51, 51, 51);"></path>
                                                                        </g>
                                                                </g>
                                                                <g class="ldl-layer">
                                                                        <g class="ldl-ani">
                                                                                <g>
                                                                                        <g class="ldl-layer">
                                                                                                <g class="ldl-ani" style="transform-origin: 50px 50px; opacity: 1; animation: 0.934579s linear 0s 1 normal forwards running fade-out-5023c08d-5bd5-40ce-95c1-6a5e0b8a9e9f;">
                                                                                                        <path fill="#333" d="M50.7 79.3c-.3-1.4-.5-2.7-.8-4-.3-1.3-.7-2.5-.8-3.8-.2-2.5-.7-5-1.3-7.5-1.1-5-2.7-10.1-3.2-15.6-.2-2.8-.1-5.7.7-8.4.4-1.4.9-2.7 1.7-4 .3-.6.8-1.2 1.1-1.8l1.1-1.6c1.5-2.2 2.9-4.3 4.3-6.6.7-1.1 1.3-2.2 1.9-3.4.6-1.2 1.2-2.3 1.5-3.6 0 1.3-.4 2.6-.8 3.9-.4 1.3-.9 2.5-1.4 3.7-1 2.5-2.2 4.8-3.4 7.2l-.9 1.8c-.3.6-.6 1.1-.8 1.7-.5 1.1-.8 2.3-1 3.4-.4 2.3-.4 4.8.1 7.2C49.3 53 51 58 52 63.3c.5 2.6.9 5.4 1 8.1.1 1.4-.3 2.8-.7 4.1-.4 1.3-.9 2.6-1.6 3.8z" style="fill: rgb(51, 51, 51);"></path>
                                                                                                </g>
                                                                                        </g>
                                                                                </g>
                                                                        </g>
                                                                </g>
                                                        </g>
                                                </g>
                                        </g>
                                        <metadata xmlns:d="https://loading.io/stock/">
                                                <d:name>leaf</d:name>
                                                <d:tags>leaf,plant,leaves,tree,bud,burgreen,shoot,sprout,stem,grow,newbie,tender</d:tags>
                                                <d:license>by</d:license>
                                                <d:slug>xv25of</d:slug>
                                        </metadata>
                                </g>
                        </g>
                </svg>
        </div> -->
        <header>
                <nav id="menu">
                        <div class="burger">
                                <img src="../img/iconos/burger_img.svg" class="burger_icon" alt="icon_burger">
                        </div>
                        <div id="leafing-header">
                                <h1 id="LEAFING">Leafing</h1>
                        </div>

                        <div id="links-header">
                                <ul class="menu-header">
                                        <li class="li-menu item-menu-desplegable"><a href="../php/index.php" class="a-header"><span class="translateHeader">Inicio</span></a>
                                        </li>
                                        <li class="li-menu item-menu-desplegable"><a href="../php/about_us.php" class="a-header"><span class="translateHeader">Nosotros</span></a></li>
                                        <li class="li-menu item-menu-desplegable">
                                                <p class="a-header"><span class="translateHeader">Ayuda al planeta</span> <img src="../img/iconos/flechita.svg" class="menu_arrow" alt="flechita"> </p>
                                                <ul class="menu_desplegable">
                                                        <li class="li_menu-despleagble"><a href="../php/comunity.php" class="a-header a-header-desplegable translateHeader">Eventos</a></li>
                                                        <li class="li_menu-despleagble"><a href="../php/crear_evento.php" class="a-header a-header-desplegable translateHeader">Crea tus eventos</a></li>
                                                        <li class="li_menu-despleagble"><a href="../php/concientizate.php" class="a-header a-header-desplegable translateHeader">Concientízate</a></li>
                                                </ul>
                                        </li>
                                        <!-- <li class="li-menu item-menu-desplegable">
                                                <p class="a-header"><span class="translateHeader">Ajustes especiales</span> <img src="../img/iconos/flechita.svg" class="menu_arrow" alt="flechita"> </p>
                                                <ul class="menu_desplegable">
                                                        <li><img src="../img/imagenes/luna.png" alt="" id="btnMode" class="arreglar cambio"></li>

                                                        <li class="li_menu-despleagble"><button id="buttonSpanish" class="BanderaEspaña"><img class="imgBandera" src="../img/imagenes/Bandera_de_Españapng.png" alt=""></button></li>
                                                        <li class="li_menu-despleagble"><button id="buttonEnglish" class="BanderaIngles"><img class="imgBandera" src="../img/imagenes/Bandera-del-Reino-Unid.png" alt=""></button></li>

                                                </ul>
                                        </li> -->
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
                                        <!-- <a href="./close.php"><button>CLOSE SESSION</button></a> -->
                                        <ul class="menu-header-perfil">
                                                <li class="li-menu_perfil"><img src="../img/iconos/usuario.png" alt="iconouser" height="50px" width="50px" class="img-perfil">
                                                        <ul class="menu_desplegable-peril">
                                                                <li class="li-menu_perfil-desplegable" -><a class="a-header" href="./cuenta.php"><span class="translateHeader"> Mi perfil</span></a></li>
                                                                <li class="li-menu_perfil-desplegable"><a class="a-header" href="./close.php"><span class="translateHeader">Cerrar sesión</span></a></li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </div>

                        <?php } ?>

                </nav>

                <?php if ($_SERVER['SCRIPT_NAME'] == "/LEAFING/Crea-J-2022/php/index.php") { ?>
                        <div class="header-container">
                                <h1 class="green translate">Sé parte de la solución.</h1>
                                <p class="green translate">El medio amiente está muriendo, sé parte de la solución apoyando y creando eventos comunitarios.</p>
                                <a href="../php/comunity.php"><button class="header-button_index"><span class="translate">Eventos</span></button></a>
                        </div>
                <?php } ?>

        </header>