<?php
include_once('./include.php');
include_once('./conexion.php');
include_once('./header.php');

$id = $_SESSION['dataID'];
$objconexion = new  conection();
$dataEvent = $objconexion->consultar("SELECT id_events ,name_event,img_event,id_state_events FROM `events` WHERE id_user_data = $id");

?>
<div class="flex-container">

    <?php include_once('./onlymenu.php') ?>

    <div class="configuracion-cuenta-container">
        <div class="configuracion-cuenta-container">
            <div class="grid-container">
                <div class="back">
                    <a href="./cuenta.php" id="showConfig" class="btn"><img src="../img/iconos/back.svg" alt=""></a>
                </div>
                <div class="configuracion-name">
                    <span class="translate"> Mis eventos</span>
                </div>
                <div class="eventos-grid">
                    <?php for ($i = 0; $i < count($dataEvent); $i++) {
                        if ($dataEvent[$i][3] == 1) { ?>

                            <div class="card">
                                <img src="./images/<?php echo $dataEvent[$i][2] ?>" alt="">
                                <div class="card-clock"></div>
                                <p><?php echo $dataEvent[$i][1] ?></p>
                            </div>
                        <?php } else { ?>
                            <div class="card">
                                <img src="./images/<?php echo $dataEvent[$i][2] ?>" alt="">
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

<?php include_once('./footer.php'); ?>