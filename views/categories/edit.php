<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Editar Categoria</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información de la categoria </h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=category&method=update" method="POST">

					<input type="hidden" name="id" value="<?php echo $category[0]->id?>">
					
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="nameC" class="form-control" placeholder="Ej. Pedro Perez" value="<?php echo $category[0]->nameC ?>">
					</div>
					<div class="form-group">
						<label>Estado</label>
						<input type="text" name="status_id" class="form-control" placeholder="Ej. 1" value="<?php echo $category[0]->status_id ?>">
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Actualizar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>