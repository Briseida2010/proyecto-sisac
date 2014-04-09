<?php require_once('../Clases/clscomunicado.php');
	$comunicado = new Comunicado();

	$comunicado->titComunicado= $_POST["titComunicado"];
	$comunicado->contenido= $_POST["contenido"];
	$comunicado->fecEnvio= $_POST["fecEnvio"];
	$comunicado->horEnvio= $_POST["horEnvio"];

	$funciono=$comunicado->crearComunicados();

	if ($funciono==true) {
		echo "good";
	}else{
		echo "bad";
	}
