<?php
include_once('./templates/include.php');
include_once('./templates/conexion.php');

if (!isset($_SESSION['estatus'])) {
    header('location:./forms/formulario_inicio-sesion.php');
}
include_once('./templates/header.php');

?>

<section>
    <article>
        <div class="bgimage">
            <div class="crea"> <span class="translate"> Crea tu</span></div>
            <div class="evento"><span class="translate"> Evento </span></div>
        </div>
        <div class="creatuevento">
            <p class="translate">Crea tu evento</p>
        </div>


        <form action="crear_evento.php" method="post" class="container_form" enctype="multipart/form-data" id="formC">
            <div class="container_1">
                <div class="side_1 side-generalidades">

                    <label for="title" class="label_forms label_generalidaes translate">Título
                    </label>
                    <input type="text" name="title" class="input_genralidades inputstxt inputsTXT" placeholder="eg. Recolección de basura" id="tituloInput">
                    <br>

                    <label for="description" class="label_forms label_generalidaes translate">Descripción </label>
                    <textarea type="text" name="description" class="input_genralidades input_comentario inputstxt" placeholder="eg. Reunión para realizar una recolección con la ayuda de la comunidad" id="descriptionInput"></textarea>

                    <!-- <label for="title" class="label_forms label_generalidaes translate">Requisitos para asistir
                            al evento</label>
                        <input type="text" name="title" class="input_genralidades input_requisitos"> -->

                    <label for=""></label>

                    <div class="fecha_form-eventos">
                        <div id="fecha_eventos">
                            <label for="" class="classfecha-hora label_forms translate">Fecha de inicio</label>
                            <input type="datetime-local" name="dateStart" class="input_fecha">
                        </div>

                        <div id="hora_eventos">
                            <label for="" class="classfecha-hora label_forms translate">Fecha de finalización </label>
                            <input type="datetime-local" name="dateEnd" class="input_fecha">
                        </div>
                    </div>
                </div>


                <div class="side_2 side-datos">

                    <div class="dragfile_container">
                        <img src="../assets/iconos/cloud-computing.png" alt="" class="dragfile_icon">
                        <p class="translate">Arrastra o suelta tu imagen</p>
                        <p>O</p>
                        <label for="image" class="translate">Elige un archivo</label>
                        <input type="file" name="image" id="imagee">
                        <img alt="" id="img-result" class="dragfile_img">
                        <!-- <p class="namee"></p> -->
                    </div>

                    <select name="categorias" class="select" id="categoriasFilters">

                    </select>

                    <div class="input_1">
                        <!-- <label for="title" class="label_forms label_datos translate">Lugar de organización
                            </label>
                            <input type="text" name="title" class="input_datos"> -->

                        <select name="lugar" class="select" id="Lugar">

                        </select>
                        <br>

                        <label for="title" class="label_forms label_datos translate">Dirección
                        </label>
                        <input type="text" name="address" class="inputsTXT inputstxt" placeholder="eg. Colegio Don Bosco">

                    </div>
                </div>
            </div>
            </div>
            <button name="submit" type="submit" class="submit"><span class="translate">Publicar</span></button>
            <!-- <input type="submit" name="submit" value="Publicar" class="submit"> -->
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
<script src="../js/translate/filters_funtions.js"></script>
<script src="../js/notification.js"></script>
<script src="../js/createEvents.js" type="module"> </script>

</body>

<?php include_once('./templates/footer.php'); ?>