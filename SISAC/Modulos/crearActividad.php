<?php require_once('../Clases/clsactividad.php');
	 $actividad = new Actividad();

	 $actividad->nomActividad = $_POST["nomActividad"];
	 $actividad->fecInicio=$_POST["fecInicio"];
	 $actividad->fecFinal=$_POST["fecFinal"];
	 $actividad->horInicio=$_POST["horInicio"];
	 $actividad->horFinal=$_POST["horFinal"];
	 $actividad->tipActividad=$_POST["tipActividad"];
	 $actividad->nota=$_POST["nota"];
	 $actividad->subArchivo=$_POST["subArchivo"];
	 $actividad->estado = $_POST["estado"];
	//echo var_dump($_POST);
	$funciono = $actividad->crearActividades();
	if($funciono == true){
		echo "bien";
	}
	else{
		echo "mal";
	}


	