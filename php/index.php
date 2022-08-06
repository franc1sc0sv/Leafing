<?php
include_once('include.php');
include_once('conexion.php');


$objconexion_numbers = new conection();
$maxIdData = $objconexion_numbers->consultar("SELECT MAX(id_curious_data) FROM `random_curious_data`");
$maxIdData[0]['MAX(id_curious_data)'];
////Codigo para datos curiosos randomizados

# definimos las 5 variables que contendrán los 5 números 
$n1 = $n2 = $n3 = $n4 = $n5 = $n6 = 0;

# buscamos 5 números aleatorios, verificando que no se repitan 
$pos = 1;
while (1) {
    $rand = rand(1, $maxIdData[0]['MAX(id_curious_data)']);
    $repetido = false;

    for ($i = 1; $i <= $pos; $i++) {
        if (${"n" . $i} == $rand) {
            $repetido = true;
        }
    }

    if ($repetido == false) {
        ${"n" . $pos} = $rand;
        $pos++;
        if ($pos == 7) {
            break;
        }
    }
}
?>

<?php include_once("header.php"); ?>

<body>
    <section>
        <article class="Qué-son-estos-eventos">
            <div class="que-eventos">

                <div id="hr1_que-evento">
                    <h1 class="translate">¿Qué son estos eventos?</h1>
                    <hr class="hr_que-eventos">
                </div>

                <div class="contenido_que-eventos">
                    <p class="translate">
                        Los presentes eventos tienen la finalidad de ayudar al medio ambiente, usando a los usuarios de Leafing como medio conectivo entre la interacción de eventos creados por ustedes mismos donde podrán contribuir por medio de la inscripción y registro de los mismos.
                    </p>

                    <div class="preguntas_eventos-eventos">
                        <p><a href="../php/about_us.php"><span class="translate hover-xd">¿Quiénes somos?</span></a> </p>
                        <p><a href="../php/crear_evento.php"><span class="translate hover-xd">Crea un evento</span></a></p>
                    </div>

                    <a href="../php/comunity.php"><button class="button_que-eventos" class="translate"><span class="translate">Explorar más</span></button></a>

                </div>

                <div class="img_que-eventos">
                    <img id="img_que-eventos" src="../img/imagenes/que-eventos_img.svg" alt="imagen-que-eventos">
                </div>

            </div>
        </article>

        <article class="slider_article">
            <div class="titulos-generales">
                <div class="titulo_generales">
                    <h1 class="translate">Próximos eventos de la <br> comunidad </h1>
                    <hr>
                </div>
                <div></div>
            </div>


            <div class="slider-center">
                <div class="container_container">
                    <article class="container-slider">
                        <div class="slider_screen primeroxd">
                            <div class="text_slider t_Primero">
                                <h2>Martha</h2>
                                <h1>Recolección de basura</h1>
                                <a href="../php/evento-especifico.php"><button> <span class="translate">Detalles</span></button></a>
                            </div>
                            <div class="imgen_slider i_Primero">
                            </div>

                        </div>
                        <div class="slider_screen segundoxd">
                            <div class="text_slider t_Primero">
                                <h2>Martha</h2>
                                <h1>Recolección de basura</h1>
                                <a href="../php/evento-especifico.php"><button> <span class="translate">Detalles</span></button></a>
                            </div>
                            <div class="imgen_slider i_Segundo">
                            </div>

                        </div>
                        <div class="slider_screen terceroxd">
                            <div class="text_slider t_Primero">
                                <h2>Martha</h2>
                                <h1>Recolección de basura</h1>
                                <a href="../php/evento-especifico.php"><button> <span class="translate">Detalles</span></button></a>
                            </div>
                            <div class="imgen_slider i_Tercero">
                            </div>

                        </div>
                        <div class="slider_screen cuartoxd">
                            <div class="text_slider t_Primero">
                                <h2>Martha</h2>
                                <h1>Recolección de basura</h1>
                                <a href="../php/evento-especifico.php"><button> <span class="translate">Detalles</span></button></a>
                            </div>
                            <div class="imgen_slider i_Cuarto">
                            </div>

                        </div>
                        <div class="slider_screen quintoxd">
                            <div class="text_slider t_Primero">
                                <h2>Martha</h2>
                                <h1>Recolección de basura</h1>
                                <a href="../php/evento-especifico.php"><button> <span class="translate">Detalles</span></button></a>
                            </div>
                            <div class="imgen_slider i_Quinto">
                            </div>

                        </div>

                    </article>
                    <div class="container_slider_puntos">
                        <div class="container_individual_punto Btn1">
                            <div class="slider-punto active" data-estres="1"></div>
                        </div>
                        <div class="container_individual_punto Btn2">
                            <div class="slider-punto" data-estres="2"></div>
                        </div>
                        <div class="container_individual_punto Btn3">
                            <div class="slider-punto" data-estres="3"></div>
                        </div>
                        <div class="container_individual_punto Btn4">
                            <div class="slider-punto" data-estres="4"></div>
                        </div>
                        <div class="container_individual_punto Btn5">
                            <div class="slider-punto" data-estres="5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </article>


        <div class="titulos-generales">
            <div class="titulo_generales">
                <a href="../php/comunity.php" class="comunitySlider">
                    <p class="translate">Ver todos los eventos de la comunidad </p><img src="../img/iconos/flechita.svg" alt="flechita" class="menu_arrow-eventos inversion">
                </a>
            </div>
            <div></div>
        </div>
        </article>

        <article class="Recomendaciones-informacion">
            <div class="titulos-generales">
                <div class="titulo_generales">
                    <h1 class="translate">Información y <br> recomendaciones</h1>
                    <hr>
                </div>
                <div></div>
            </div>
            <div class="container_recomendaciones">

                <div class="contribute_recomendaciones">
                    <div class="recomendacion">
                        <h1 class="translate">Contribuye al cuido <br> medioambiental desde casa.</h1>
                        <p class="translate">Información y recomendaciones sobre cómo ayudar al planeta sin salir de casa.</p>
                        <a href="../php/concientizate.php"><button><span class="translate">Saber más</span></button></a>
                    </div>
                </div>

                <div class="habitos_recomendaciones">
                    <div class="informacion">
                        <h1 class="translate">Hábitos para aprovechar los <br> recursos naturales.</h1>
                        <a href="../php/concientizate.php"><button><span class="translate">Saber más</span></button></a>
                    </div>
                </div>
            </div>
        </article>

        <article class="¿Sabias-qué?">
            <div class="titulos-generales">
                <div class="titulo_generales">
                    <h1 class="translate">¿Sabías qué?</h1>
                    <hr>
                </div>
                <div></div>
            </div>
        </article>
        <div class="Datos-curiosos_container font-mode">
            <?php
            $Datos_cards = new conection();
            $Datos = $Datos_cards->consultar("SELECT * FROM `random_curious_data` WHERE id_curious_data  IN ('$n1', '$n2', '$n3', '$n4', '$n5', '$n6')");
            ?>

            <?php foreach ($Datos as $Dato) { ?>
                <div class="Datos_cards">
                    <div>
                        <h1> <?php echo $Dato['title_curious_data'] ?> </h1>
                        <img src="../img/imagenes/icono_2-datos.png" alt="icon_datos">
                    </div>
                    <p> <?php echo $Dato['content_curious_data'] ?> </p>

                </div>
            <?php }  ?>
        </div>
    </section>
</body>
<?php include_once("footer.php"); ?>