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
                    <h1>Crea tu propio evento</h1>
                    <hr>
                </div>
                <div></div>
            </div>


            <form action="#" class="container_form">
                <div class="container_1">
                    <div class="side_1 side-generalidades">

                        <label for="title" class="label_forms label_generalidaes">Título del evento
                            *</label>
                        <input type="text" name="title" class="input_genralidades">

                        <label for="title" class="label_forms label_generalidaes">¿Que se realizará en el
                            evento? *</label>
                        <input type="text" name="title" class="input_genralidades input_comentario">

                        <label for="title" class="label_forms label_generalidaes">Requisitos para asitir
                            al evento</label>
                        <input type="text" name="title" class="input_genralidades input_requisitos">

                        <label for=""></label>
                    </div>
                    <div class="side_2 side-datos">
                        <div class="input_1">
                            <label for="title" class="label_forms label_datos">Lugar de organización
                                *</label>
                            <input type="text" name="title" class="input_datos">

                        </div>

                        <div class="fecha_form-eventos">
                            <div id="fecha_eventos">
                                <label for="" class="classfecha-hora label_forms">Fecha *</label>
                                <input type="text" name="title" class="input_fecha">
                            </div>

                            <div id="hora_eventos">
                                <label for="" class="classfecha-hora label_forms">Hora *</label>
                                <input type="text" name="title" class="input_fecha">
                            </div>
                        </div>

                        <div class="transporte_forms-eventos">
                            <h1>Transporte:</h1>
                            <p>¿Su evento contará con transporte disponible para las personas que se inscriban?</p>

                            <div>
                                <div>
                                    <div>
                                        <input type="radio" name="trasporte-eventos"><label for="trasporte-eventos">Si</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="trasporte-eventos"><label for="trasporte-eventos">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="container_2">
                    <div class="general_subir-imagen">
                        <div class="subir-imagen">

                            <p>Imagen</p>

                            <div class="imagen-side">
                                <img src="../img/imagenes/img_icon.svg" alt="">
                            </div>
                        </div>

                        <div class="publish">
                            <input type="submit" name="submit" class="submit" value="Publicar">
                        </div>
                    </div>
                </div>
            </form>
        </article>
    </section>
</body>

<?php include_once("footer.php"); ?>