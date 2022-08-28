<?php
include_once('include.php');
include_once('conexion.php');

if (!isset($_SESSION['estatus'])) {
    header('location:formulario_inicio-sesion.php');
}
include_once('header.php');



?>

<body class="darkmode">


    <section>
        <article>
            <div class="bgimage">
                <div class="crea">Crea tu</div>
                <div class="evento">Evento</div>
            </div>
            <div class="creatuevento">
                <p>Crea tu evento</p>
            </div>


            <form action="createEvents.php" method="post" class="container_form" enctype="multipart/form-data" id="formC">
                <div class="container_1">
                    <div class="side_1 side-generalidades">

                        <label for="title" class="label_forms label_generalidaes">Título
                        </label>
                        <input type="text" name="title" class="input_genralidades inputstxt inputsTXT" placeholder="eg. Recolección de basura">
                        <br>

                        <label for="description" class="label_forms label_generalidaes ">Descripción </label>
                        <textarea type="text" name="description" class="input_genralidades input_comentario inputstxt" placeholder="eg. Reunión para realizar una recolección con la ayuda de la comunidad"></textarea>

                        <!-- <label for="title" class="label_forms label_generalidaes translate">Requisitos para asistir
                            al evento</label>
                        <input type="text" name="title" class="input_genralidades input_requisitos"> -->

                        <label for=""></label>

                        <div class="fecha_form-eventos">
                            <div id="fecha_eventos">
                                <label for="" class="classfecha-hora label_forms ">Fecha de inicio</label>
                                <input type="datetime-local" name="dateStart" class="input_fecha">
                            </div>

                            <div id="hora_eventos">
                                <label for="" class="classfecha-hora label_forms ">Fecha de finalización </label>
                                <input type="datetime-local" name="dateEnd" class="input_fecha">
                            </div>
                        </div>
                    </div>


                    <div class="side_2 side-datos">

                        <div class="dragfile_container">
                            <img src="../img/iconos/cloud-computing.png" alt="" class="dragfile_icon">
                            <p>Arrastra o suelta tu imagen</p>
                            <p>O</p>
                            <label for="image">Elige un archivo</label>
                            <input type="file" name="image" id="imagee">
                            <img alt="" id="img-result" class="dragfile_img">
                            <!-- <p class="namee"></p> -->
                        </div>

                        <select name="categorias" class="select" id="Categorias">
                            <?php if ($_GET["categorias"] != '') { ?>
                                <option value="<?php echo $_GET["categorias"]; ?>"><?php echo $_GET["categorias"]; ?></option>
                            <?php } ?>
                            <option value="" class=" optionColor"> Categorías</option>

                            <?php
                            $objconexionfiltros = new conection();
                            $categoriasevents = $objconexionfiltros->consultar("SELECT * FROM `categories_events`");

                            foreach ($categoriasevents as $categoriaevents) { ?>
                                <option class=" optionColor" value="<?php echo $categoriaevents['id_categories_events'] ?>"> <?php echo $categoriaevents['categories'] ?> </option>
                            <?php } ?>

                        </select>

                        <div class="input_1">
                            <!-- <label for="title" class="label_forms label_datos translate">Lugar de organización
                            </label>
                            <input type="text" name="title" class="input_datos"> -->

                            <select name="lugar" class="select" id="Lugar">
                                <?php if ($_GET["lugar"] != '') { ?>
                                    <option value="<?php echo $_GET["lugar"]; ?>"><?php echo $_GET["lugar"]; ?> </option>
                                <?php } ?>
                                <option value="" class="optionColor ">Lugar</option>
                                <?php
                                $objconexionfiltrosPlace = new conection();
                                $placesEvents = $objconexionfiltrosPlace->consultar("SELECT * FROM `place_events`");
                                //print_r($categoriasevents);
                                foreach ($placesEvents as $placesEvent) { ?>
                                    <option class=" optionColor" value="<?php echo $placesEvent['id_place'] ?>"> <?php echo $placesEvent['place'] ?> </option>
                                <?php } ?>
                            </select>
                            <br>

                            <label for="title" class="label_forms label_datos">Dirección
                            </label>
                            <input type="text" name="address" class="inputsTXT inputstxt" placeholder="eg. Colegio Don Bosco">

                        </div>




                        <!-- <div class="transporte_forms-eventos">
                            <h1 class="">Transporte:</h1>
                            <p class="">¿Su evento contará con transporte disponible para las personas que se inscriban?</p>

                            <div>
                                <div>
                                    <div>
                                        <input type="radio" name="trasporte-eventos"><label for="trasporte-eventos"><span class="">Sí</span></label>
                                    </div>
                                    <div>
                                        <input type="radio" name="trasporte-eventos"><label for="trasporte-eventos"><span class="">No</span></label>
                                    </div>
                                </div>
                            </div>
                        </div> -->


                    </div>
                </div>
                </div>
                <input type="submit" name="submit" value="Publicar" class="submit">
            </form>
        </article>
        <div id="alertLogin">

        </div>
    </section>
    <div id="modal_container" class="modal-container">
        <div class="modal" id="modal">
            <div class="contenidoModalInscripcion" id="contenidoModalInscripcion">

            </div>
        </div>
    </div>
    <script src="../js/notification.js"></script>
    <script src="../js/createEvents.js" type="module"> </script>
</body>

<?php include_once("footer.php"); ?>