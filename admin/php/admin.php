<?php session_start() ?>
<?php include_once('header.php') ?>

<!-- main content -->
<div class="wrapper">
	<div class="row">
		<div class="col-3 col-m-6 col-sm-6">
			<div class="counter bg-primary">
				<p>
					<i class="fas fa-tasks"></i>
				</p>
				<h3>100+</h3>
				<p>Eventos</p>
			</div>
		</div>
		<div class="col-3 col-m-6 col-sm-6">
			<div class="counter bg-success">
				<p>
					<i class="fas fa-spinner"></i>
				</p>
				<h3>100+</h3>
				<p>Usuarios</p>
			</div>
		</div>
		<div class="col-3 col-m-6 col-sm-6">
			<div class="counter bg-warning">
				<p>
					<i class="fas fa-check-circle"></i>
				</p>
				<h3>100+</h3>
				<p>Inscripciones</p>
			</div>
		</div>
		<div class="col-3 col-m-6 col-sm-6">
			<div class="counter bg-danger">
				<p>
					<i class="fas fa-bug"></i>
				</p>
				<h3>100+</h3>
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