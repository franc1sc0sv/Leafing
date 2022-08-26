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
                            <img src="../img/imagenes/inscriccion2.png" id="imgProfile">
                            <p id="profile-name"><?php echo $creatrinfo[0]['name'] . " " . $creatrinfo[0]['lastname'] ?></p>
                        </div>
                        <?php if (isset($_SESSION['estatus'])) { ?>
                            <div class="reporte">
                                <button id="ModalOpen"> Reportar</button>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="container-descripcion">

                    <p class="bold">Descripción</p><br>
                    <p><?php echo $event[0]['description_event'] ?></p>
                </div>

                <div class="container-text2">
                    <p class="bold">Categorias</p>
                    <p><?php echo $event[0]['id_categories_events'] ?></p>
                    <br>
                    <p class="bold">Lugar y fecha</p>
                    <p><?php echo $event[0]['place_event'], " ", $event[0]['date_event'] ?></p>
                </div>
                <?php

                if (isset($_SESSION['estatus'])) {
                    $id = $_SESSION['dataID'];
                    $idevent = $_GET['estiben'];
                    $sql = "SELECT * FROM `inscriptions` WHERE id_persona_inscrita = $id AND id_event = $idevent";
                    $objConexion = new conection();
                    $rowCount = $objConexion->consultarform($sql);
                    if ($rowCount == 0) { ?>
                        <div class="inscribirseCancelar" id="inscribirseCancelar">
                            <button class="ModalOpen open" id="inscribirse" onclick=inscribirse(this)> Inscribirse</button>
                        </div>
                    <?php } else if ($rowCount == 1) { ?>
                        <div class="inscribirseCancelar" id="inscribirseCancelar">
                            <button id="Cancelar" onclick=CancelarInscripcion(this)>Cancelar inscripcion</button>
                        </div>
                    <?php }  ?>

                <?php  } else { ?>
                    <div class="inscribirseCancelar" id="inscribirseCancelar">
                        <button class="ModalOpen open" id="inscribirse" onclick=inscribirse(this)> Inscribirse</button>
                    </div>
                <?php } ?>

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

        <div class="container-modal" id="containerModal">
            <div class="content-modal" id="contentModal">
                <div class="headerModal" id="headerModal">
                    <img src="../img/iconos/arrow_back_FILL0_wght400_GRAD0_opsz48.svg" alt="xd2" id="arrorBack">
                    <h1>Reportar</h1>
                    <img src="../img/iconos/close_FILL0_wght400_GRAD0_opsz48.svg" alt="xD" id="XModal">
                </div>
                <div class="contentModel" id="contentModel">
                    <div class="contentModelReportes">
                        <h2>Selecciona un problema</h2>
                        <p>Si alguien se encuentra en peligro inminente, busca ayuda antes de enviar un reporte a Leafing. No esperes.!</p>
                        <div class="reportesModel">
                            <div class="reportes" id="desnudos" onclick=identifyReport(this)>
                                <h3>Desnudos</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>

                            <div class="reportes" id="violencia" onclick=identifyReport(this)>
                                <h3>Violencia</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>

                            <div class="reportes" id="acoso" onclick=identifyReport(this)>
                                <h3>Acoso</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>

                            <div class="reportes" id="suicidio" onclick=identifyReport(this)>
                                <h3>Suicidio</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>

                            <div class="reportes" id="informacion_falsa" onclick=identifyReport(this)>
                                <h3>Informacion falsa</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>

                            <div class="reportes" id="spam" onclick=identifyReport(this)>
                                <h3>Spam</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>

                            <div class="reportes" id="lenguaje" onclick=identifyReport(this)>
                                <h3>Lenguaje que incita al odio</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>

                            <div class="reportes" id="terrorismo" onclick=identifyReport(this)>
                                <h3>Terrorismo</h3>
                                <img src="../img/iconos/arrow_forward_ios_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="flechitaModel">
                            </div>
                        </div>
                    </div>

                    <div class="sendReport">
                        <div class="content">
                            <h2 class="changeInfo">Nombre reporte</h2>
                            <p class="changeInfo">Descripcion del reporte:</p>
                            <ul class="ul-reporte changeInfo">
                                <li class="li-report changeInfo">Cosas que no permitimos(li).</li>
                            </ul>

                            <div class="alert" id="alert">
                            </div>
                        </div>
                        <div class="sendbutton">
                            <button class="button-report" id="buttonReport">Enviar</button>
                        </div>
                    </div>

                    <div class="MensajeReport">
                        <div class="contentMensaje">
                            <img src="../img/iconos/check_circle_FILL0_wght400_GRAD0_opsz48.svg" alt="" id="checkIcon">
                            <h2>Gracias. Recibimos tu reporte.</h2>
                            <div class="MensajesExtra">
                                <div>
                                    <h3>Se recibio el reporte</h3>
                                    <p>Tu reporte nos ayuda a mejorar nuestros procesos y contribuye a que Leafing siga siendo un entorno seguro para todos.</p>
                                </div>
                                <div>
                                    <h3>Esperando revisión</h3>
                                    <p>Nuestros equipos de revisaran el contenido para eliminar el contenido que no cumple nuestras normas lo más rápido posible.</p>
                                </div>
                            </div>
                            <button class="button-report" id="buttonSalirReport">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php  } ?>
<?php } ?>

<?php include_once("footer.php"); ?>