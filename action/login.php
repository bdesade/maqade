<?php
		
	require_once '../classes/DB_functions.php';
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	try
	{
		$db = new DB_Functions();
		$result = $db->acceso($email, $password);
		$tipo = $db->tipoUsuario($email); // Tipo de usuario por email
		$id = $db->idUsuario($email); // Id de usuario por email
		
		if($result == true)
		{
			// Inicio de sesión con id de usuario
			session_start();
			$_SESSION['id'] = $id;
			$cookie_name = "categoria"; // iniciando cookie para tipo de usuario
			
			if($tipo == "alumno")
			{
				$cookie_value = "alumno";
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
				
				header("Location: http://localhost/maqade/perfil/alumno.php?id=$id");
			}
			else if($tipo == "docente")
			{
				$cookie_value = "docente";
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
				
				header("Location: http://localhost/maqade/perfil/docente.php?id=$id");
			}
	
			die();
		}
		else
		{
			header("Location: http://localhost/maqade/index.php");
			die();
		}
	}
	catch(PDOException $e)
	{
		// posible captura de mensaje
	}
    
?>