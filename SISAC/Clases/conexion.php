<?php
class ConexionMySQL{

	private static $objetoConexion;

	private function __construct(){

		$this->servidor = 'localhost';
		$this->usuario	= 'root';
		$this->password = '';
		$this->baseDeDatos = "sisactividad";
		$this->obtenerConexion();
	}

	public static function obtenerObjeto(){
		if(!self::$objetoConexion instanceof self)
		{
			self::$objetoConexion = new self();
		}
		return self::$objetoConexion;
	}

	public function obtenerConexion(){
	//	if(!is_null($this->conexion)){
        $this->conexion = mysql_connect($this->servidor,$this->usuario,$this->password) or die(mysql_error());
        //}
        mysql_select_db($this->baseDeDatos,$this->conexion);
       // return $this->conexion;
	}

	public function realizarConsulta($sql,$convertirArray){
		
		$resultado =  mysql_query($sql,$this->conexion);
		if($convertirArray){
			return $this->convertirArray($resultado);
		}
		else
		{
			return $resultado;
		}
	}

	private function convertirArray($resultado){
		$objetos = array();
		while($r = mysql_fetch_assoc($resultado)) {
		    $objetos[] = array_map('utf8_encode', $r);
		}
		return $objetos;
	}

	public function convertirJson($array){
		return json_encode($array);
	}

	public function iniciarTransaccion(){
		mysql_query("SET AUTOCOMMIT=0",$this->conexion);
		mysql_query("START TRANSACTION",$this->conexion);
	}

	public function finalizarTransaccion($confirmaciones){
		$esCorrecto = true;
		foreach($confirmaciones as $confirmacion){
			if(!$confirmacion){
				$esCorrecto = false;
				break;
			}
		}

		if($esCorrecto){
			mysql_query("COMMIT",$this->conexion);
		}
		else{
			mysql_query("ROLLBACK",$this->conexion);
		}
		return $esCorrecto;
	}

}
