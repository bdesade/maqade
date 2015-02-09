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
			session_start();
			//$_SESSION['usuario'] = $email; //la antigua que funciona
			$_SESSION['id'] = $id;
			
			//header("Location: http://localhost/maqade/perfil/inicio.php");

			if($tipo == "alumno")
			{
				header("Location: http://localhost/maqade/perfil/alumno.php?id=$id");
			}
			else if($tipo == "docente")
			{
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