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
<title>Login</title>
<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="stylelogin.css">
</head>
<body>

	<header>

			<figure id="logo">
				<img src="imagenes/logo_upt.png"/>
			</figure>
			<script type="text/javascript" src="JS/live.js"></script>
	</header>

	<section id="contenido">
			<h1 id="titulo_header">SISAC</h1>
			<form class="frm" method="POST" action="Modulos/Usuario/ingresarSistema.php">
			<input type="text" maxlength="30" placeholder="Codigo" required name="usuario"><br>
			<input type="password" maxlength="30" placeholder="Contraseña" required name="clave"><br>
			<button class="submit" type="submit">Ingresar</button>
			</form>
	</section>
	
	<footer>
		<p><strong>Diseño de Briseida Chura</strong></p>
		<p>Bienvenido 2014</p>
	</footer>

</body>
</html>