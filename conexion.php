<?php

	class Conexion{
		public $conexion="";
		public $host = "localhost";
		public $usuario = "root";
		public $password = "fkkpyVML26.";
		public $base = "upvt";
		public $sentencia = "";

		public function conectar(){
			$this->conexion = new mysqli($this->host,$this->usuario,$this->password,$this->base);

		}

		public function cerrar(){
			$this->conexion->close();
		}

		//Altas, bajas y modificaciones.
		public function ejecutarSentencia(){
			$this->conectar();
			$this->conexion->query($this->sentencia);
			$this->cerrar();
		}

		// consultas
		public function obtenerSentencia()
		{
			$this->conectar();
			return $this->conexion->query($this->sentencia);
		}

	}
