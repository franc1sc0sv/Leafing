<?php
include_once('./templates/include.php');
include_once('./templates/conexion.php');
include_once('./templates/header.php');
?>


<body class="darkmode">
    <div class="generalContainer">
        <div class="backImage"></div>
        <div class="first">
            <form class="form" action="comunity.php" method="post" id="formFilter">
                <div class="containerFiltros">
                    <div class="first-text">

                        <input type="search" class="inputs search" id="Buscador" name="busca" />
                        <img src="../img/iconos/lupa.png" alt="" class="lupa">
                    </div>
                    <div>
                        <select name="categorias" class="inputs" id="categoriasFilters">
                        </select>
                    </div>
                    <div>
                        <input type="datetime-local" name="date_filtro" class="inputs date" value="">
                    </div>
                    <div>
                        <select name="lugar" class="inputs" id="Lugar">
                        </select>
                    </div>
                    <div>
                        <select id="orden" name="orden" class="inputs">

                        </select>
                    </div>
                    <div>
                        <button type="submit" value="ENVIAR" class="send"> <span class="translate"> Enviar</span> </button>
                    </div>
                </div>
            </form>

            <div class="xDD">
                <?php

                // $numeroEvents =  count($events);
                // if ($numeroEvents > 0 and $_GET['busca'] != '') {
                //     echo '<span class="translate">Resultados encontrados:</span><b> ' . $numeroEvents . '</b>';
                // }

                ?>
            </div>

        </div>
    </div>
    </div>

    <!-- <div class="contenedor" id="contenedor">

    </div> -->
    <div class="container_cards" id="contenedor">
        <div class="cards_new">
            <div class="img_container_cards img_background" style="background-image: url(../assets/imagenes/event-1-1130x650.webp);">

            </div>
            <div class="content_cards">
                <a href="" class="title_cards">
                    Milano 21T Meeting
                </a>
                <div class="info_content_cards">
                    <p class="category_event">BUSINESS</p>
                    <div class="date_cards">
                        <img src="../assets/iconos/calendar.svg" alt="icon_date" class="icon_cards">
                        <p>November 17, 2020</p>
                    </div>
                </div>
                <p class="description_event_cards">Lorem ipsum dolor sit amet, voluptua iracundia an pri, his utinam principes dignissim ad. Ne nec dolore oblique nusquam, cu luptatum volutpat delicatissimi has.</p>
                <div class="icons">
                    <div class="icons_div">
                        <img src="../assets/iconos/hourglass.svg" alt="icon" class="icon_cards">
                        <p>Showing</p>
                    </div>
                    <div class="icons_div">
                        <img src="../assets/iconos/place.svg" alt="icon" class="icon_cards">
                        <p>Milan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="cards_new">
        <div class="img_container_cards">
            <a href="">
                <img src="../assets/imagenes/event-1-1130x650.webp" alt="" class="img_event">
            </a>
        </div>
        <div class="content_cards">
            <a href="" class="title_cards">
                Milano 21T Meeting
            </a>
            <div class="info_content_cards">
                <p class="category_event">BUSINESS</p>
                <div class="date_cards">
                    <img src="../assets/iconos/calendar.svg" alt="icon_date" class="icon_cards">
                    <p>November 17, 2020</p>
                </div>
            </div>
            <p class="description_event_cards">Lorem ipsum dolor sit amet, voluptua iracundia an pri, his utinam principes dignissim ad. Ne nec dolore oblique nusquam, cu luptatum volutpat delicatissimi has.</p>
            <div class="icons">
                <div class="icons_div">
                    <img src="../assets/iconos/hourglass.svg" alt="icon" class="icon_cards">
                    <p>Showing</p>
                </div>
                <div class="icons_div">
                    <img src="../assets/iconos/place.svg" alt="icon" class="icon_cards">
                    <p>Milan</p>
                </div>
            </div>
        </div>
    </div> -->

    <div class="pagination">
        <form action="comunity.php" method="post">

        </form>

    </div>

    <script src="../js/filtros.js"></script>
</body>
<?php include_once('./templates/footer.php'); ?>