<?php    // db_functions.php
class DB_Functions 
{
	// ATRIBUTOS
    private $con;
	
	// MÉTODOS
    // constructor
    function __construct() 
	{
        require_once __DIR__.'/DB_connect.php'; // Importando conexión
        
		// connecting to database
        $db = new DB_Connect();
        $this->con = $db->getDbConnection(); // Conectando con base de datos
    }
	
	// LOGIN
	//	Intentando superar un login
	public function acceso($email, $clave)
	{
		try
		{
			$sql = 'SELECT clave FROM usuario WHERE email = :email'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':email' => $email); // Array de condición
            $consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll(PDO::FETCH_COLUMN, 0); // Captura del dato

			if ($clave == $resultado[0]) // Comparación del resultado con el parametro
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		catch(PDOException $e)
		{
			// Podríamos lanzar mensaje de excepción.
		}
	}
	
	// Obtener el identificador de un usuario pasando email como parámetro de entrada
	public function idUsuario($usuario)
	{
		try 
		{
            $sql = 'SELECT id_usuario FROM usuario WHERE email =:usuario'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':usuario' => $usuario); // Array de condición
            $consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll(PDO::FETCH_COLUMN, 0);
			$id = $resultado[0];
			return $id;
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
	}
	
	// Obtener el tipo de usuario pasando email como parámetro de entrada
	public function tipoUsuario ($usuario)
	{
		try 
		{
            $sql = 'SELECT tipo FROM usuario WHERE email =:usuario'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':usuario' => $usuario); // Array de condición
            $consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll(PDO::FETCH_COLUMN, 0);
			$tipo = $resultado[0];
			return $tipo;
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
	}
	
	// Obtener el tipo de usuario pasando el id como paramentro de entrada
	public function idtipoUsuario ($identificador)
	{
		try 
		{
            $sql = 'SELECT tipo FROM usuario WHERE id_usuario =:identificador'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':identificador' => $identificador); // Array de condición
            $consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll(PDO::FETCH_COLUMN, 0);
			$tipo = $resultado[0];
			return $tipo;
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
	}
	
	/*public function acceso($usuario, $clave)
	{
		try
		{
			$sql = 'SELECT clave FROM usuario WHERE nombre = :usuario'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':usuario' => $usuario); // Array de condición
            $consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll(PDO::FETCH_COLUMN, 0); // Captura del dato
			
			if ($clave == $resultado[0]) // Comparación del resultado con el parametro
			{
				return true;
			}
			else
			{
				return false;
			}
		}	
		catch(PDOException $e)
		{
			// Podríamos capturar alguna excepción pero pasamos
		}
	}*/
	
	// SELECTS ---------------------------------------------------------------
	// 			Consultas de selección básicas
	
	// Tabla USUARIOS
	// Seleccionar todos los usuarios
    /*public function listarUsuarios() 
	{
        try 
		{
            $consulta = $this->con->prepare('SELECT * FROM usuario');
            $consulta->execute();
            $resultado = $consulta->fetchAll();
			return $resultado;
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
    }*/
	
	// Seleccionar todos
	/*public function listarHilosde($usuario) 
	{
        try 
		{
            $sql = 'SELECT * FROM hilo WHERE id_usuario = (SELECT id_usuario FROM usuario WHERE nombre =:usuario)'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':usuario' => $usuario); // Array de condición
            $consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll();
			return $resultado;
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
    }*/
	
	// crear una función que me devuelva los posts de mi usuario
	
	// INSERTS ---------------------------------------------------------------
    /*public function nuevoHilo($nom, $usuario) 
	{
		try 
		{
			$aux = 'SELECT id_usuario FROM usuario WHERE nombre = :usuario'; // Consulta
			$consulta = $this->con->prepare($aux); // Preparación
            $params = array(':usuario' => $usuario); // Array de condición
			print_r($params);
			$consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll(PDO::FETCH_COLUMN, 0); // Captura del dato
			
			$sql = "INSERT INTO hilo (nombre, creacion, id_usuario) VALUES ('$nom', NOW(), '$resultado[0]')";
			$insertar = $this->con->prepare($sql);
			$insertar->execute();
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
    }*/
	
	// UPDATES ---------------------------------------------------------------
		// Seleccionar todos los posts
	/*public function listarpostsde($usuario) 
	{
        try 
		{
            $sql = 'SELECT * FROM post WHERE id_usuario = (SELECT id_usuario FROM usuario WHERE nombre =:usuario)'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':usuario' => $usuario); // Array de condición
            $consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll();
			return $resultado;
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
    }*/
	/*public function listarpostsH($hilo) 
	{
        try 
		{
            $sql = 'SELECT * FROM post WHERE id_hilo = (SELECT id_hilo FROM hilo WHERE nombre =:hilo)'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':hilo' => $hilo); // Array de condición
            $consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll();
			return $resultado;
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
    }*/
	/*public function encuentraUsuario($id_usuario) 
	{
        try 
		{
            $sql = 'SELECT * FROM usuario WHERE id_usuario = :id_user'; // Consulta
			$consulta = $this->con->prepare($sql); // Preparación
            $params = array(':id_user' => $id_usuario); // Array de condición
            $consulta->execute($params); // Ejecución
			$resultado = $consulta->fetchAll();
			return $resultado;
			
        } 
		catch(PDOException $e) 
		{
            echo 'ERROR: ' . $e->getMessage(); // Posible error
        }
    }*/
}