<?php

	require_once("conexion.php");

	class Persona extends Conexion{

		public function insertar($LastName,$Age,$Email){
			$this->sentencia="INSERT INTO Persons VALUES (null,'$LastName','$Age','$Email');";
			$this->ejecutarSentencia();
		}

		public function consultar()
		{
			$this->sentencia = "SELECT * FROM Persons";
			return $this->obtenerSentencia();
		}

		public function eliminar($id)
		{
			$this->sentencia = "DELETE FROM Persons WHERE Personid = $id";
			$this->ejecutarSentencia();
		}
		

	}
