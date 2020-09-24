<main class="container">
    <div class="row">
        <h1 class="col-12 d-flex jutify-content-center">Nueva Pelicula</h1>
    </div>

    <section class="row mt-5">
        <div class="card w-50 m-auto">
            <div class="card-header container">
                <h2 class="m-auto">Información Pelicula</h2>
            </div>

            <div class="card-body w-100">                
                <div class="form-group">
                    <label> Nombre</label>
                    <input type="text" id="nameM" class="form-control" placeholder="Ingrese el nombre">
                </div>
                <div class="form-group">
                    <label> Descripción</label>
                    <textarea class="form-control" rows="3" id="description" placeholder="Ingrese la descripción"></textarea>
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
                        <label>Categorías</label>
                        <select id="category" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach($categories as $category): ?>
                                <option value="<?php echo $category->id ?>"><?php echo $category->nameC ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-4 mt-4">
                        <a href="#" class="btn btn-success" id="addElement">+</a>
                    </div>
                </div>                    

                <div id="list-categories" class="form-group"></div>

                <div class="form-group">
                    <button class="btn btn-primary" id="save">Guardar</button>
                </div>                
            </div>
        </div>
    </section>
</main>

<script src="assets/js/movie.js"></script>