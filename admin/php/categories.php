<?php session_start() ?>
<?php include_once('header.php') ?>
<!-- main content -->
<div class="wrapper">

	<div class="row">
		<div class="col-12 col-m-12 col-sm-12 ">
			<div class="card">
				<div class="card-header">
					<h2>
						Crea una categoria
					</h2>
				</div>
				<div class="card-content">
					<button class="buttonNew" id="new"><span class="translate"><span class="translate"></span>Nueva</span></button>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12 col-m-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h1>
						Categorias
					</h1>
				</div>
				<div class="card-content">
					<table>
						<thead>
							<tr>
								<th>#</th>
								<th>Categoria ES</th>
								<th>Categoria EN</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody id="dataCategories">

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
			<h1>Categorias</h1>
			<img src="../assets/icons/close.svg" alt="xD" id="XModal" class="XModal">
		</div>
		<div class="contentModel" id="contentModel">
			<h2>Crea nuevas categorias</h2>
			<div class="es">
				<p>Categoria en español:</p>
				<input type="text" name="categoryES" class="inputCategory" id="inputCategoryES">
			</div>
			<div class="en">
				<p>Categoria en ingles:</p>
				<input type="text" name="categoryEN" class="inputCategory" id="inputCategoryEN">
			</div>
		</div>
		<div class="footerModel">
			<button id="cancel" class="cancel buttonNew"><span>Cancelar</span></button>
			<button id="kepp" class="keep buttonNew"><span>Guardar</span></button>
		</div>
	</div>
</div>

<div class="container-modal" id="containerModalEdit">
	<div class="content-modal col-xl-5 col-5 col-m-7 col-sm-8" id="contentModal">
		<div class="headerModal" id="headerModal">
			<h1>Editar</h1>
			<img src="../assets/icons/close.svg" alt="xD" id="XModal" class="XModal" onclick="hideModal()">
		</div>
		<div class="contentModel" id="contentModel">
			<h2>Editar cagoria #<span class="idEscondido">0</span> </h2>
			<div class="es">
				<p>Categoria en español:</p>
				<input type="text" name="categoryES" class="inputCategory" id="inputCategoryEsEdit">
			</div>
			<div class="en">
				<p>Categoria en ingles:</p>
				<input type="text" name="categoryEN" class="inputCategory" id="inputCategoryEnEdit">
			</div>
		</div>
		<div class="footerModel">
			<button id="cancel" class="cancel buttonNew" onclick="hideModal()"><span>Cancelar</span></button>
			<button id="keppCategorieEdit" class="keep buttonNew"><span>Guardar</span></button>
		</div>
	</div>
</div>

<style>
	.categoryNav {
		background: var(--second-bg-color);
		color: #eb4d4b;
	}

	.categoryNav div {
		border-left: 5px solid var(--danger-color);

	}

	.categoryNav i {
		color: var(--danger-color);
		margin-left: -5px;
	}
</style>
<!-- end main content -->
<?php include_once('footer.php') ?>