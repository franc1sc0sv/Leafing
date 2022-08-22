<?php
include_once('include.php');
include_once('conexion.php');
include_once('eventospaginacion.php');
include_once('header.php');

$actualpage = 1;

if (isset($_GET['pagination'])) {
    //echo $_GET['pagination'];
    $actualpage = $_GET['pagination'];
}



function resaltar_frase($string, $frase, $taga = '<b>', $tagb = '</b>')
{
    return ($string !== '' && $frase !== '')
        ? preg_replace('/(' . preg_quote($frase, '/') . ')/i' . ('true' ? 'u' : ''), $taga . '\\1' . $tagb, $string)
        : $string;
}

if (!isset($_GET['busca'])) {
    $_GET['busca'] = '';
}
if (!isset($_GET["orden"])) {
    $_GET["orden"] = '';
}
if (!isset($_GET["lugar"])) {
    $_GET["lugar"] = '';
}
if (!isset($_GET["categorias"])) {
    $_GET["categorias"] = '';
}

if (!isset($_GET['date_filtro'])) {
    $_GET['date_filtro'] = '';
}

?>

<body class="darkmode">
    <div class="generalContainer">
        <div class="backImage"></div>
        <div class="first">
            <form class="form" action="comunity.php" method="get">
                <div class="containerFiltros">
                    <div class="first-text">

                        <input type="search" class="inputs search" id="Buscador" name="busca" value="<?php echo $_GET['busca'] ?>" />
                        <img src="../img/iconos/lupa.png" alt="" class="lupa">
                    </div>
                    <div>
                        <select name="categorias" class="inputs" id="Categorias">
                            <?php if ($_GET["categorias"] != '') { ?>
                                <option value="<?php echo $_GET["categorias"]; ?>"><?php echo $_GET["categorias"]; ?></option>
                            <?php } ?>
                            <option value="" class="translate optionColor">Categorías</option>

                            <?php
                            $objconexionfiltros = new conection();
                            $categoriasevents = $objconexionfiltros->consultar("SELECT * FROM `categories_events`");
                            print_r($categoriasevents);
                            foreach ($categoriasevents as $categoriaevents) { ?>
                                <option class="translate optionColor" value="<?php echo $categoriaevents['id_categories_events'] ?>"> <?php echo $categoriaevents['categories'] ?> </option>
                            <?php } ?>

                        </select>
                    </div>
                    <div>
                        <input type="date" name="date_filtro" class="inputs date" value="<?php echo $_GET["date_filtro"]; ?>">
                    </div>
                    <div>
                        <select name="lugar" class="inputs" id="Lugar">
                            <?php if ($_GET["lugar"] != '') { ?>
                                <option value="<?php echo $_GET["lugar"]; ?>"><?php echo $_GET["lugar"]; ?> </option>
                            <?php } ?>
                            <option value="" class="optionColor translate">Lugar</option>
                            <?php
                            $objconexionfiltrosPlace = new conection();
                            $placesEvents = $objconexionfiltrosPlace->consultar("SELECT * FROM `place_events`");
                            //print_r($categoriasevents);
                            foreach ($placesEvents as $placesEvent) { ?>
                                <option class="translate optionColor" value="<?php echo $placesEvent['id_place'] ?>"> <?php echo $placesEvent['place'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div>
                        <select id="orden" name="orden" class="inputs">
                            <?php if ($_GET["orden"] != '') { ?>
                                <option value="<?php echo $_GET["orden"]; ?>"> <?php echo $_GET["orden"]; ?></option>
                            <?php } ?>
                            <option value="" class="optionColor translate">Ordenar por</option>
                            <option value="1" class="optionColor translate">Categorias ACS</option>
                            <option value="2" class="optionColor translate">Nombre ASC</option>
                            <option value="3" class="optionColor translate">Lugar ACS</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" value="ENVIAR" class="send"> <span class="translate"> Enviar</span> </button>
                    </div>
                </div>
            </form>
            <?php
            if ($_GET['busca'] == '') {
                $_GET['busca'] = ' ';
            }
            $resultsearch = explode(" ", $_GET['busca']);

            if ($_GET['busca'] == '' && $_GET['lugar'] == '' && $_GET['categorias'] == '' && $_GET['date_filtro'] == '') {
                $sql = "SELECT * FROM `events` WHERE id_state_events  = 1";
            } else {
                $sql = "SELECT * FROM `events` WHERE id_state_events  = 1";
                if ($_GET["busca"] != '') {
                    $sql .= " AND name_event LIKE LOWER('%" . $resultsearch[0] . "%')";

                    for ($i = 1; $i < count($resultsearch); $i++) {
                        if (!empty($resultsearch[$i])) {
                            $sql .= " AND name_event LIKE LOWER('%" . $resultsearch[$i] . "%')";
                        }
                    }
                }

                if ($_GET['categorias'] != '') {
                    $sql .= " AND id_categories_events = '" . $_GET['categorias'] . "' ";
                }

                if ($_GET['date_filtro'] != '') {
                    $originalDate = $_GET['date_filtro'];
                    $newDate = date("Y-m-a", strtotime($originalDate));
                    $sql .= " AND date_event = '" . $originalDate . "' ";
                }

                if ($_GET['lugar'] != '') {
                    $sql .= " AND place_event = '" . $_GET['lugar'] . "' ";
                }

                if ($_GET["orden"] == '1') {
                    $sql .= " ORDER BY id_categories_events ASC ";
                }

                if ($_GET["orden"] == '2') {
                    $sql .= " ORDER BY name_event ASC ";
                }

                if ($_GET["orden"] == '3') {
                    $sql .= " ORDER BY place_event ASC ";
                }
            }
            $datos_eventos = new conection();
            $events = $datos_eventos->consultar($sql);
            $numeroEvents =  count($events);

            $objconexionpaginas = new Paginacion(6, $numeroEvents, $actualpage);

            $limits = $objconexionpaginas->limits();
            $indece = $limits['indice'];
            $resultadosperPage = $limits['resultadosperPage'];
            $sql .= " LIMIT $indece, $resultadosperPage";

            $ALLevents = $datos_eventos->consultar($sql);

            ?>

            <div class="xDD">
                <?php

                $numeroEvents =  count($events);
                if ($numeroEvents > 0 and $_GET['busca'] != '') {
                    echo '<span class="translate">Resultados encontrados:</span><b> ' . $numeroEvents . '</b>';
                }

                ?>
            </div>

        </div>
    </div>
    </div>

    <div class="contenedor">
        <?php $objconexionpaginas->showevents($ALLevents) ?>
    </div>
    </div>
    <div class="pagination">
        <form action="comunity.php" method="post">
            <?php $objconexionpaginas->showpages() ?>
        </form>

    </div>
</body>

<?php include_once("footer.php"); ?>