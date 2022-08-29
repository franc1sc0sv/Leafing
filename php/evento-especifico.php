<?php
include_once 'include.php';
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

            $event = $objconexion->consultar("SELECT events.id_events, events.name_event, events.description_event, events.direccion_evento, user_data.user_name, categories_events.categories, place_events.place, events.img_event, user_data.img_path, events.date_event FROM `events` 
            INNER JOIN categories_events ON events.id_categories_events = categories_events.id_categories_events 
            INNER JOIN user_data ON events.id_user_data = user_data.id_user_data 
            INNER JOIN place_events ON events.place_event = place_events.id_place
            WHERE id_events = $idevent;
            ");
            //print_r($event);
            // $idcreator = $event[0]['id_user_data'];
            // $creatrinfo = $objconexion->consultar("SELECT * FROM `user_data` WHERE id_user_data = $idcreator");
        } else {
            echo "El evento no existe";
            $error = true;
        }
    } else {
        echo "WTF un error validado";
        $error = true;
    }
} else {
    echo "Nice try estiben";
    $error = true;
}


if (!$error) { ?>

    <h2 class="h2-start"><?php echo $event[0]['name_event'] ?></h2>
    <div class="general">
        <div class="container-text1">
            <img src="./images/<?php echo $event[0]['img_event'] ?>"> <!-- XD-->
            <div class="levicfp">
                <div class="container-img2">
                    <div class="container-perfil">
                        <div class="userData">
                            <img src="./imgProfile/<?php echo $event[0]['img_path'] ?>" id="imgProfile">
                            <p id="profile-name"><?php echo $event[0]['user_name'] ?></p>
                        </div>
                        <?php if (isset($_SESSION['estatus'])) { ?>
                            <div class="reporte">
                                <button id="ModalOpen"><span class="translate"> Reportar</span></button>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="container-descripcion">

                    <p class="bold translate">Descripción</p><br>
                    <p><?php echo $event[0]['description_event'] ?></p>
                </div>

                <div class="container-text2">
                    <p class="bold translate">Categorias</p>
                    <p><?php echo $event[0]['categories'] ?></p>
                    <br>
                    <p class="bold translate">Lugar y fecha</p>
                    <p><?php echo $event[0]['place'], ", ", $event[0]['direccion_evento'], " - ", $event[0]['date_event'] ?></p>
                </div>
                <div class="inscribirseCancelar" id="inscribirseCancelar">
                </div>


            </div>
        </div>
    </div>
    <div id="alertAña"></div>

    <div id="modal_container" class="modal-container">
        <div class="modal" id="modal">
            <div class="contenidoModalInscripcion" id="contenidoModalInscripcion">

            </div>
        </div>
    </div>

    <?php if (isset($_SESSION['estatus'])) { ?>
        <div class="box-container-coments">
            <div class="headerComents">
                <h2 class="titleComents translate">Deja un comentario</h2>
            </div>
            <div class="content-coments">
                <form action="evento-especifico.php" method="post" class="formComents" id="formComents">
                    <textarea name="coment" id="" cols="90" rows="4" class="textarea"></textarea>
                    <button type="submit" class="send translate">Publicar mi comentario</button>
                </form>
            </div>
        </div>
    <?php } ?>

    <?php if (isset($_SESSION['estatus'])) { ?>
        <div class="box-all-coments">
            <h1 class="translate">Comentarios</h1>
            <?php
            $objdata = new conection();
            $data = $objdata->consultar("SELECT coment, user_data.user_name, user_data.img_path FROM `coments`
        INNER JOIN user_data ON coments.id_publisher = user_data.id_user_data
        WHERE id_event = $idevent;
        ");
            if (empty($data)) {
                echo "<h3>No hay comentarios para este evento</h3>";
            } else {
                for ($i = 0; $i < count($data); $i++) {  ?>
                    <div class="coment">
                        <div class="img-photo">
                            <img src="./imgProfile/<?php echo $data[$i]['img_path'] ?>" alt="" class="img-coment">
                        </div>

                        <div class="body-coment">
                            <h4><?php echo $data[$i]['user_name'] ?></h4>
                            <p><?php echo $data[$i]['coment'] ?></p>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    <?php } ?>
    <div class="alertcoments" id="alertcoments">


    </div>
    <?php if (isset($_SESSION['estatus'])) { ?>

        <div class="container-modal" id="containerModal">
            <div class="content-modal" id="contentModal">
                <div class="headerModal" id="headerModal">
                    <img src="../img/iconos/arrow_back_FILL0_wght400_GRAD0_opsz48.svg" alt="xd2" id="arrorBack">
                    <h1 class="translate">Reportar</h1>
                    <img src="../img/iconos/close_FILL0_wght400_GRAD0_opsz48.svg" alt="xD" id="XModal">
                </div>
                <div class="contentModel" id="contentModel">
                    <div class="contentModelReportes">
                        <h2 class="translate">Selecciona un problema</h2>
                        <p class="translate">Si alguien se encuentra en peligro inminente, busca ayuda antes de enviar un reporte a Leafing. No esperes.!</p>
                        <div class="reportesModel">
                            <div class="reportes" id="desnudos" onclick=identifyReport(this)>
                                <h3 class="translate">Desnudos</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>

                            <div class="reportes" id="violencia" onclick=identifyReport(this)>
                                <h3 class="translate">Violencia</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>

                            <div class="reportes" id="acoso" onclick=identifyReport(this)>
                                <h3 class="translate">Acoso</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>

                            <div class="reportes" id="suicidio" onclick=identifyReport(this)>
                                <h3 class="translate">Suicidio</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>

                            <div class="reportes" id="informacion_falsa" onclick=identifyReport(this)>
                                <h3 class="translate">Informacion falsa</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>

                            <div class="reportes" id="spam" onclick=identifyReport(this)>
                                <h3 class="translate">Spam</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>

                            <div class="reportes" id="lenguaje" onclick=identifyReport(this)>
                                <h3 class="translate">Lenguaje que incita al odio</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>

                            <div class="reportes" id="terrorismo" onclick=identifyReport(this)>
                                <h3 class="translate">Terrorismo</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>
                        </div>
                    </div>

                    <div class="sendReport">
                        <div class="content">
                            <h2 class="changeInfo">nice try estiben</h2>
                            <p class="changeInfo">jajajajja</p>
                            <ul class="ul-reporte changeInfo">
                                <li class="li-report changeInfo">aña</li>
                            </ul>

                            <div class="alert" id="alert">
                            </div>
                        </div>
                        <div class="sendbutton">
                            <button class="button-report translate" id="buttonReport">funcionara?</button>
                        </div>
                    </div>

                    <div class="MensajeReport">
                        <div class="contentMensaje">
                            <img src="../img/iconos/check_circle_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="checkIcon">
                            <h2 class="translate">Gracias. Recibimos tu reporte.</h2>
                            <div class="MensajesExtra">
                                <div>
                                    <h3 class="translate">Se recibio el reporte</h3>
                                    <p class="translate">Tu reporte nos ayuda a mejorar nuestros procesos y contribuye a que Leafing siga siendo un entorno seguro para todos.</p>
                                </div>
                                <div>
                                    <h3 class="translate">Esperando revisión</h3>
                                    <p class="translate">Nuestros equipos de revisaran el contenido para eliminar el contenido que no cumple nuestras normas lo más rápido posible.</p>
                                </div>
                            </div>
                            <button class="button-report translate" id="buttonSalirReport">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php  } ?>
<?php } ?>

<script src="../js/coments.js" type="module"></script>

<?php include_once("footer.php"); ?>