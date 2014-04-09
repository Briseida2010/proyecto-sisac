<?php

require_once('conexion.php');//me inserta el codigo del archivo de conexion

class Usuario{

	private $conexion;//usare la variable solo para esa clase

	public function __construct(){
		$this->conexion = ConexionMySQL::obtenerObjeto();
	}


	public function listarUsuario(){
		$consulta = "SELECT * FROM Usuario";
		$usuarios = $this->conexion->realizarConsulta($consulta,true);
		return $usuarios;
	}

	public function ingresarSistema($usuario,$clave){
		$consulta="SELECT * FROM Usuario WHERE usuario='".$usuario."' AND clave='".$clave."'";
		$usuario=$this->conexion->realizarConsulta($consulta,true);
		if(empty($usuario))// el metodo vacio
		{
			return false;
		}
		else
		{
			return $usuario[0] ;	
		}
	}

}

?>