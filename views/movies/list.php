<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de Peliculas</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de Peliculas</h2>
			<a href="?controller=movie&method=add" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Nombre Usuario</th>
						<th>Estado Pelicula</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($movies as $movie): ?>
						<tr>
							<td><?php echo $movie->id ?></td>
							<td><?php echo $movie->nameM ?></td>
							<td><?php echo $movie->description ?></td>
							<td><?php echo $movie->name ?></td>
							<td><?php echo $movie->status ?></td>
							<td>
								<a href="?controller=movie&method=edit&id=<?php echo $movie->id?>" class="btn btn-warning" title="Editar Usuario">Editar</a>
								<a href="?controller=movie&method=delete&id=<?php echo $movie->id?>" class="btn btn-danger" title="Eliminar Usuario">Eliminar</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>
