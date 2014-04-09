<?php include('cabecera.php') ?>	
<?php require_once('../Clases/clsactividad.php'); 
	 $actividad = new Actividad();
	 $misactividades = array();
	 if(isset($_GET['cajabuscar'])){
	 	$misactividades = $actividad->buscarPorNombre($_GET['cajabuscar']);
	 } else {
	 	$misactividades = $actividad->listarActividades();
	 }
	 
?>
			<h6 id="tituloActividad">MIS ACTIVIDADES</h6>
			<form id="frm">
				<input id="cajabuscar" name="cajabuscar" type="text" maxlength="300" placeholder="Buscar nombre de la actividad">
				<button class="submitbuscar"type="submit"></button>
			</form>
				<a href="actividad.php" class="submitnuevo"></a>
			<section  id="grid">
				<table id="tabla">
  					<thead>
   						<tr>
      					  <th data-field="nomActividad">Nombre actividad</th>
					      <th data-field="fecinicio">Fecha inicio</th>
					      <th data-field="fecFinal">Fecha final</th>
					      <th data-field="horInicio">Hora inicio</th>
					      <th data-field="horFinal">Hora final</th>
					      <th data-field="tipActividad">Tipo actividad</th>
					      <th data-field="nota">Nota</th>
					      <th data-field="subArchivo">Archivo</th>
					      <th data-field="estado">Estado</th>
   						</tr>
   					</thead>
   					<tbody>

   						<?php
   						foreach($misactividades as $a)
   						{ ?>
   							<tr>
	   							<td>
	   								<?php echo $a['nomActividad']; ?>
	   							</td>
	   							<td>
	   								<?php echo $a['fecInicio']; ?>
	   							</td>
	   							<td>
	   								<?php echo $a['fecFinal']; ?>
	   							</td>
	   							<td>
	   								<?php echo $a['horInicio']; ?>
	   							</td>	
	   							<td>
	   								<?php echo $a['horFinal'];?>
	   							</td>
	   							<td>
	   								<?php echo $a['tipActividad'];?>
	   							</td>
	   							<td>
	   								<?php echo $a['nota'];?>
	   							</td>	
	   							<td>
	   								<?php echo $a['subArchivo'];?>
	   							</td>
	   							<td>
	   								<?php echo $a['estado'];?>
	   							</td>

   							</tr>
   						<?php } ?>  

						</tbody>
						</table>
			</section>
			<hr>
			


<?php include('piedepagina.php') ?>	