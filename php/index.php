<?php
include_once 'include.php';
include_once("conexion.php");

$objconexion_numbers = new conection();
$maxIdData = $objconexion_numbers->consultar("SELECT MAX(id_curious_data) FROM `random_curious_data`");
//$maxIdData[0]['MAX(id_curious_data)']
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
// echo $n1."<br>";
// echo $n2."<br>";
// echo $n3."<br>";
// echo $n4."<br>";
// echo $n5."<br>";
// echo $n6."<br>";
?>

<?php include_once("header.php"); ?>

<body>
    <section>
        <article class="Qué-son-estos-eventos">
            <div class="que-eventos">

                <div id="hr1_que-evento">
                    <h1>¿Qué son estos eventos?</h1>
                    <hr class="hr_que-eventos">
                </div>

                <div class="contenido_que-eventos">
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        voluptatum
                        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                        non
                        provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                        dolorum fuga.
                    </p>

                    <div class="preguntas_eventos-eventos">
                        <p><a href="../php/about_us.php">¿Quiénes sómos?</a> </p>
                        <p><a href="../php/crear_evento.php">Crea un evento</a></p>
                    </div>

                    <a href="../php/comunity.php"><button class="button_que-eventos">Explorar más</button></a>

                </div>

                <div class="img_que-eventos">
                    <img id="img_que-eventos" src="../img/imagenes/que-eventos_img.svg" alt="imagen-que-eventos">
                </div>

            </div>
        </article>

        <article class="slider_article">
            <div class="titulos-generales">
                <div class="titulo_generales">
                    <h1>Próximos eventos de la <br> comunidad </h1>
                    <hr>
                </div>
                <div></div>
            </div>


            <div class="container_container">
                <article class="container-slider">
                    <div class="slider_screen Primero">
                        <div class="text_slider t_Primero">
                            <h2>Martha</h2>
                            <h1>Recolección de basura</h1>
                            <a href="../php/evento-especifico.php"><button>Detalles</button></a>
                        </div>
                        <div class="imgen_slider i_Primero">
                        </div>
                        <div class="container_slider_puntos">
                            <div class="container_individual_punto">
                                <div class="slider-punto active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                        </div>
                    </div>

                    <div class="slider_screen Segundo">
                        <div class="text_slider t_Segundo">
                            <h2>Joseph</h2>
                            <h1>Liberación de tortugas</h1>
                            <a href="../html/evento-especifico.html"><button>Detalles</button></a>
                        </div>
                        <div class="imgen_slider i_Segundo">
                        </div>
                        <div class="container_slider_puntos">
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                        </div>
                    </div>

                    <div class="slider_screen Tercero">
                        <div class="text_slider t_Tercero">
                            <h2>Esteban</h2>
                            <h1>Capacitación en línea de taxonomía</h1>
                            <a href="../html/evento-especifico.html"><button>Detalles</button></a>
                        </div>
                        <div class="imgen_slider i_Tercero">
                        </div>
                        <div class="container_slider_puntos">
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                        </div>
                    </div>


                    <div class="slider_screen Cuarto">
                        <div class="text_slider t_Cuarto">
                            <h2>Leví</h2>
                            <h1>Plantamiento de árboles</h1>
                            <a href="../html/evento-especifico.html"><button>Detalles</button></a>
                        </div>
                        <div class="imgen_slider i_Cuarto">
                        </div>
                        <div class="container_slider_puntos">
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                        </div>
                    </div>

                    <div class="slider_screen Quinto">
                        <div class="text_slider t_Quinto">
                            <h2>Mario</h2>
                            <h1>Capacitación de cultivo</h1>
                            <a href="../html/evento-especifico.html"><button>Detalles</button></a>
                        </div>
                        <div class="imgen_slider i_Quinto">
                        </div>
                        <div class="container_slider_puntos">
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto non-active"></div>
                            </div>
                            <div class="container_individual_punto">
                                <div class="slider-punto active"></div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </article>


        <div class="titulos-generales">
            <div class="titulo_generales">
                <a href="../php/comunity.php">
                    <p>Ver todos los eventos de la comunidad <img src="../img/iconos/flechita.svg" alt="flechita" class="menu_arrow-eventos"></p>
                </a>
            </div>
            <div></div>
        </div>
        </article>

        <article class="Recomendaciones-informacion">
            <div class="titulos-generales">
                <div class="titulo_generales">
                    <h1>Información y <br> recomendaciones</h1>
                    <hr>
                </div>
                <div></div>
            </div>
            <div class="container_recomendaciones">

                <div class="contribute_recomendaciones">
                    <div class="recomendacion">
                        <h1>Contribuye al cuido <br> medioambiental desde casa</h1>
                        <p>Información y recomendaciones sobre cómo ayudar al planeta sin salir de casa</p>
                        <a href="../php/concientizate.php"><button>Saber más</button></a>
                    </div>
                </div>

                <div class="habitos_recomendaciones">
                    <div class="informacion">
                        <h1>Hábitos para aprovechar los <br> recursos naturales</h1>
                        <a href="../php/concientizate.php"><button>Saber más</button></a>
                    </div>
                </div>
            </div>
        </article>

        <article class="¿Sabias-qué?">
            <div class="titulos-generales">
                <div class="titulo_generales">
                    <h1>¿Sabías qué?</h1>
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