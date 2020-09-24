<!DOCTYPE html>
<html lang="es">
<head>
	<title>Gestión Peliculas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		 	<a class="navbar-brand" href="?controller=home">Home</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>

		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	<ul class="navbar-nav mr-auto">
		      	<li class="nav-item active">
		       		<a href="?controller=user" class="nav-link">Usuarios</a>
		      	</li>			      	
		      	<li class="nav-item active">
		       		<a href="?controller=typestatus" class="nav-link">Tipos Estado</a>
		      	</li>	
				<li class="nav-item active">
		       		<a href="?controller=movie" class="nav-link">Peliculas</a>
		      	</li>
				<li class="nav-item active">
		       		<a href="?controller=category" class="nav-link">Categorias</a>
		      	</li>
				<li class="nav-item active">
		       		<a href="?controller=rental" class="nav-link">Alquileres</a>
		      	</li>
				<li class="nav-item active">
		       		<a href="?controller=rol" class="nav-link">Roles</a>
		      	</li>			      	
		    </ul>
		  </div>
		</nav>			
	</header>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>