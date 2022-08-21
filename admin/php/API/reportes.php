<?php
include_once("../conexion.php");
$id = $_GET['id'];
$objconexion = new conection();
$result = $objconexion->consultar("SELECT 
reports_transactional.id_reports_transactional, 
reports.report_name, 
reports_transactional.date_report 
FROM `reports_transactional` 
INNER JOIN reports ON reports_transactional.id_report = reports.id_reports 
WHERE id_event = $id 
ORDER BY date_report;");

if (empty($result)) {
    echo json_encode("Vacio");
} else {



    $desnudos = 0;
    $violencia = 0;
    $acoso = 0;
    $suicidio = 0;
    $informacion = 0;
    $spam = 0;
    $lengauje = 0;
    $terrorismo = 0;

    foreach ($result as $res) {
        if ($res['report_name'] == "desnudos") {
            $desnudos = $desnudos + 1;
        } elseif ($res['report_name'] == "violencia") {
            $violencia = $violencia + 1;
        } elseif ($res['report_name'] == "acoso") {
            $acoso = $acoso + 1;
        } elseif ($res['report_name'] == "suicidio") {
            $suicidio = $suicidio + 1;
        } elseif ($res['report_name'] == "informacion_falsa") {
            $informacion = $informacion + 1;
        } elseif ($res['report_name'] == "spam") {
            $spam = $spam + 1;
        } elseif ($res['report_name'] == "lenguaje") {
            $lengauje = $lengauje + 1;
        } elseif ($res['report_name'] == "terrorismo") {
            $terrorismo = $terrorismo + 1;
        }
        //echo $res['report_name'], "<br>";
    }

    // // $totalCantidad = $desnudos + $violencia + $acoso + $suicidio + $informacion + $spam + $lengauje + $terrorismo;
    // echo $totalCantidad. "<br>";
    function porcentanjes($num, $result)
    {
        if ($num == 0) {
            $xD = 0;
        } else {
            $xD = round(($num * 100) / count($result));
        }
        return $xD;
    }

    $arrayCantidad = [
        $desnudos,
        $violencia,
        $acoso,
        $suicidio,
        $informacion,
        $spam,
        $lengauje,
        $terrorismo,
        count($result)
    ];

    $arrayPorcentaje = [
        $desnudosP = porcentanjes($desnudos, $result),
        $violenciaP = porcentanjes($violencia, $result),
        $acosoP = porcentanjes($acoso, $result),
        $suicidioP = porcentanjes($suicidio, $result),
        $informacionP = porcentanjes($informacion, $result),
        $spamP = porcentanjes($spam, $result),
        $lengaujeP = porcentanjes($lengauje, $result),
        $terrorismoP = porcentanjes($terrorismo, $result)
    ];
    $total = 0;
    for ($i = 0; $i < count($arrayPorcentaje); $i++) {
        $total = $total + $arrayPorcentaje[$i];
    }
    array_push($arrayPorcentaje, $total);

    $PeriodoStart =  $result[0]['date_report'];
    $PeriodoEnd =  count($result) - 1;


    $resumenReportes = [
        $PeriodoStart,
        $result[$PeriodoEnd]['date_report'],
        $arrayCantidad,
        $arrayPorcentaje
    ];

    //print_r($resumenReportes);
    echo json_encode($resumenReportes);
}
