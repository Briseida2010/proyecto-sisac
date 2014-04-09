<?php include('cabecera.php') ?>	
<?php require_once('../Clases/clscomunicado.php'); 
	 $comunicado = new Comunicado();
 	$miscomunicados = array();
	 if(isset($_GET['cajabuscar'])){
	 	$miscomunicados = $comunicado->buscarPorNombre($_GET['cajabuscar']);
	 } else {
	 	$miscomunicados = $comunicado->listarComunicados();
	 }

?>
			<h6 id="tituloComunicado">MIS COMUNICADOS</h6>
			<form id="frm">
				<input id="cajabuscar" name="cajabuscar" type="text" maxlength="300" placeholder="Buscar nombre del comunicado">
				<button class="submitbuscar"type="submit"></button>
				<a href="comunicado.php" class="submitnuevo"></a>
				<section  id="grid">
				<table id="tabla">
  					<thead>
   						<tr>
      					  <th data-field="titComunicado">Titulo del comunicado</th>
					      <th data-field="contenido">contenido</th>
					      <th data-field="fecEnvio">fecha de envio</th>
					      <th data-field="horEnvio">hora de envio</th>
   						</tr>
   					</thead>
   					<tbody>
   						<?php
   						foreach($miscomunicados as $c)
   						{ ?>
   							<tr>
	   							<td>
	   								<?php echo $c['titComunicado']; ?>
	   							</td>
	   							<td>
	   								<?php echo $c['contenido']; ?>
	   							</td>
	   							<td>
	   								<?php echo $c['fecEnvio']; ?>
	   							</td>
	   							<td>
	   								<?php echo $c['horEnvio']; ?>
	   							</td>	
   							</tr>
   						<?php } ?>   						
						</tbody>
						</table>
				</section>
			</form>


<?php include('piedepagina.php')	?>	