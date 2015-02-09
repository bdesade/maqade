<!DOCTYPE html>
<html>
	<head>
	
		<!-- METADATOS -->
		<title> Conectar </title>
		<meta charset="UTF-8">
		
		<!-- CSS -->
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/ufvsheet.css" type="text/css" media="screen">
		
		<!-- JAVASCRIPT -->
	
	</head>
	

	<body>
		<div class = "page">
			<header>
				<?php include 'includes/cabecera1.php'; ?>
			</header>
			
			<div class = "loginform">
				<form class="form-horizontal" role="form" action='action/login.php' method='post' accept-charset='utf-8'>
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-10">
					  <input type="email" class="form-control" id="inputEmail3" placeholder="Escriba su dirección de correo electrónico" name="email" required>
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Clave</label>
					<div class="col-sm-10">
					  <input type="password" class="form-control" id="inputPassword3" placeholder="Escriba su contraseña del portal" name = "password" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <div class="checkbox">
						<label>
						  <input type="checkbox"> Recordarme
						</label>
					  </div>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-default">Conectar</button>
					</div>
				  </div>
				</form>
			</div>
		</div>
	</body>
</html>