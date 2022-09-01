<?php
include_once('./templates/include.php');
include_once('./templates/conexion.php');
include_once('./templates/header.php');
?>


<body class="darkmode">
    <div class="generalContainer">
        <div class="backImage"></div>
        <div class="first">
            <form class="form" action="comunity.php" method="post" id="formFilter">
                <div class="containerFiltros">
                    <div class="first-text">

                        <input type="search" class="inputs search" id="Buscador" name="busca" />
                        <img src="../img/iconos/lupa.png" alt="" class="lupa">
                    </div>
                    <div>
                        <select name="categorias" class="inputs" id="categoriasFilters">
                        </select>
                    </div>
                    <div>
                        <input type="datetime-local" name="date_filtro" class="inputs date" value="">
                    </div>
                    <div>
                        <select name="lugar" class="inputs" id="Lugar">
                        </select>
                    </div>
                    <div>
                        <select id="orden" name="orden" class="inputs">

                        </select>
                    </div>
                    <div>
                        <button type="submit" value="ENVIAR" class="send"> <span class="translate"> Enviar</span> </button>
                    </div>
                </div>
            </form>

            <div class="xDD">
                <?php

                // $numeroEvents =  count($events);
                // if ($numeroEvents > 0 and $_GET['busca'] != '') {
                //     echo '<span class="translate">Resultados encontrados:</span><b> ' . $numeroEvents . '</b>';
                // }

                ?>
            </div>

        </div>
    </div>
    </div>

    <div class="contenedor" id="contenedor">

    </div>
    </div>
    <div class="pagination">
        <form action="comunity.php" method="post">
            <?php //$objconexionpaginas->showpages() 
            ?>
        </form>

    </div>

    <script src="../js/filtros.js"></script>
</body>
<?php include_once('./templates/footer.php'); ?>