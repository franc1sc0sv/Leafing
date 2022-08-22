<?php session_start() ?>
<?php
include_once('conexion.php');
include_once('header.php')
?>

<?php

$objconexion = new conection();
$eventos = $objconexion->consultar("SELECT events.id_events, events.name_event, user_data.user_name, categories_events.categories, place_events.place, state_events.state FROM `events` 
INNER JOIN categories_events ON events.id_categories_events = categories_events.id_categories_events 
INNER JOIN user_data ON events.id_user_data = user_data.id_user_data 
INNER JOIN state_events ON events.id_state_events = state_events.id_state_events
INNER JOIN place_events ON events.place_event = place_events.id_place;
");



//print_r($eventos);
?>
<!-- main content -->
<div class="wrapper">
	<div class="row">
		<div class="col-12 col-m-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h1>
						Eventos
					</h1>
				</div>
				<div class="card-content">
					<table>
						<thead>
							<tr>
								<th>#</th>
								<th>Nombre</th>
								<th>Creador</th>
								<th>Categoria</th>
								<th>Lugar</th>
								<th>Estado</th>
								<th>Reportes</th>
								<th>Opciones</th>


							</tr>
						</thead>
						<tbody id="DataEvents">
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="container-modal" id="containerModal">
	<div class="content-modal col-xl-9 col-9 col-m-9 col-sm-8" id="contentModal">
		<div class="headerModal" id="headerModal">
			<h1>Reportes</h1>
			<img src="../assets/icons/close.svg" alt="xD" id="XModal" class="XModal">
		</div>
		<div class="contentModel" id="contentModel">
			<div class="tablaReports" id="tablaReports">


				<p>Periodo:<span id="fechaPeriodo"> 2022-08-20 15:07:26 - 2022-08-20 15:07:39</span></p>
				<table>
					<thead>
						<tr>
							<th></th>
							<th>Desnudos</th>
							<th>Violencia</th>
							<th>Acoso</th>
							<th>Suicidio</th>
							<th>Iniformacion</th>
							<th>Spam</th>
							<th>Lengauje</th>
							<th>Terrorismo</th>
							<th>Total</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Cantidad</th>
							<td class="cantidad">0</td>
							<td class="cantidad">0</td>
							<td class="cantidad">0</td>
							<td class="cantidad">0</td>
							<td class="cantidad">0</td>
							<td class="cantidad">0</td>
							<td class="cantidad">0</td>
							<td class="cantidad">0</td>
							<td class="cantidad">0</td>

						</tr>
						<tr>
							<th>Porcentaje</th>
							<td class="porcentaje">0%</td>
							<td class="porcentaje">0%</td>
							<td class="porcentaje">0%</td>
							<td class="porcentaje">0%</td>
							<td class="porcentaje">0%</td>
							<td class="porcentaje">0%</td>
							<td class="porcentaje">0%</td>
							<td class="porcentaje">0%</td>
							<td class="porcentaje">0%</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<div class="container-modal" id="containerMODAAL">
	<div class="content-modal col-xl-9 col-9 col-m-9 col-sm-8" id="contentModal">
		<div class="headerModal" id="headerModal">
			<h1>Reportes</h1>
			<img src="../assets/icons/close.svg" alt="xD" id="XModall" class="XModal">
		</div>
		<div class="contentModel" id="contentModel">
			<div class="emptyReports showModel" id="emptyReports">
				<h1>Este evento no tiene reportes</h1>
			</div>
		</div>
	</div>
</div>

<style>
	.dashboardNav {
		background: var(--second-bg-color);
		color: #eb4d4b;
	}

	.dashboardNav div {
		border-left: 5px solid var(--danger-color);

	}

	.dashboardNav i {
		color: var(--danger-color);
		margin-left: -5px;
	}
</style>


<!-- end main content -->
<?php include_once('footer.php') ?>