<main class="container">
	<section class="col-md-12 text-center">
		<div class="mt-3">
			<h1>Gestión de Categorias</h1>
		</div>

		<div class="col-md-12 m-4 d-flex justify-content-between">
			<h2>Lista de Categorias</h2>
			<a href="?controller=category&method=add" class="btn btn-primary">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
                        <th>Estado Categoria</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($categories as $category): ?>
						<tr>
							<td><?php echo $category->id ?></td>
							<td><?php echo $category->nameC ?></td>
                            <td><?php echo $category->status ?></td>
							<td>
								<a href="?controller=category&method=edit&id=<?php echo $category->id?>" class="btn btn-warning" title="Editar Categoria">Editar</a>
								<a href="?controller=category&method=delete&id=<?php echo $category->id?>" class="btn btn-danger" title="Eliminar Categoria">Eliminar</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>