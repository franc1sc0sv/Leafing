<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Title</title>
</head>

<body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>

</html>


<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$nombreBD = "leafing";
$conexion = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conexion->connect_error) {
    die("la conexión ha fallado: " . $conexion->connect_error);
}


if (!isset($_POST['buscar'])) {
    $_POST['buscar'] = '';
}
if (!isset($_POST['buscadepartamento'])) {
    $_POST['buscadepartamento'] = '';
}
if (!isset($_POST['color'])) {
    $_POST['color'] = '';
}
if (!isset($_POST['buscafechadesde'])) {
    $_POST['buscafechadesde'] = '';
}
if (!isset($_POST['buscafechahasta'])) {
    $_POST['buscafechahasta'] = '';
}
if (!isset($_POST['buscapreciodesde'])) {
    $_POST['buscapreciodesde'] = '';
}
if (!isset($_POST['buscapreciohasta'])) {
    $_POST['buscapreciohasta'] = '';
}
if (!isset($_POST["orden"])) {
    $_POST["orden"] = '';
}


?>




<div class="container mt-5">
    <div class="col-12">



        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Buscador</h4>


                        <form id="form2" name="form2" method="POST" action="si.php">
                            <div class="col-12 row">

                                <div class="mb-3">
                                    <label class="form-label">Nombre a buscar</label>
                                    <input type="text" class="form-control" id="buscar" name="buscar" value="<?php echo $_POST["buscar"] ?>">
                                </div>

                                <h4 class="card-title">Filtro de búsqueda</h4>

                                <div class="col-11">

                                    <table class="table">
                                        <thead>
                                            <tr class="filters">
                                                <th>
                                                    Departamento
                                                    <select id="assigned-tutor-filter" id="buscadepartamento" name="buscadepartamento" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;">
                                                        <?php if ($_POST["buscadepartamento"] != '') { ?>
                                                            <option value="<?php echo $_POST["buscadepartamento"]; ?>"><?php echo $_POST["buscadepartamento"]; ?></option>
                                                        <?php } ?>
                                                        <option value="">Todos</option>
                                                        <option value="Compras">Compras</option>
                                                        <option value="Ventas">Ventas</option>
                                                        <option value="Alquileres">Alquileres</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    Precio desde:
                                                    <input type="number" id="buscapreciodesde" name="buscapreciodesde" class="form-control mt-2" value="<?php echo $_POST["buscapreciodesde"]; ?>" style="border: #bababa 1px solid; color:#000000;">
                                                </th>
                                                <th>
                                                    Precio hasta:
                                                    <input type="number" id="buscapreciohasta" name="buscapreciohasta" class="form-control mt-2" value="<?php echo $_POST["buscapreciohasta"]; ?>" style="border: #bababa 1px solid; color:#000000;">
                                                </th>

                                                <th>
                                                    Fecha desde:
                                                    <input type="date" id="buscafechadesde" name="buscafechadesde" class="form-control mt-2" value="<?php echo $_POST["buscafechadesde"]; ?>" style="border: #bababa 1px solid; color:#000000;">
                                                </th>
                                                <th>
                                                    Fecha hasta:
                                                    <input type="date" id="buscafechahasta" name="buscafechahasta" class="form-control mt-2" value="<?php echo $_POST["buscafechahasta"]; ?>" style="border: #bababa 1px solid; color:#000000;">
                                                </th>
                                                <th>
                                                    Color
                                                    <select id="subject-filter" id="color" name="color" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;">
                                                        <?php if ($_POST["color"] != '') { ?>
                                                            <option value="<?php echo $_POST["color"]; ?>"><?php echo $_POST["color"]; ?> </option>
                                                        <?php } ?>
                                                        <option value="">Todos</option>
                                                        <option value="Ahuachapán">Ahuachapán</option>
                                                        <option value="Cabañas">Cabañas</option>
                                                        <option value="Chalatenango">Chalatenango</option>
                                                        <option value="Cuscatlán">Cuscatlán</option>
                                                        <option value="La Libertad">La Libertad</option>
                                                        <option value="La Paz">La Paz</option>
                                                        <option value="La Unión">La Unión</option>
                                                        <option value="Morazán">Morazán</option>
                                                        <option value="San Salvador">San Salvador</option>
                                                        <option value="San Vicente">San Vicente</option>
                                                        <option value="Santa Ana">Santa Ana</option>
                                                        <option value="Sonsonate">Sonsonate</option>
                                                        <option value="Usulután">Usulután</option>
                                                        <option value="San Miguel">San Miguel</option>
                                                    </select>
                                                    </select>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>


                                <h4 class="card-title">Ordenar por</h4>

                                <div class="col-11">

                                    <table class="table">
                                        <thead>
                                            <tr class="filters">
                                                <th>
                                                    Selecciona el orden
                                                    <select id="assigned-tutor-filter" id="orden" name="orden" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;">
                                                        <?php if ($_POST["orden"] != '') { ?>
                                                            <option value="<?php echo $_POST["orden"]; ?>">
                                                                <?php
                                                                if ($_POST["orden"] == '1') {
                                                                    echo 'Ordenar por nombre';
                                                                }
                                                                if ($_POST["orden"] == '2') {
                                                                    echo 'Ordenar por departamento';
                                                                }
                                                                if ($_POST["orden"] == '3') {
                                                                    echo 'Ordenar por color';
                                                                }
                                                                if ($_POST["orden"] == '4') {
                                                                    echo 'Ordenar por precio de menor a mayor';
                                                                }
                                                                if ($_POST["orden"] == '5') {
                                                                    echo 'Ordenar por precio de mayor a menor';
                                                                }
                                                                if ($_POST["orden"] == '6') {
                                                                    echo 'Ordenar por fecha de reciente';
                                                                }
                                                                if ($_POST["orden"] == '7') {
                                                                    echo 'Ordenar por fecha de antigua';
                                                                }
                                                                ?>
                                                            </option>
                                                        <?php } ?>
                                                        <option value=""></option>
                                                        <option value="1">Ordenar por nombre</option>
                                                        <option value="2">Ordenar por departamento</option>
                                                        <option value="3">Ordenar por color</option>
                                                        <option value="4">Ordenar por precio de menor a mayor</option>
                                                        <option value="5">Ordenar por precio de mayor a menor</option>
                                                        <option value="6">Ordenar por fecha de reciente</option>
                                                        <option value="7">Ordenar por fecha de antigua</option>
                                                    </select>
                                                </th>



                                            </tr>
                                        </thead>
                                    </table>
                                </div>


                                <div class="col-1">
                                    <input type="submit" class="btn " value="Ver" style="margin-top: 38px; background-color: purple; color: white;">
                                </div>
                            </div>


                            <?php
                            /*FILTRO de busqueda////////////////////////////////////////////*/
                            if ($_POST['buscar'] == '') {
                                $_POST['buscar'] = ' ';
                            }
                            $aKeyword = explode(" ", $_POST['buscar']);


                            if ($_POST["buscar"] == '' and $_POST['buscadepartamento'] == '' and $_POST['color'] == '' and $_POST['buscafechadesde'] == '' and $_POST['buscafechahasta'] == '' and $_POST['buscapreciodesde'] == '' and $_POST['buscapreciohasta'] == '') {
                                $query = "SELECT * FROM events ";
                            } else {


                                $query = "SELECT * FROM events ";

                                if ($_POST["buscar"] != '') {
                                    $query .= "WHERE (name_event LIKE LOWER('%" . $aKeyword[0] . "%')) ";

                                    for ($i = 1; $i < count($aKeyword); $i++) {
                                        if (!empty($aKeyword[$i])) {
                                            $query .= " OR name_event LIKE '%" . $aKeyword[$i] . "%'";
                                        }
                                    }
                                }

                                if ($_POST["buscadepartamento"] != '') {
                                    $query .= " AND departamento = '" . $_POST['buscadepartamento'] . "' ";
                                }

                                if ($_POST["buscafechadesde"] != '') {
                                    $query .= " AND fecha BETWEEN '" . $_POST["buscafechadesde"] . "' AND '" . $_POST["buscafechahasta"] . "' ";
                                }

                                if ($_POST['buscapreciodesde'] != '') {
                                    $query .= " AND precio >= '" . $_POST['buscapreciodesde'] . "' ";
                                }

                                if ($_POST['buscapreciohasta'] != '') {
                                    $query .= " AND precio <= '" . $_POST['buscapreciohasta'] . "' ";
                                }

                                if ($_POST["color"] != '') {
                                    $query .= " AND place_event = '" . $_POST["color"] . "' ";
                                }

                                if ($_POST["orden"] == '1') {
                                    $query .= " ORDER BY nombre ASC ";
                                }

                                if ($_POST["orden"] == '2') {
                                    $query .= " ORDER BY departamento ASC ";
                                }

                                if ($_POST["orden"] == '3') {
                                    $query .= " ORDER BY color ASC ";
                                }

                                if ($_POST["orden"] == '4') {
                                    $query .= " ORDER BY precio ASC ";
                                }

                                if ($_POST["orden"] == '5') {
                                    $query .= " ORDER BY precio DESC ";
                                }

                                if ($_POST["orden"] == '6') {
                                    $query .= " ORDER BY fecha ASC ";
                                }

                                if ($_POST["orden"] == '7') {
                                    $query .= " ORDER BY fecha DESC ";
                                }
                            }


                            $sql = $conexion->query($query);

                            $numeroSql = mysqli_num_rows($sql);

                            ?>
                            <p style="font-weight: bold; color:purple;"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> Resultados encontrados</p>
                        </form>


                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr style="background-color:purple; color:#FFFFFF;">
                                        <th style=" text-align: center;"> Nombre </th>
                                        <th style=" text-align: center;"> Departamento </th>
                                        <th style=" text-align: center;"> Color </th>
                                        <th style=" text-align: center;"> Precio </th>
                                        <th style=" text-align: center;"> Fecha </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($rowSql = $sql->fetch_assoc()) {   ?>

                                        <tr>
                                            <td style="text-align: center;"><?php echo $rowSql["name_event"]; ?></td>
                                            <td style="text-align: center;"><?php //echo $rowSql["description_event"]; 
                                                                            ?></td>

                                            <td style="text-align: center;"><?php echo $rowSql["place_event"]; ?></td>
                                            
                                                <td style="text-align: center;"><?php //echo $rowSql["precio"]; 
                                                                                ?> €</td>
                                                <td style=" text-align: center;"><?php //echo $rowSql["fecha"]; 
                                                                                    ?></td> 
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
</div>







</body>

</html>
<?php
print_r($query);

?>