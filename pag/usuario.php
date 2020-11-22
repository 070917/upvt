<?php
	session_start();
	require_once("../conexion.php");
	class Usuario extends Conexion{
		public function comprobar($usuario,$password){
			$this->sentencia="SELECT Name FROM Usuario WHERE Name='$usuario' AND password='$password'";
			$resultado=$this->obtenerSentencia();
			if($resultado->num_rows==1){
				//Lo vamos a mandar a la página principal
				$_SESSION["autenticado"] = true;
				header("Location: principal.php");
			}else{
				//Lo vamos a mandar al login
				header("Location: login.php?error=si");
			}
		}

	}

 ?>
