<main class="container">
	<div class="row">
		<h1 class="col-md-12 d-flex justify-content-center">Nuevo alquiler</h1>
	</div>

	<section class="row mt-3">
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2 class="m-auto">Información de la renta </h2>
			</div>

			<div class="card-body w-100">
				
					<div class="form-group">
						<label>Fecha despacho</label>
						<input type="date" name="star_date" id="star_date" class="form-control" placeholder="Ej. ">
					</div>
					<div class="form-group">
						<label>Fecha entrega</label>
						<input type="date" name="end_date" id="end_date" class="form-control" placeholder="Ej. ">
					</div>
					<div class="form-group">
						<label>Total</label>
						<input type="number" name="total" id="total" class="form-control" placeholder="Ej. 40000">
					</div>
					<div class="form-group">
						<label>Usuarios</label>
						<select id="user_id" class="form-control">
                        <option value="">Seleccione...</option>
                        <?php foreach($users as $user): ?>
                            <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                        <?php endforeach ?>
                    </select>
					</div>
					<div class="form-group row">
                    <div class="col-md-8">                            
                        <label>Peliculas</label>
                        <select id="movie" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach($movies as $movie): ?>
                                <option value="<?php echo $movie->id ?>"><?php echo $movie->nameM ?></option>
                            <?php endforeach ?>
                        </select>
                     </div>
                     <div class="col-md-4 mt-4">
                        <a href="#" class="btn btn-success" id="addElement">+</a>
                     </div>
                     </div>
				     <div id="list-movies" class="form-group"></div>       
					 <div class="form-group">
						<button class="btn btn-primary" id="save">Guardar</button>
					</div>
			
			</div>
		</div>
	</section>
</main>
<script src="assets/js/rental.js"></script>