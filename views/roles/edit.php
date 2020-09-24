<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Editar Alquiler</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información del alquiler</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=rol&method=update" method="POST">

					<input type="hidden" name="id" value="<?php echo $rol[0]->id?>">
					
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Ej. Pedro Perez" value="<?php echo $rol[0]->name ?>">
					</div>
					<div class="form-group">
						<label>Estado</label>
						<input type="number" name="status_id" class="form-control" placeholder="Ej. pedro@pedro.com" value="<?php echo $rol[0]->status_id ?>">
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Actualizar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>