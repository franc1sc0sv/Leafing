<?php
include_once('include.php');
include_once('conexion.php');
include_once('header.php');
?>

<body class="darkmode">


    <section>
        <article>
            <div class="titulos-generales">
                <div class="titulo_generales">
                    <h1 class="translate">Crea tu propio evento</h1>
                    <hr>
                </div>
                <div></div>
            </div>


            <form action="createEvents.php" method="post" class="container_form" enctype="multipart/form-data">
                <div class="container_1">
                    <div class="side_1 side-generalidades">

                        <label for="title" class="label_forms label_generalidaes translate">Título del evento
                        </label>
                        <input type="text" name="title" class="input_genralidades">

                        <label for="title" class="label_forms label_generalidaes translate">¿Qué se realizará en el
                            evento? </label>
                        <input type="text" name="description" class="input_genralidades input_comentario">

                        <!-- <label for="title" class="label_forms label_generalidaes translate">Requisitos para asistir
                            al evento</label>
                        <input type="text" name="title" class="input_genralidades input_requisitos"> -->

                        <label for=""></label>
                    </div>
                    <div class="side_2 side-datos">
                        <div class="input_1">
                            <!-- <label for="title" class="label_forms label_datos translate">Lugar de organización
                            </label>
                            <input type="text" name="title" class="input_datos"> -->

                            <select name="lugar" class="label_forms label_datos translate" id="Lugar">
                                <option value="" class="optionColor translate">Lugar</option>
                                <option value=1 class="optionColor">Ahuachapán</option>
                                <option value=2 class="optionColor">Cabañas</option>
                                <option value=3 class="optionColor">Chalatenango</option>
                                <option value=4 class="optionColor">Cuscatlán</option>
                                <option value=5 class="optionColor">La Libertad</option>
                                <option value=6 class="optionColor">La Paz</option>
                                <option value=7 class="optionColor">La Unión</option>
                                <option value=8 class="optionColor">Morazán</option>
                                <option value=9 class="optionColor">San Salvador</option>
                                <option value=10 class="optionColor">San Vicente</option>
                                <option value=11 class="optionColor">Santa Ana</option>
                                <option value=12 class="optionColor">Sonsonate</option>
                                <option value=13 class="optionColor">Usulután</option>
                                <option value=14 class="optionColor">San Miguel</option>
                            </select>

                            <label for="title" class="label_forms label_datos translate">Dirección
                            </label>
                            <input type="text" name="address" class="input_datos">

                        </div>

                        <div class="fecha_form-eventos">
                            <div id="fecha_eventos">
                                <label for="" class="classfecha-hora label_forms translate">Fecha de inicio</label>
                                <input type="datetime-local" name="dateStart" class="input_fecha">
                            </div>

                            <div id="hora_eventos">
                                <label for="" class="classfecha-hora label_forms translate">Fecha de finalización </label>
                                <input type="datetime-local" name="dateFinish" class="input_fecha">
                            </div>
                        </div>

                        <select name="categorias" class="inputs" id="Categorias">
                            <?php if ($_GET["categorias"] != '') { ?>
                                <option value="<?php echo $_GET["categorias"]; ?>"><?php echo $_GET["categorias"]; ?></option>
                            <?php } ?>
                            <option value="" class="translate optionColor"> Categorías</option>

                            <?php
                            $objconexionfiltros = new conection();
                            $categoriasevents = $objconexionfiltros->consultar("SELECT * FROM `categories_events`");

                            foreach ($categoriasevents as $categoriaevents) { ?>
                                <option class="translate optionColor" value="<?php echo $categoriaevents['id_categories_events'] ?>"> <?php echo $categoriaevents['categories'] ?> </option>
                            <?php } ?>

                        </select>
                        

                        <!-- <div class="transporte_forms-eventos">
                            <h1 class="translate">Transporte:</h1>
                            <p class="translate">¿Su evento contará con transporte disponible para las personas que se inscriban?</p>

                            <div>
                                <div>
                                    <div>
                                        <input type="radio" name="trasporte-eventos"><label for="trasporte-eventos"><span class="translate">Sí</span></label>
                                    </div>
                                    <div>
                                        <input type="radio" name="trasporte-eventos"><label for="trasporte-eventos"><span class="translate">No</span></label>
                                    </div>
                                </div>
                            </div>
                        </div> -->


                    </div>
                </div>

                <div class="container_2">
                    <div class="general_subir-imagen">
                        <div class="subir-imagen">

                            <p class="translate">Imagen</p>
                            <input type="file" name="image" id="">
                                
                            </div>
                        </div>

                        <div class="publish">
                            <span class="submit translate"> <input type="submit" name="submit" value="Publicar"> </span>
                        </div>
                    </div>
                </div>
            </form>
        </article>
    </section>
</body>

<?php include_once("footer.php"); ?>