<?php 

	include '../session/checksession.php'; 
	$id = $_GET['id']; // Identificador de usuario
	include '../session/checkid.php';
	
?>

<!DOCTYPE html>
<html>
	<head>
	
		<!-- METADATOS -->
		<title> Docente: inicio </title> <!-- Cambiar al nombre del usuario -->
		<meta charset="UTF-8">
		
		<!-- CSS -->
		<link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/bootstrap-theme.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/ufvsheet.css" type="text/css" media="screen">
		
	</head>
	
	<body>
		<div class= "page"> <!-- wrapper -->
			<header>
				<?php include '../includes/cabecera2.php'; ?>
			</header>
			
			<main>
				<h1 style="color:#fff">HOLA, ERES UN DOCENTE</h1>
			</main>
			
			<footer>
			
			</footer>
		</div>
	</body>
</html>
