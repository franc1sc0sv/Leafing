<?php

include_once('conexion.php');

class Paginacion extends conection
{

    private $ActualPage; //En cual pagina esta el usaurio actualmente
    private $TotalPage; //Va a guardar el valor de cuantas apginas se crearon a partir de los resultados
    private $ResultsPerPage; //Resultados por paginas
    private $indice; //Pocicionar un indice de la posicion que estoy actualmeente
    private $calcpages; //Conteo de todos los resutados
    private $error = false;
    //EJEMPLO: Tengo 12 eventos y tiene que haber 4 por paginas serian 3 paginas
    //ActualPage = 1
    //Nresults = 12
    //TotalPage = Nresult / 4 (Numero de eventos por pagina) = 3
    //ResultsPerPage = 4
    //indice = si estoy en pagina 1 = 0 si estoy en pagina 2 = 5 si entoy en pagina 9    

    function __construct($NResultsPERPage, $calcpages)
    {
        parent::__construct();
        $this->ResultsPerPage = $NResultsPERPage;
        $this->indice = 0;
        $this->ActualPage = 1;
        $this->calcpages = $calcpages;
        $this->CalcPages();
    }

    function CalcPages()
    {
        $this->TotalPage = ceil($this->calcpages / $this->ResultsPerPage);

        if (isset($_GET['page'])) {

            if (is_numeric($_GET['page'])) {
                if ($_GET['page'] >= 1 && $_GET['page'] <= $this->TotalPage) {
                    $this->ActualPage = $_GET['page'];
                    $this->indice = ($this->ActualPage - 1) * ($this->ResultsPerPage);
                } else {
                    echo "No existe esa pagina";
                    $this->error = -true;
                }
            } else {
                echo "WTF un error validado";
                $this->error = -true;
            }
        }
    }

    function limits()
    {
        $indice = $this->indice;
        $resultadosperPage = $this->ResultsPerPage;
        $limits =  array(
            "indice" => $indice,
            "resultadosperPage" => $resultadosperPage,
        );
        return $limits;
    }
    function showevents($events)
    {
        if (!$this->error) {
            foreach ($events as $event) {
                include('showevents.php');
            }
        } else {
            echo "error";
        }
    }


    function showpages()
    {
        $actual = '';
        $si = false;
        $url = $_SERVER["REQUEST_URI"];
        $filtrosget = explode('?', $url);


        if (count($filtrosget) == 2) {
            $xD = array(0 => $filtrosget[1]);
            unset($filtrosget[1]);
            $filtrosget = array_replace($filtrosget, $xD);
            $filtrosget = explode('&page=', $filtrosget[0]);
            if (count($filtrosget) == 2) {
                unset($filtrosget[1]);
            } else {
                $filtrosget = explode('page=', $filtrosget[0]);
                if (count($filtrosget) == 2) {
                    $filtrosget[0] = "/LEAFING/Crea-J-2022/php/comunity.php";
                    unset($filtrosget[1]);
                }
            }
        }

        echo '<ul class="pagination">';
        for ($i = 0; $i < $this->TotalPage; $i++) {
            if (($i + 1) == $this->ActualPage) {
                $actual = 'class= "active"';
            } else {
                $actual = '';
            }
            if ($filtrosget[0] == "/LEAFING/Crea-J-2022/php/comunity.php" || $filtrosget[0] == "page") {
                echo '<li><a ' . $actual . 'href="?page=' . ($i + 1) . '">' . ($i + 1) . '</a></li>';
            } else {
                echo '<li><a ' . $actual . 'href="?' . $filtrosget[0] . '&page=' . ($i + 1) . '">' . ($i + 1) . '</a></li>';
            }
        }
        echo '</ul>';
    }
}
