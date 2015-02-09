<?php
//creamos la sesion
session_start();
//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a index.php
if(!isset($_SESSION['id'])) 
{
  header("Location: http://localhost/maqade/index.php");
  exit();
}
?>