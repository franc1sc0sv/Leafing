<?php
include_once('include.php');
// include_once('conexion.php');
// include_once('eventospaginacion.php');
include_once('header.php');

// $actualpage = 1;

// if (isset($_GET['pagination'])) {
//     //echo $_GET['pagination'];
//     $actualpage = $_GET['pagination'];
// }



// function resaltar_frase($string, $frase, $taga = '<b>', $tagb = '</b>')
// {
//     return ($string !== '' && $frase !== '')
//         ? preg_replace('/(' . preg_quote($frase, '/') . ')/i' . ('true' ? 'u' : ''), $taga . '\\1' . $tagb, $string)
//         : $string;
// }

// if (!isset($_GET['busca'])) {
//     $_GET['busca'] = '';
// }
// if (!isset($_GET["orden"])) {
//     $_GET["orden"] = '';
// }
// if (!isset($_GET["lugar"])) {
//     $_GET["lugar"] = '';
// }
// if (!isset($_GET["categorias"])) {
//     $_GET["categorias"] = '';
// }

// if (!isset($_GET['date_filtro'])) {
//     $_GET['date_filtro'] = '';
// }

?>

<body class="darkmode">
    <div class="generalContainer">
        <div class="backImage"></div>
        <div class="first">
            <form class="form" action="comunity.php" method="post" id="formFilter">
                <div class="containerFiltros">
                    <div class="first-text">

                        <input type="search" class="inputs search" id="Buscador" name="busca"/>
                        <img src="../img/iconos/lupa.png" alt="" class="lupa">
                    </div>
                    <div>
                        <select name="categorias" class="inputs" id="categoriasFilters">
                        </select>
                    </div>
                    <div>
                        <input type="date" name="date_filtro" class="inputs date" value="">
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
            <?php
            // if ($_GET['busca'] == '') {
            //     $_GET['busca'] = ' ';
            // }
            // $resultsearch = explode(" ", $_GET['busca']);

            // if ($_GET['busca'] == '' && $_GET['lugar'] == '' && $_GET['categorias'] == '' && $_GET['date_filtro'] == '') {
            //     $sql = "SELECT * FROM `events` WHERE id_state_events  = 1";
            // } else {
            //     $sql = "SELECT * FROM `events` WHERE id_state_events  = 1";
            //     if ($_GET["busca"] != '') {
            //         $sql .= " AND name_event LIKE LOWER('%" . $resultsearch[0] . "%')";

            //         for ($i = 1; $i < count($resultsearch); $i++) {
            //             if (!empty($resultsearch[$i])) {
            //                 $sql .= " AND name_event LIKE LOWER('%" . $resultsearch[$i] . "%')";
            //             }
            //         }
            //     }

            //     if ($_GET['categorias'] != '') {
            //         $sql .= " AND id_categories_events = '" . $_GET['categorias'] . "' ";
            //     }

            //     if ($_GET['date_filtro'] != '') {
            //         $originalDate = $_GET['date_filtro'];
            //         $newDate = date("Y-m-a", strtotime($originalDate));
            //         $sql .= " AND date_event = '" . $originalDate . "' ";
            //     }

            //     if ($_GET['lugar'] != '') {
            //         $sql .= " AND place_event = '" . $_GET['lugar'] . "' ";
            //     }

            //     if ($_GET["orden"] == '1') {
            //         $sql .= " ORDER BY id_categories_events ASC ";
            //     }

            //     if ($_GET["orden"] == '2') {
            //         $sql .= " ORDER BY name_event ASC ";
            //     }

            //     if ($_GET["orden"] == '3') {
            //         $sql .= " ORDER BY place_event ASC ";
            //     }
            // }
            // $datos_eventos = new conection();
            // $events = $datos_eventos->consultar($sql);
            // $numeroEvents =  count($events);

            // $objconexionpaginas = new Paginacion(6, $numeroEvents, $actualpage);

            // $limits = $objconexionpaginas->limits();
            // $indece = $limits['indice'];
            // $resultadosperPage = $limits['resultadosperPage'];
            // $sql .= " LIMIT $indece, $resultadosperPage";

            // $ALLevents = $datos_eventos->consultar($sql);

            ?>

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

    <div class="contenedor" id="contenedor">
        <?php //$objconexionpaginas->showevents($ALLevents) 
        ?>
    </div>
    </div>
    <div class="pagination">
        <form action="comunity.php" method="post">
            <?php //$objconexionpaginas->showpages() 
            ?>
        </form>

    </div>

    <script src="../js/filtros.js"></script>
</body>
<?php include_once("footer.php"); ?>