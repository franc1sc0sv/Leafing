<?php
include_once('../templates/include.php');
if (!isset($_SESSION['dataID'])) {
    header("location:../index.php");
}
include_once('../templates/conexion.php');

$id = $_SESSION['dataID'];
$objconexionEvnt = new conection();
$dataInscriptions = $objconexionEvnt->consultar("SELECT events.id_events, events.name_event, events.img_event, user_data.user_name, user_data.img_path FROM `inscriptions`
INNER JOIN events ON inscriptions.id_event = events.id_events
INNER JOIN user_data ON inscriptions.id_persona_inscrita =  user_data.id_user_data 
WHERE id_persona_inscrita = $id ");


include_once('../templates/header.php'); ?>
<div class="flex-container">
    <?php include_once('../templates/onlymenu.php') ?>

    <div class="configuracion-cuenta-container">
        <div class="configuracion-cuenta-container">
            <div class="grid-container">
                <div class="back">
                    <a href="./cuenta.php" id="showConfig" class="btn"><img src="../img/iconos/back.svg" alt=""></a>
                </div>
                <div class="configuracion-name">
                    <span class="translate">Eventos inscritos</span>
                </div>
                <div class="eventos-grid">
                    <?php for ($i = 0; $i < count($dataInscriptions); $i++) { ?>
                        <div class="card">
                            <img src="./images/<?php echo $dataInscriptions[$i]['img_event'] ?>" alt="">
                            <div class="container__card-like">
                                <div class="card-like"></div>
                            </div>
                            <div class="container__info-user">
                                <img src="./imgProfile/<?php echo $dataInscriptions[$i]['img_path'] ?>" alt="" class="imgPerfil">
                                <a href="./evento-especifico.php?estiben=<?php echo $dataInscriptions[$i]['id_events'] ?>" target="_blacnk">
                                    <p class="card-name-event"><?php echo $dataInscriptions[$i]['name_event'] ?></p>
                                </a>
                                <p class="card-user-name"><?php echo $dataInscriptions[$i]['user_name'] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('../templates/footer.php'); ?>