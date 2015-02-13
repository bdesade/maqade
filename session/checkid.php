<?php
	// Métodos base de datos
	require_once '../classes/DB_functions.php';
	$db = new DB_Functions();
	
	// Este include debería servir para que un usuario que esté logeado no acceda a áreas de otros usuarios
	$id = $_GET['id']; // Identificador de usuario
	$tipo = $_COOKIE['categoria']; // Cogemos la cookie de tipo de usuario
	//$tipo = $db->idtipoUsuario($id); va mas lento si usamos una consulta
	
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	
	// Comprobar que el id de la sesión sea el mismo que el de la URL
	if(($_SESSION['id'] != $id) || (false == strpos($url,$tipo)))  
	{
		$id = $_SESSION['id']; // Asignamos la id de la sesión
		
		header("Location: http://localhost/maqade/perfil/$tipo.php?id=$id");
		exit();
	}
?>