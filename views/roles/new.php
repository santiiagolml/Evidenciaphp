<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Nuevo Rol</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información de el rol </h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=rol&method=save" method="post">
					<div class="form-group">
						<label>Nombre</label>
						<input type="name" name="name" class="form-control" placeholder="Ej. 40000">
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>