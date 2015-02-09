<?php 
	include '../session/checksession.php'; // Comprobando autorización
	$id = $_GET['id']; // Identificador de usuario
	include '../session/checkid.php';
?>

<!DOCTYPE html>
<html>
	<head>
	
		<!-- METADATOS -->
		<title> Alumno: inicio </title> <!-- Cambiar al nombre del usuario -->
		<meta charset="UTF-8">
		
		<!-- CSS -->
		<link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/bootstrap-theme.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/ufvsheet.css" type="text/css" media="screen">
		
	</head>
	
	<body>
		<div class = "page"> <!-- wrapper -->
			<header>
				<?php include '../includes/cabecera2.php'; ?>
			</header>
			
			<main>
				<div class = "alu-container">
					<div class="alu-leftvertical">
						<ul>
							<li>
								<a>Perfil & progreso</a>
							</li>
							<li>
								<a>Compañeros</a>
							</li>
							<li>
								<a>Profesores</a>
							</li>
							<li>
								<a>Trabajos</a>
							</li>
							<li>
								<a>Asignaturas</a>
							</li>
							<li>
								<a>Reservado</a>
							</li>
						</ul>
					</div>
					<div class="alu-centralpics">
						<div class ="alu-centralpics-row">
							<div class = "alu-pic">
								<img src = "../pic/230360.png" alt = "No disponible"></img>
							</div>
							<div class = "alu-pic">
								<img src = "../pic/230360.png" alt = "No disponible"></img>
							</div>
						</div>
						<div class ="alu-centralpics-row">
							<div class = "alu-pic">
								<img src = "../pic/230360.png" alt = "No disponible"></img>
							</div>
							<div class = "alu-pic">
								<img src = "../pic/230360.png" alt = "No disponible"></img>
							</div>
						</div>
					</div>
				</div>
			</main>
			
			<footer>

			</footer>
		</div>
	</body>
</html>
