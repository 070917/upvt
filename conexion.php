<?php

	class Conexion{
		public $conexion="";
		public $host = "127.0.0.1";
		public $usuario = "root";
		public $password = "";
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
