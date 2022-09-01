<?php session_start() ?>
<?php include_once('./verification.php') ?>
<?php include_once('conexion.php');
$id	= $_SESSION['dataID'];
$objconexion = new conection();
$dataUser = $objconexion->consultar("SELECT name,lastname FROM `user_data` WHERE id_user_data = $id");
$dataUserCount = $objconexion->consultar("SELECT count(*) FROM `user_data`");
$dataEventCount = $objconexion->consultar("SELECT count(*) FROM `events`");
$dataReportsCount = $objconexion->consultar("SELECT count(*) FROM `reports_transactional`");
$dataInscriptionCount = $objconexion->consultar("SELECT count(*) FROM `inscriptions`");
?>

<?php include_once('header.php') ?>

<!-- main content -->
<div class="wrapper">
	<div class="row">
		<div class="col-12 col-m-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h1>
						Leafing admin panel control
					</h1>
				</div>
				<div class="card-content">
					<h2>Bienvenido <?php echo $dataUser[0][0], " ", $dataUser[0][1] ?></h2>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-3 col-m-6 col-sm-6">
			<div class="counter bg-primary">
				<p>
					<i class="fas fa-tasks"></i>
				</p>
				<h3><?php echo $dataEventCount[0][0]?></h3>
				<p>Eventos</p>
			</div>
		</div>
		<div class="col-3 col-m-6 col-sm-6">
			<div class="counter bg-success">
				<p>
					<i class="fas fa-spinner"></i>
				</p>
				<h3><?php echo $dataUserCount[0][0]?></h3>
				<p>Usuarios</p>
			</div>
		</div>
		<div class="col-3 col-m-6 col-sm-6">
			<div class="counter bg-warning">
				<p>
					<i class="fas fa-check-circle"></i>
				</p>
				<h3><?php echo $dataInscriptionCount[0][0]?></h3>
				<p>Inscripciones</p>
			</div>
		</div>
		<div class="col-3 col-m-6 col-sm-6">
			<div class="counter bg-danger">
				<p>
					<i class="fas fa-bug"></i>
				</p>
				<h3><?php echo $dataReportsCount[0][0]?></h3>
				<p>Reportes</p>
			</div>
		</div>
	</div>
	<!-- <button id="xD" onclick="showNotification(alert)">Show Alert</button> -->
</div>

<style>
	.adminNav {
		background: var(--second-bg-color);
		color: #eb4d4b;
	}

	.adminNav div {
		border-left: 5px solid var(--danger-color);

	}

	.adminNav i {
		color: var(--danger-color);
		margin-left: -5px;
	}
</style>
<!-- end main content -->
<?php include_once('footer.php') ?>