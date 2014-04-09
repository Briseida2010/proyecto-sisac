<?php

require_once('conexion.php');

class Comunicado{

	private $conexion;

	public $titComunicado;
	public $contenido;
	public $fecEnvio;
	public $horEnvio;

	public function __construct(){
		$this->conexion = ConexionMySQL::obtenerObjeto();
	}


	public function listarComunicados(){
		$consulta = "SELECT * FROM Comunicado";
		$comunicados = $this->conexion->realizarConsulta($consulta,true);
		return $comunicados;
	}

	public function crearComunicados(){
		$consulta ="INSERT INTO Comunicado(titComunicado,contenido,fecEnvio,horEnvio)".
		"VALUES ('$this->titComunicado','$this->contenido','$this->fecEnvio','$this->horEnvio')";
		$funciono =$this->conexion->realizarConsulta($consulta,false);
		return $funciono;
	}
	public function buscarPorNombre($buscar = ''){
		$consulta = "SELECT * FROM Comunicado WHERE titComunicado LIKE '%".$buscar."%' ORDER BY titComunicado";
		$nombre=$this->conexion->realizarConsulta($consulta,true);
		return $nombre;

	}

}

?>

	
