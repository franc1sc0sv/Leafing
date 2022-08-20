<?php session_start() ?>
<?php include_once('header.php') ?>
<!-- main content -->
<div class="wrapper">
	<div class="row">
		<div class="col-12 col-m-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h1>
						Eventos
					</h1>
					<i class="fas fa-ellipsis-h"></i>
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
						<tbody>
							<tr>
								<td>1</td>
								<td>Funa de aristides</td>
								<td>Adrian</td>
								<td>Reciclaje</td>
								<td>San Salvador</td>
								<td>Activo</td>
								<td>0</td>
								<td><img src="../assets/icons/archive.svg" alt=" delete" class="iconOption" id="archive"></td>


							</tr>

						</tbody>
					</table>
				</div>
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