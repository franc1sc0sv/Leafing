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

    <div class="first">

        <div class="first1">
            <h2>Eventos de la comunidad</h2>
            <div>
                <hr class="hr">
            </div>
        </div>
        <form action="comunity.php" method="get">
            <div class="containerFiltros">
                <div class="first-text">
                    <h1>Buscador</h1>
                    <p>Evento a buscar</p>
                    <input type="search" placeholder="Busca tu evento" id="Buscador" name="busca" value="<?php echo $_GET['busca'] ?>" />
                </div>
                <div class="filtros">
                    <h1>Filtros</h1>
                    <div class="xDfiltros">
                        <div>
                            <p>Categorias: </p>
                            <select name="categorias" class="Categorias_filtros" id="Categorias">
                                <?php if ($_GET["categorias"] != '') { ?>
                                    <option value="<?php echo $_GET["categorias"]; ?>"><?php echo $_GET["categorias"]; ?></option>
                                <?php } ?>
                                <option value="">Todas</option>

                                <?php
                                $objconexionfiltros = new conection();
                                $categoriasevents = $objconexionfiltros->consultar("SELECT * FROM `categories_events`");

                                foreach ($categoriasevents as $categoriaevents) { ?>
                                    <option value="<?php echo $categoriaevents['id_categories-events'] ?>"> <?php echo $categoriaevents['categories'] ?> </option>
                                <?php } ?>

                            </select>
                        </div>
                        <div>
                            <p>Fecha limite de inscripcion: </p>
                            <input type="date" name="date_filtro" value="<?php echo $_GET["date_filtro"]; ?>">
                        </div>
                        <div>
                            <p>Lugar: </p>
                            <select name="lugar" class="Lugar_filtros" id="Lugar">
                                <?php if ($_GET["lugar"] != '') { ?>
                                    <option value="<?php echo $_GET["lugar"]; ?>"><?php echo $_GET["lugar"]; ?> </option>
                                <?php } ?>
                                <option value="">Todos</option>
                                <option value="Ahuachapán">Ahuachapán</option>
                                <option value="Cabañas">Cabañas</option>
                                <option value="Chalatenango">Chalatenango</option>
                                <option value="Cuscatlán">Cuscatlán</option>
                                <option value="La Libertad">La Libertad</option>
                                <option value="La Paz">La Paz</option>
                                <option value="La Unión">La Unión</option>
                                <option value="Morazán">Morazán</option>
                                <option value="San Salvador">San Salvador</option>
                                <option value="San Vicente">San Vicente</option>
                                <option value="Santa Ana">Santa Ana</option>
                                <option value="Sonsonate">Sonsonate</option>
                                <option value="Usulután">Usulután</option>
                                <option value="San Miguel">San Miguel</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="ordenar">
                    <h1>Ordenar por</h1>
                    <p>Selecciona el orden: </p>
                    <div>
                        <select id="orden" name="orden">
                            <?php if ($_GET["orden"] != '') { ?>
                                <option value="<?php echo $_GET["orden"]; ?>">
                                    <?php
                                    if ($_GET["orden"] == '1') {
                                        echo 'Categorias';
                                    }
                                    if ($_GET["orden"] == '2') {
                                        echo 'Nombre';
                                    }
                                    if ($_GET["orden"] == '3') {
                                        echo 'Lugar';
                                    }
                                    ?>
                                </option>
                            <?php } ?>
                            <option value=""></option>
                            <option value="1">Categorias ACS</option>
                            <option value="2">Nombre ASC</option>
                            <option value="3">Lugar ACS</option>
                        </select>
                        <input type="submit" value="ENVIAR">
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
                $sql .= " AND date_event >= '" . $originalDate . "' ";
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
                echo "Resultados encontrados:<b> " . $numeroEvents . "</b>";
            }

            ?>
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