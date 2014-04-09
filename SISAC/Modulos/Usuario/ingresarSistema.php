<?php

$rutaVista = "../../vistas/";

$rutaPrincipal = "../../";

require_once('../../Clases/usuario.php');

$usuario = $_POST['usuario'];//llama al nombre de la caja de texto del metodo post del frm login
$clave = $_POST['clave'];//llama al nombre de la caja de texto del metodo post del frm login


$objUsuario = new Usuario();//se crea un objeto de la clase usuario
$usuarioLogeado = $objUsuario->ingresarSistema($usuario,$clave);//

if($usuarioLogeado==false){
	header("Location: ".$rutaPrincipal."index.php");
}
else{
	header("Location: ".$rutaVista."sisac.php");
	die();
}