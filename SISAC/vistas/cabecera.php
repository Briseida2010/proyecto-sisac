<?php
$length = ob_get_length();
$last_modified = date ("F d Y H:i:s", getlastmod());
header("Content-Length: $length");
header("Last-Modified: $last_modified GMT time");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<title>Sisac</title>
<link href='http://fonts.googleapis.com/css?family=Artifika|Montserrat+Alternates:400,700|Audiowide' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="stylesisac.css">
<script type="text/javascript" src="../JS/live.js"></script>
</head>
<body>

	<header>

			<h1 id="titulo_header">SISAC</h1>

			<figure id="foto">

				<img src="../Imagenes/foto.png"/>
				<figcaption>
				Briseida Shura
				</figcaption>

			</figure>

	</header>
	<aside>

			<ul id="menu">
				
				<li id="actividad"><a href="misactividades.php">Actividad</a></li>
				<hr></hr>
				<li id="comunicado"><a href="miscomunicados.php">Comunicado</a></li>
			</ul>

	</aside>
	<div id="contenedor">