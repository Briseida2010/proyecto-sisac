<?php

require_once('conexion.php');

class Actividad{

	private $conexion;

 	public $nomActividad;
 	public $fecInicio;
 	public $fecFinal;
 	public $horInicio;
 	public $horFinal;
 	public $tipActividad;
 	public $nota;
 	public $subArchivo;
 	public $estado;


	public function __construct(){
		$this->conexion = ConexionMySQL::obtenerObjeto();
	}


	public function listarActividades(){
		$consulta = "SELECT * FROM Actividad";
		$Actividades = $this->conexion->realizarConsulta($consulta,true);
		return $Actividades;

	}

	public function crearActividades(){
		$consulta = "INSERT INTO Actividad (nomActividad, fecInicio, fecFinal, horInicio, horFinal, tipActividad, nota, subArchivo,estado) " .
  		"VALUES ('$this->nomActividad', '$this->fecInicio', '$this->fecFinal', '$this->horInicio', '$this->horFinal', '$this->tipActividad', '$this->nota', '$this->subArchivo','$this->estado')";
		$funciono = $this->conexion->realizarConsulta($consulta,false);
		return $funciono;
	}



	public function buscarPorNombre($buscar = ''){
		$consulta = "SELECT * FROM Actividad WHERE nomActividad LIKE '%".$buscar."%' ORDER BY nomActividad";
		$nombre=$this->conexion->realizarConsulta($consulta,true);
		return $nombre;

	}
}

?>