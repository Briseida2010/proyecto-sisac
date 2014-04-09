<?php include('cabecera.php') ?>
			<h6 id="tituloComunicado">NUEVO COMUNICADO</h6>			
			<form id="frm" method="POST" action="../Modulos/crearComunicado.php">
				<input id="cajatitulo" name="titComunicado" type="text" maxlength="100" placeholder="Titulo del comunicado" required><br>
				<hr></hr>
				<section id="der">
					<label id="labelcontenido">Contenido:</label><br>
					<textarea id="contenidocomunicado" name="contenido"></textarea>
				</section >

				<section id="izq">
					<label id="labelparticipantes">Participantes</label> <input type="checkbox">
					<section id="participantes">
						<input type="checkbox">PAREDES VIGNOLA, MARTHA JUDITH <br>
						<input type="checkbox">SISA YATACO, HAYDEE RAQUEL <br>
						<input type="checkbox">ALCANTARA MARTINEZ, HUGO MARTIN <br>
						<input type="checkbox">VALCARCEL ALVARADO, RICARDO EDUARDO <br>
						<input type="checkbox">RODRIGUEZ MARCA, ELARD RICARDO <br>
						<input type="checkbox">ROSADO CISNEROS MARTIN RAMON <br>
						<input type="checkbox">POMA LAURA RAFAEL HUMBERTO<br>
						<input type="checkbox">LIENDO HUABLOCHE, ROBERTO MAURICIO <br>
						<input type="checkbox">ALANOCA LLANOS, RODOLFO MARIANO <br>
						<input type="checkbox">FERNANDEZ VIZCARRA, LUIS ALFREDO <br>
						
						
						
					</section>
				</section>
				<hr>
				<label>Fecha <input class="cajadate" type="date" name="fecEnvio"></label>
				<label>Hora <input class="cajatiempo" type="time" name="horEnvio"></label>
				<button class="submitenviar" name ="enviar" type="submit"></button>
				<!--<button class="submitcancelar" name="cancelar" type="submit"></button>-->
				
				</section>

			</form>

<?php include('piedepagina.php')	?>