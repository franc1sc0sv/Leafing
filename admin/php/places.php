<?php session_start() ?>
<?php include_once('header.php') ?>
<!-- main content -->
<div class="wrapper">

	<div class="row">
		<div class="col-12 col-m-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h2>
						Añade un nuevo lugar
					</h2>
				</div>
				<div class="card-content">
					<button class="buttonNew" id="new"><span class="translate"><span class="translate"></span>Añadir</span></button>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12 col-m-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h1>
						Lugares
					</h1>
				</div>
				<div class="card-content">
					<table>
						<thead>
							<tr>
								<th>#</th>
								<th>Lugar</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody id="dataPlaces">

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-modal" id="containerModal">
	<div class="content-modal col-xl-5 col-5 col-m-7 col-sm-8" id="contentModal">
		<div class="headerModal" id="headerModal">
			<h1>Lugares</h1>
			<img src="../assets/icons/close.svg" alt="xD" id="XModal" class="XModal">
		</div>
		<div class="contentModel" id="contentModel">
			<h2>Añade nuevos lugares</h2>
			<div class="es">
				<p>Lugar:</p>
				<input type="text" name="categoryES" class="inputCategory" id="inputPlace">
			</div>

		</div>
		<div class="footerModel">
			<button id="cancel" class="cancel buttonNew"><span>Cancelar</span></button>
			<button id="keepPlace" class="keep buttonNew"><span>Guardar</span></button>
		</div>
	</div>
</div>

<div class="container-modal" id="containerModalPlacesEdit">
	<div class="content-modal col-xl-5 col-5 col-m-7 col-sm-8" id="contentModal">
		<div class="headerModal" id="headerModal">
			<h1>Editar</h1>
			<img src="../assets/icons/close.svg" alt="xD" id="XModalEditPlaces" class="XModal" onclick="hideModalEditPlaces()">
		</div>
		<div class=" contentModel" id="contentModel">
			<h2>Edita este lugar</h2>
			<div class="es">
				<p>Lugar:</p>
				<input type="text" name="categoryES" class="inputCategory" id="inputPlaceEdit">
			</div>

		</div>
		<div class="footerModel">
			<button id="cancel" class="cancel buttonNew" onclick="hideModalEditPlaces()"><span>Cancelar</span></button>
			<button id="keepPlaceEdit" class="keep buttonNew"><span>Guardar</span></button>
		</div>
	</div>
</div>

<style>
	.LuagaresNav {
		background: var(--second-bg-color);
		color: #eb4d4b;
	}

	.LuagaresNav div {
		border-left: 5px solid var(--danger-color);

	}

	.LuagaresNav i {
		color: var(--danger-color);
		margin-left: -5px;
	}
</style>
<!-- end main content -->
<?php include_once('footer.php') ?>
