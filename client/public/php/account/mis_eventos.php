<?php
include_once('../templates/include.php');
if (!isset($_SESSION['dataID'])) {
    header("location:../index.php");
}
include_once('../templates/conexion.php');
include_once('../templates/header.php');

$id = $_SESSION['dataID'];
$objconexion = new  conection();
$dataEvent = $objconexion->consultar("SELECT id_events ,name_event,img_event,id_state_events FROM `events` WHERE id_user_data = $id");

?>
<link rel="stylesheet" href="../css/modalAcount.css">
<div class="flex-container">

    <?php include_once('../templates/onlymenu.php') ?>

    <div class="configuracion-cuenta-container">
        <div class="configuracion-cuenta-container">
            <div class="grid-container">
                <div class="back">
                    <a href="./cuenta.php" id="showConfig" class="btn"><img src="../../assets/iconos/back.svg" alt=""></a>
                </div>
                <div class="configuracion-name">
                    <span class="translate"> Mis eventos</span>
                </div>
                <div class="eventos-grid">
                    <?php for ($i = 0; $i < count($dataEvent); $i++) {
                        if ($dataEvent[$i][3] == 1) { ?>

                            <div class="card" id="<?php echo $dataEvent[$i][0] ?>">
                                <div class="eventsButtons">
                                    <img src="../../assets/iconos/mail_icon.svg" alt="" class="icons_myEvents" id="<?php echo $dataEvent[$i]['id_events'] ?>" onclick="enviarCorreo(this.id)">
                                    <a href="../templates/xsl-myEvents.php?id=<?php echo $dataEvent[$i]['id_events'] ?>"><img src="../../assets/iconos/assignment_add.svg" alt="" class="icons_myEvents"></a>
                                </div>
                                <img src="../../assets/user_images/events_images/<?php echo $dataEvent[$i][2] ?>" alt="">
                                <div class="card-clock"></div>
                                <p><?php echo $dataEvent[$i][1] ?></p>
                            </div>
                        <?php } else { ?>
                            <div class="card" id="<?php echo $dataEvent[$i][0] ?>">
                                <img src="../../assets/user_images/events_images/<?php echo $dataEvent[$i][2] ?>" alt="" class="archivedEvent">
                                <div class="card-clock clock-active"></div>
                                <p><?php echo $dataEvent[$i][1] ?></p>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-modal" id="containerModal">

</div>

<div id="modal_container_form_mensaje" class="modal-container">
    <div class="modal" id="modal">
        <div class="contenidoModalInscripcion" id="modalMensajesInscriptions">
            <h3 class="añaXD">Envia les un mensaje a todas las personas que se inscribieron a tu evento</h3>
            <form action="mis_eventos.php" method="post" id="formMensajeDudes">
                <textarea name="mensajeUsuario" class="mesajeusu"></textarea>
                <div class="butonesFormsMyEvents">
                    <button type="submit" class="buttonMyEventsForm">Enviar</button>
                    <p class="buttonMyEventsForm" onclick="closeModalMyevents()" id="xD">Cerrar</p>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="alertNotification">

</div>

<script src="../../js/myEvents.js"></script>
<script src="../js/ModalAcount.js"></script>
<?php include_once('../templates/footer.php'); ?>