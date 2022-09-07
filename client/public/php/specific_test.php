<?php
include_once('./templates/include.php');
include_once('./templates/conexion.php');
include_once('./templates/header.php');

$error = false;
//estiben = id del evento
if (isset($_GET['estiben'])) {
    $idevent = $_GET['estiben'];
    if (is_numeric($idevent)) {
        $objconexion = new conection;
        $eventStatus = $objconexion->consultar("SELECT id_state_events FROM `events` WHERE id_events = $idevent");
        if (!empty($eventStatus)) {
            if ($eventStatus[0][0] == 1) {
                $event = $objconexion->consultar("SELECT * FROM `events` 
                INNER JOIN categories_events ON events.id_categories_events = categories_events.id_categories_events 
                INNER JOIN user_data ON events.id_user_data = user_data.id_user_data 
                INNER JOIN place_events ON events.place_event = place_events.id_place
                WHERE id_events = $idevent;");
                // print_r($event);
                $timestampStart = strtotime($event[0]['date_event']);
                $timestampEnd = strtotime($event[0]['end_date']);
                setlocale(LC_TIME, "spanish");
            } else {
                echo "El evento esta archivado o finalizado";
                $error = true;
            }
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
    <div class="all_yes">
        <div class="generalContainer">
            <div class="backImage"></div>
            <div class="first">
                <div class="form">
                    <div class="containerinfo">
                        <h1 class="event_name"><?php echo $event[0]['name_event'] ?></h1>
                        <div class="links">
                            <nav class="direction">
                                <ol>
                                    <li class="lihome"><a href="../php/index.php" class="translate">Home</a></li>
                                    <img src="../assets/iconos/flecha-correcta.png" alt="" class="arrowhite">
                                    <li class="lievents"><a href="../php/comunity.php" class="translate">Events</a></li>
                                    <img src=" ../assets/iconos/flecha-correcta.png" alt="" class="arrowhite">
                                    <li class="lieve"><?php echo $event[0]['name_event'] ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container_whole">
            <div class="container_event">
                <div class="img_and_description">
                    <div class="description_img black">
                        <img src="../assets/user_images/events_images/<?php echo $event[0]['img_event'] ?>" alt="">
                    </div>
                    <div class="description">
                        <p><?php echo $event[0]['description_event'] ?></p>
                    </div>
                </div>
                <div class="details">
                    <div class="one">
                        <span class="translate">Detalles del evento</span>
                        <?php if (isset($_SESSION['estatus'])) { ?>
                            <div class="reporte">
                                <button id="ModalOpen"><span class="translate"> Reportar</span></button>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="details2">
                        <div class="rest">
                            <ul>
                                <li class="lidetails">
                                    <div class="liicon">
                                        <img src="../assets/iconos/calendar_month.svg" alt="">
                                    </div>
                                    <div class="liinfo">
                                        <div class="lititle translate">Fecha de inicio</div>
                                        <div class="liinner"><?php echo strftime("%B %e, %Y %r", $timestampStart); ?></div>
                                    </div>
                                </li>
                                <li class="lidetails">
                                    <div class="liicon">
                                        <img src="../assets/iconos/calendar_month.svg" alt="">
                                    </div>
                                    <div class="liinfo">
                                        <div class="lititle translate">Fecha de finalización</div>
                                        <div class="liinner"><?php echo strftime("%B %e, %Y %r", $timestampEnd); ?></div>
                                    </div>
                                </li>
                                <li class="lidetails">
                                    <div class="liicon">
                                        <img src="../assets/iconos/category_e.svg" alt="">
                                    </div>
                                    <div class="liinfo">
                                        <div class="lititle translate">Categoria</div>
                                        <div class="liinner"><?php echo $event[0]['categories'] ?></div>
                                    </div>
                                </li>
                                <li class="lidetails">
                                    <div class="liicon">
                                        <img src="../assets/iconos/location_e.svg" alt="">
                                    </div>
                                    <div class="liinfo">
                                        <div class="lititle translate">Lugar</div>
                                        <div class="liinner"><?php echo $event[0]['place'] ?></div>
                                    </div>
                                </li>
                                <li class="lidetails">
                                    <div class="liicon">
                                        <img src="../assets/iconos/home_e.svg" alt="">
                                    </div>
                                    <div class="liinfo">
                                        <div class="lititle translate">Direccion</div>
                                        <div class="liinner"><?php echo $event[0]['direccion_evento'] ?></div>
                                    </div>
                                </li>
                                <li class="lidetails">
                                    <div class="liicon">
                                        <img src="../assets/iconos/person_e.svg" alt="">
                                    </div>
                                    <div class="liinfo">
                                        <div class="lititle translate">Organizador</div>
                                        <div class="liinner"><a href="./public_account.php?desiree=<?php echo $event[0]['id_user_data'] ?>"><?php echo $event[0]['user_name'] ?></a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="add" id="inscribirseCancelar">
                            <!-- <button class="button-hover">Inscribirse</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <?php if (isset($_SESSION['estatus'])) { ?>
                <div class="father_commentss">
                    <div class="commentss">
                        <div class="comment_title translate">Deja un comentario</div>
                        <div class="pcomments">
                            <form action="specific_test.php" method="post" class="comment_form" id="formComents">
                                <div class="comment_area">
                                    <textarea name="coment" id="" class="textArea-black"></textarea>
                                </div>
                                <div class="comment_submit">
                                    <button type="submit" class="comment_button button-hover translate">Publicar comentario</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="box-all-coments">
                <h1 class="translate">Comentarios</h1>
                <?php
                $objdata = new conection();
                $data = $objdata->consultar("SELECT coment, user_data.user_name, user_data.img_path FROM `coments` INNER JOIN user_data ON coments.id_publisher = user_data.id_user_data WHERE id_event = $idevent;");
                for ($i = 0; $i < count($data); $i++) {  ?>
                    <div class="coment">
                        <div class="img-photo">
                            <img src="../assets/user_images/profile_images/<?php echo $data[$i]['img_path'] ?>" alt="" class="img-coment">
                        </div>

                        <div class="body-coment">
                            <h4><?php echo $data[$i]['user_name'] ?></h4>
                            <p><?php echo $data[$i]['coment'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div id="alertcoments">
            </div>

            <div id="alertAña">
            </div>

            <div id="modal_container" class="modal-container">
                <div class="modal" id="modal">
                    <div class="contenidoModalInscripcion" id="contenidoModalInscripcion">

                    </div>
                </div>
            </div>

            <?php if (isset($_SESSION['estatus'])) { ?>
                <div class="container-modal" id="containerModal">
                    <div class="content-modal" id="contentModal">
                        <div class="headerModal" id="headerModal">
                            <img src="../assets/iconos/arrow_back_FILL0_wght400_GRAD0_opsz48.svg" alt="xd2" id="arrorBack">
                            <h1 class="translate">Reportar</h1>
                            <img src="../assets/iconos/close_FILL0_wght400_GRAD0_opsz48.svg" alt="xD" id="XModal">
                        </div>
                        <div class="contentModel" id="contentModel">
                            <div class="contentModelReportes">
                                <h2 class="translate">Selecciona un problema</h2>
                                <p class="translate">Si alguien se encuentra en peligro inminente, busca ayuda antes de enviar un reporte a Leafing. No esperes.!</p>
                                <div class="reportesModel">
                                    <div class="reportes" id="desnudos" onclick=identifyReport(this)>
                                        <h3 class="translate">Desnudos</h3>
                                        <img src="../assets/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                                    </div>

                                    <div class="reportes" id="violencia" onclick=identifyReport(this)>
                                        <h3 class="translate">Violencia</h3>
                                        <img src="../assets/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                                    </div>

                                    <div class="reportes" id="acoso" onclick=identifyReport(this)>
                                        <h3 class="translate">Acoso</h3>
                                        <img src="../assets/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                                    </div>

                                    <div class="reportes" id="suicidio" onclick=identifyReport(this)>
                                        <h3 class="translate">Suicidio</h3>
                                        <img src="../assets/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                                    </div>

                                    <div class="reportes" id="informacion_falsa" onclick=identifyReport(this)>
                                        <h3 class="translate">Informacion falsa</h3>
                                        <img src="../assets/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                                    </div>

                                    <div class="reportes" id="spam" onclick=identifyReport(this)>
                                        <h3 class="translate">Spam</h3>
                                        <img src="../assets/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                                    </div>

                                    <div class="reportes" id="lenguaje" onclick=identifyReport(this)>
                                        <h3 class="translate">Lenguaje que incita al odio</h3>
                                        <img src="../assets/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                                    </div>

                                    <div class="reportes" id="terrorismo" onclick=identifyReport(this)>
                                        <h3 class="translate">Terrorismo</h3>
                                        <img src="../assets/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
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
                                    <img src="../assets/iconos/check_circle_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="checkIcon">
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
        </div>
        <script src="../js/coments.js" type="module"></script>

        <?php include_once('./templates/footer.php'); ?>