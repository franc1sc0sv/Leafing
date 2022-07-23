<?php
include_once('include.php');
include_once('header.php');
include_once('conexion.php');

function resaltar_frase($string, $frase, $taga = '<b>', $tagb = '</b>')
{
    return ($string !== '' && $frase !== '')
        ? preg_replace('/(' . preg_quote($frase, '/') . ')/i' . ('true' ? 'u' : ''), $taga . '\\1' . $tagb, $string)
        : $string;
}

if (!isset($_POST['busca'])) {
    $_POST['busca'] = '';
}
if (!isset($_POST["orden"])) {
    $_POST["orden"] = '';
}
if (!isset($_POST["lugar"])) {
    $_POST["lugar"] = '';
}
if (!isset($_POST["categorias"])) {
    $_POST["categorias"] = '';
}

if (!isset($_POST['date_filtro'])) {
    $_POST['date_filtro'] = '';
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
        <form action="comunity.php" method="post">
            <div class="containerFiltros">
                <div class="first-text">
                    <h1>Buscador</h1>
                    <p>Evento a buscar</p>
                    <input type="search" placeholder="Busca tu evento" id="Buscador" name="busca" value="<?php echo $_POST['busca'] ?>" />
                </div>
                <div class="filtros">
                    <h1>Filtros</h1>
                    <div class="xDfiltros">
                        <div>
                            <p>Categorias: </p>
                            <select name="categorias" class="Categorias_filtros" id="Categorias">
                                <?php if ($_POST["categorias"] != '') { ?>
                                    <option value="<?php echo $_POST["categorias"]; ?>"><?php echo $_POST["categorias"]; ?></option>
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
                            <input type="date" name="date_filtro" value="<?php echo $_POST["date_filtro"]; ?>">
                        </div>
                        <div>
                            <p>Lugar: </p>
                            <select name="lugar" class="Lugar_filtros" id="Lugar">
                                <?php if ($_POST["lugar"] != '') { ?>
                                    <option value="<?php echo $_POST["lugar"]; ?>"><?php echo $_POST["lugar"]; ?> </option>
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
                            <?php if ($_POST["orden"] != '') { ?>
                                <option value="<?php echo $_POST["orden"]; ?>">
                                    <?php
                                    if ($_POST["orden"] == '1') {
                                        echo 'Categorias';
                                    }
                                    if ($_POST["orden"] == '2') {
                                        echo 'Nombre';
                                    }
                                    if ($_POST["orden"] == '3') {
                                        echo 'Lugar';
                                    }
                                    // if ($_POST["orden"] == '4') {
                                    //     echo 'Ordenar por precio de menor a mayor';
                                    // }
                                    // if ($_POST["orden"] == '5') {
                                    //     echo 'Ordenar por precio de mayor a menor';
                                    // }
                                    // if ($_POST["orden"] == '6') {
                                    //     echo 'Ordenar por fecha de reciente';
                                    // }
                                    // if ($_POST["orden"] == '7') {
                                    //     echo 'Ordenar por fecha de antigua';
                                    // }
                                    ?>
                                </option>
                            <?php } ?>
                            <option value=""></option>
                            <option value="1">Categorias ACS</option>
                            <option value="2">Nombre ASC</option>
                            <option value="3">Lugar ACS</option>
                            <!-- <option value="4">Ordenar por precio de menor a mayor</option>
                            <option value="5">Ordenar por precio de mayor a menor</option>
                            <option value="6">Ordenar por fecha de reciente</option>
                            <option value="7">Ordenar por fecha de antigua</option> -->
                        </select>
                        <input type="submit" value="ENVIAR">
                    </div>
                </div>
        </form>
        <?php
        if ($_POST['busca'] == '') {
            $_POST['busca'] = ' ';
        }
        $resultsearch = explode(" ", $_POST['busca']);

        if ($_POST['busca'] == '' && $_POST['lugar'] == '' && $_POST['categorias'] == '' && $_POST['date_filtro'] == '') {
            $sql = "SELECT * FROM `events`";
        } else {
            $sql = "SELECT * FROM `events`";
            if ($_POST["busca"] != '') {
                $sql .= " WHERE name_event LIKE LOWER('%" . $resultsearch[0] . "%')";

                for ($i = 1; $i < count($resultsearch); $i++) {
                    if (!empty($resultsearch[$i])) {
                        $sql .= " AND name_event LIKE LOWER('%" . $resultsearch[$i] . "%')";
                    }
                }
            }

            if ($_POST['categorias'] != '') {
                $sql .= " AND id_categories_events = '" . $_POST['categorias'] . "' ";
            }

            if ($_POST['date_filtro'] != '') {
                $originalDate = $_POST['date_filtro'];
                $newDate = date("Y-m-a", strtotime($originalDate));
                $sql .= " AND date_event >= '" . $originalDate . "' ";
            }

            if ($_POST['lugar'] != '') {
                $sql .= " AND place_event = '" . $_POST['lugar'] . "' ";
            }

            if ($_POST["orden"] == '1') {
                $sql .= " ORDER BY id_categories_events ASC ";
            }

            if ($_POST["orden"] == '2') {
                $sql .= " ORDER BY name_event ASC ";
            }

            if ($_POST["orden"] == '3') {
                $sql .= " ORDER BY place_event ASC ";
            }

        }
        echo $sql . "<br>";
        $datos_eventos = new conection();
        $events = $datos_eventos->consultar($sql);

        $numeroEvents =  count($events);
        for ($i = 0; $i < $numeroEvents; $i++) {
            if ($events[$i]['id_state_events'] != 1) {
                unset($events[$i]);
            }
        }
        ?>

        <div class="xDD">
            <?php

            $numeroEventss =  count($events);
            if ($numeroEvents > 0 and $_POST['busca'] != '') {
                echo "Resultados encontrados:<b> " . $numeroEventss . "</b>";
            }

            ?>
        </div>

    </div>
    </div>

    <div class="contenedor">
        <?php foreach ($events as $event) { ?>
            <div class="card">
                <div>
                    <img src="../img/imagenes/limpieza1.png" class="img">
                </div>
                <div class="cardtext">
                    <h1><?php echo resaltar_frase($event['name_event'], $_POST['busca']) ?></h1>
                    <p><?php echo $event['description_event']
                        ?></p>
                    <a href="./evento-especifico.php" class="buttonxd">
                        <p>
                            Inscribirse
                        </p>
                        <p>
                            <img src="../img/imagenes/menor2.svg">
                        </p>
                    </a>
                </div>
            </div>
        <?php } ?>

    </div>
    </div>
    <div class="xD223">
        <ul class="pagination">
            <li><a href="#">«</a></li>
            <li><a class="active" href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">»</a></li>
        </ul>
    </div>
</body>

<?php include_once("footer.php"); ?>