<?php include_once 'include.php';
include_once('conexion.php');
include_once('header.php');

$error = false;
//estiben = id del evento
if (isset($_GET['estiben'])) {
    $idevent = $_GET['estiben'];
    if (is_numeric($idevent)) {
        $objconexion = new conection;
        $eventsmaxid = $objconexion->consultar("SELECT MAX(id_events) FROM `events` WHERE id_state_events = 1");
        if ($idevent >= 1 && $idevent <= $eventsmaxid[0][0]) {
            $event = $objconexion->consultar("SELECT * FROM `events` WHERE id_events = $idevent");
            $idcreator = $event[0]['id_user_data'];
            $creatrinfo = $objconexion->consultar("SELECT * FROM `user_data` WHERE id_user_data = $idcreator");
        } else {
            echo "El evento no existe";
            $error = true;
        }
    } else {
        echo "WTF un error validado";
        $error = true;
    }
}


if (!$error) { ?>

    <h2 class="h2-start"><?php echo $event[0]['name_event'] ?></h2>
    <div class="general">
        <div class="container-text1">
            <img src="../img/imagenes/inscriccion.png"> <!-- XD-->
            <div class="levicfp">
                <div class="container-img2">
                    <div class="container-perfil">

                        <img src="../img/imagenes/inscriccion2.png">
                        <p id="profile-name"><?php echo $creatrinfo[0]['name'] . " " . $creatrinfo[0]['lastname'] ?></p>
                    </div>
                    <div class="container-descripcion">

                        <p class="bold">Descripción</p><br>
                        <p><?php echo $event[0]['description_event'] ?></p>
                    </div>
                </div>
                <div class="container-text2">
                    <p class="bold">Requisitos para asistir</p>
                    <p><?php echo $event[0]['requirements_event'] ?></p>

                    <p class="bold">Lugar y fecha</p><br>
                    <p><?php echo $event[0]['place_event'] ?></p>
                    <p><?php echo $event[0]['date_event'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <!--Parte II-->
    <!-- <div class="nuevoinicio">
        <div class="iniciodelinicio">
            <div class="iniciocfp">
                <div class="caminocfp">
                    <h2>Inscricción</h2>
                    <div>
                        <hr class="hr">
                    </div>
                </div>
                <form action="" class="form">
                    <div class="form1">
                        Número de personas que asistirán <input type="text">
                    </div>
                    <div class="form2">
                        Número de teléfono <input type="text">
                    </div>
                    <div class="form3">
                        <p>Transporte</p>
                        <p>Si desea transporte hacia el lugar del evento, seleccione una ubicación para ser recogido
                        </p>
                    </div>
                    <input type="submit" value="Inscribirse" class="buttonxd">
            </div>
            <div class="form5">
                <img src="../img/imagenes/map.png">
            </div>
            </form>
        </div>
    </div> -->
    </body>
<?php } ?>

<?php include_once("footer.php"); ?>