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


$sql = "SELECT * FROM `events`";

if (!isset($_POST['busca'])) {
    $_POST['busca'] = '';
}
//WHERE id_state_events=1
?>

<body class="darkmode">

    <div class="first">
        <div class="first1">
            <h2>Eventos de la comunidad</h2>
            <div>
                <hr class="hr">
            </div>
        </div>

        <div class="first-text">
            <form action="comunity.php" method="post" name="xD">
                <input type="search" placeholder="Busca tu evento" id="Buscador" name="busca" value="<?php echo $_POST['busca'] ?>" />
            </form>
        </div>

        <?php

        if ($_POST) { //No esta vacio
            $aKeyboard = explode(" ", $_POST['busca']);
            $sql .= " WHERE name_event LIKE LOWER('%" . $aKeyboard[0] . "%')";

            for ($i = 1; $i < count($aKeyboard); $i++) {
                if (!empty($aKeyboard[$i])) {
                    $sql .= " OR name_event LIKE LOWER('%" . $aKeyboard[$i] . "%')";
                }
            }
        }

        ?>
    </div>
    </div>
    <div id="xD">
        <div class="filtros">
            <h1>Filtros</h1>
            <div>
                <p>Requerimientos</p>
                <select name="Requerimientos" id="">
                    <option value="5"></option>
                    <option value="1">OSU</option>
                    <option value="1">ARISTIDES</option>
                    <option value="1">XD</option>

                </select>
            </div>
            <div>
                <p>Lugar</p>
                <select name="Requerimientos" id="">
                    <option value="5"></option>
                    <option value="1">OSU</option>
                    <option value="1">ARISTIDES</option>
                    <option value="1">XD</option>
                </select>
            </div>
            <div>
                <p>Fecha</p>
                <input type="date" name="" id="">
            </div>
            <div>
                <p>Categoria</p>
                <select name="Requerimientos" id="">
                    <option value="5"></option>
                    <option value="1">OSU</option>
                    <option value="1">ARISTIDES</option>
                    <option value="1">XD</option>

                </select>
            </div>

        </div>

        <div class="contenedor">
            <?php
            $datos_eventos = new conection();
            $events = $datos_eventos->consultar($sql);
            $numeroEvents =  count($events);

            for ($i = 0; $i < $numeroEvents; $i++) {
                if ($events[$i]['id_state_events'] != 1) {
                    unset($events[$i]);
                }
            }

            foreach ($events as $event) {

            ?>
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
            <?php }
            ?>

        </div>
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

<?php include_once("footer.php");?>