<?php session_start() ?>
<?php include_once('./verification.php') ?>

<?php include_once('header.php') ?>
<div class="wrapper">

	<div class="row">
		<div class="col-12 col-m-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h1>
						Generador de reportes
					</h1>
				</div>
				<div class="card-content">
					<h2>Informacion de los eventos</h2>
					<br>
					<a href="./xsl-generator/events.php"><button class="buttonNew" id="new"><span class="translate"><span class="translate"></span>Generar</span></button></a>
				</div>
				<div class="card-content">
					<h2>Informacion de los usuaios</h2>
					<br>
					<a href="./xsl-generator/users.php"><button class="buttonNew" id="new"><span class="translate"><span class="translate"></span>Generar</span></button></a>
				</div>
				<div class="card-content">
					<h2>Informacion de las categorias</h2>
					<br>
					<a href="./xsl-generator/categories.php"><button class="buttonNew" id="new"><span class="translate"><span class="translate"></span>Generar</span></button></a>
				</div>
				<div class="card-content">
					<h2>Informacion de los lugares</h2>
					<br>
					<a href="./xsl-generator/place.php"><button class="buttonNew" id="new"><span class="translate"><span class="translate"></span>Generar</span></button></a>
				</div>
			</div>
		</div>
	</div>

</div>


<style>
	.reportsNav {
		background: var(--second-bg-color);
		color: #eb4d4b;
	}

	.reportsNav div {
		border-left: 5px solid var(--danger-color);

	}

	.reportsNav i {
		color: var(--danger-color);
		margin-left: -5px;
	}
</style>
<!-- end main content -->
<?php include_once('footer.php') ?>