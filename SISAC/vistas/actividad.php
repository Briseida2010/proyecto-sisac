<?php include('cabecera.php')	?>	

			<h6 id="tituloActividad">NUEVA ACTIVIDAD</h6>
			<form id="frm" method="POST" action="../Modulos/crearActividad.php">
				<input class="cajatexto"type="text" name="nomActividad" maxlength="300" placeholder="Nombre de la Actividad" required><br>
				<label>Tipo de Actividad</label>
					<select name="tipActividad">
					<option value="seleccione">-------------</option>
					<option value="academica">Academica</option>
					<option value="administrativa">Administrativa</option>
					</select>
				<label id="labelestado">Estado:</label>
					<input type = "radio"
	                 name = "estado"
	                 value = "realizado"
	                 checked = "checked" />
	          		<label >Realizado</label>
	          
	          		<input type = "radio"
	                 name = "estado"
	                 value = "norealizado" />
	          		<label>No realizado</label>
 
			<hr>
				<label id="labeliniciar">Iniciar <input class="cajadate" type="date" name="fecInicio"></label>
				<label >Hora <input class="cajatiempo" type="time" name="horInicio"></label><br>
				<label id="labelfinal">Finalizar <input  class="cajadate" type="date" name="fecFinal"></label>
				<label>Hora <input class="cajatiempo" type="time" name="horFinal"></label><br>
			<hr>
				<section id="der">
					<input id="subirarchivo" type="file" name="subArchivo" placeholder="Subir archivo"><br>
					<label>Nota:</label><br>
					<textarea name="nota"></textarea>
				</section >

			<section id="izq">
				<label>Participantes</label> <input type="checkbox">
				<section id="participantes">
						<input type="checkbox">IBARRA MONTECINOS, MARIELLA ROSARIO <br>
						<input type="checkbox">ALE NIETO, TITO FERNANDO <br>
						<input type="checkbox">PAREDES VIGNOLA, MARTHA JUDITH <br>
						<input type="checkbox">CHAIÑA CONDORI, HENRY WILSON <br>
						<input type="checkbox">SISA YATACO, HAYDEE RAQUEL <br>
						<input type="checkbox">LANCHIPA VALENCIA, ENRIQUE FELIX <br>
						<input type="checkbox">FERNANDEZ VIZCARRA, LUIS ALFREDO <br>
						<input type="checkbox">MARTINEZ SALAMANCA, MARCIA HILDA <br>
						<input type="checkbox">HUAYTA CURO, JENNY GABRIELA <br>
						<input type="checkbox">MARTINEZ PEALOZA, MINELLY YSABEL <br>
						<input type="checkbox">PAJUELO BELTRAN, CARLOS ALBERTO <br>
						<input type="checkbox">POVEA CONDORI, ABEL					 <br>
						<input type="checkbox">RUIZ CANCINO, CARLOS ALBERTO <br>
						<input type="checkbox">OSCO MAMANI, ERBERT FRANCISCO <br>
						<input type="checkbox">VALCARCEL ALVARADO, RICARDO EDUARDO <br>
						<input type="checkbox">RODRIGUEZ MARCA, ELARD RICARDO <br>
						<input type="checkbox">TEJERINA RIVERA, JESUS RAUL <br>
						<input type="checkbox">CENTELLA VILDOSO, SILVIA MARLENE <br>
						<input type="checkbox">CAPIA TICONA, MARCELINA MARIA <br>
						<input type="checkbox">AGUILAR ORTIZ, MANUEL CHRISTIAN <br>
						<input type="checkbox">VEGA BERNAL, LILIANA MERCEDES PARCIAL <br>
						<input type="checkbox">ALCANTARA MARTINEZ, HUGO MARTIN <br>
						<input type="checkbox">ALANOCA LLANOS, RODOLFO MARIANO <br>
						<input type="checkbox">LIENDO HUABLOCHE, ROBERTO MAURICIO <br>
						<input type="checkbox">ROJAS MORALES, IVAN CESAR <br>
				</section>	
			</section>
			<hr>

			<button class="submitcrear" name="crear" type="submit"></button>
			
			<!--<button class="submitcancelar" name="cancelar" type="submit"></button>-->
			</form>


<?php include('piedepagina.php')	?>	