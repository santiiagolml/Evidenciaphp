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
				<form action="?controller=rental&method=update" method="POST">

					<input type="hidden" name="id" value="<?php echo $rental[0]->id?>">
					
					<div class="form-group">
						<label>Fecha despacho</label>
						<input type="date" name="star_date" class="form-control" placeholder="Ej. Pedro Perez" value="<?php echo $rental[0]->star_date ?>">
					</div>
					<div class="form-group">
						<label>Fecha entrega</label>
						<input type="date" name="end_date" class="form-control" placeholder="Ej. pedro@pedro.com" value="<?php echo $rental[0]->end_date ?>">
					</div>
					<div class="form-group">
						<label>Total</label>
						<input type="number" name="total" class="form-control" placeholder="Ej. 1" value="<?php echo $rental[0]->total ?>">
					</div>
					<div class="form-group">
						<label>Estado</label>
						<select name="status_id" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php 
                            	foreach($statuses as $status) {
                            		if($status->id === $data[0]->status_id) {
                            ?>
                                		<option selected value="<?php echo $status->id ?>"><?php echo $status->status ?></option>
                            <?php
                            		} else {
                            ?>
                                		<option value="<?php echo $status->id ?>"><?php echo $status->status?></option>
                            <?php
                            		}
                            	} 
                            ?>
                        </select>
					</div>
					<div class="form-group">
						<label>Id usuario</label>
						<select name="user_id" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php 
                            	foreach($users as $user) {
                            		if($user->id === $data[0]->user_id) {
                            ?>
                                		<option selected value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                            <?php
                            		} else {
                            ?>
                                		<option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                            <?php
                            		}
                            	} 
                            ?>
                        </select>
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Actualizar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>