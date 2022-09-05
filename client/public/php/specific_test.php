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
        $eventsmaxid = $objconexion->consultar("SELECT MAX(id_events) FROM `events` WHERE id_state_events = 1");
        if ($idevent >= 1 && $idevent <= $eventsmaxid[0][0]) {

            $event = $objconexion->consultar("SELECT events.id_events, events.name_event, events.description_event, events.direccion_evento, user_data.user_name, categories_events.categories, place_events.place, events.img_event, user_data.img_path, events.date_event, events.id_user_data  FROM `events` 
            INNER JOIN categories_events ON events.id_categories_events = categories_events.id_categories_events 
            INNER JOIN user_data ON events.id_user_data = user_data.id_user_data 
            INNER JOIN place_events ON events.place_event = place_events.id_place
            WHERE id_events = $idevent;
            ");
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
                                    <li class="lihome"><a href="../php/index.php">Home</a></li>
                                    <img src="../assets/iconos/flecha-correcta.png" alt="" class="arrowhite">
                                    <li class="lievents"><a href="../php/comunity.php">Events</a></li>
                                    <img src="../assets/iconos/flecha-correcta.png" alt="" class="arrowhite">
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
                    <div class="description_img">
                        <img src="../assets/user_images/events_images/<?php echo $event[0]['img_event'] ?>" alt="">
                    </div>
                    <div class="description">
                        <p><?php echo $event[0]['description_event'] ?></p>
                    </div>
                </div>
                <div class="details">
                    <div class="one">
                        <span>Detalles del evento</span>
                    </div>
                    <div class="details2">
                        <div class="rest">
                            <ul>
                                <li class="lidetails">
                                    <div class="liicon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/1581/1581943.png" alt="">
                                    </div>
                                    <div class="liinfo">
                                        <div class="lititle">Fecha de inicio</div>
                                        <div class="liinner">November 17, 2020 12:00 pm</div>
                                    </div>
                                </li>
                                <li class="lidetails">
                                    <div class="liicon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/1581/1581943.png" alt="">
                                    </div>
                                    <div class="liinfo">
                                        <div class="lititle">Fecha de finalización</div>
                                        <div class="liinner">November 17, 2020 12:00 pm</div>
                                    </div>
                                </li>
                                <li class="lidetails">
                                    <div class="liicon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/1581/1581943.png" alt="">
                                    </div>
                                    <div class="liinfo">
                                        <div class="lititle">Categoria</div>
                                        <div class="liinner">Reciclaje</div>
                                    </div>
                                </li>
                                <li class="lidetails">
                                    <div class="liicon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/1581/1581943.png" alt="">
                                    </div>
                                    <div class="liinfo">
                                        <div class="lititle">Lugar</div>
                                        <div class="liinner">San Salvador</div>
                                    </div>
                                </li>
                                <li class="lidetails">
                                    <div class="liicon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/1581/1581943.png" alt="">
                                    </div>
                                    <div class="liinfo">
                                        <div class="lititle">Direccion</div>
                                        <div class="liinner">El colegio don bosco</div>
                                    </div>
                                </li>
                                <!-- <li class="lidetails">
                                    <div class="liicon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/1581/1581943.png" alt="">
                                    </div>
                                    <div class="liinfo">
                                        <div class="lititle">Organizador</div>
                                        <div class="liinner">franc1sc0_sv</div>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                        <div class="add">
                            <button>Inscribirse</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="father_commentss">
                <div class="commentss">
                    <div class="comment_title">Deja un Comentario</div>
                    <div class="pcomments">
                        <form action="" method="post" class="comment_form">
                            <div class="comment_area">
                                <textarea name="" id="" placeholder="Tu comentario"></textarea>

                            </div>
                            <div class="comment_submit">
                                <button type="submit" class="comment_button">Publicar comentario</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</body>

<?php include_once('./templates/footer.php'); ?>