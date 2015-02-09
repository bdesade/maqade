<?php
	// Métodos base de datos
	require_once '../classes/DB_functions.php';
	$db = new DB_Functions();
	
	// Este include debería servir para que un usuario que esté logeado no acceda a áreas de otros usuarios
	$id = $_GET['id']; // Identificador de usuario
	
	// Comprobar que el id de la sesión sea el mismo que el de la URL
	if($_SESSION['id'] != $id) 
	{
		$id = $_SESSION['id']; // Asignamos la id de la sesión
	  
		$tip = $db->idtipoUsuario($id); // Comprobación del tipo de usuario para redireccionar
	
		if ($tip == "alumno")
		{
			header("Location: http://localhost/maqade/perfil/alumno.php?id=$id");
			exit();
		}
		else if ($tip == "docente")
		{
			header("Location: http://localhost/maqade/perfil/docente.php?id=$id");
			exit();
		}
	}
?>