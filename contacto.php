<?php
	require_once("conexion.php");
/**
 *
 */
class Contacto extends Conexion
{
  public function contactar($LastName,$Nphone,$Email,$Message){
    $this->sentencia="INSERT INTO Contacto VALUES (null,'$LastName','$Nphone','$Email','$Message');";
    $this->ejecutarSentencia();
  }
}
