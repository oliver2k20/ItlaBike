<?php 
	plantilla::inicio();


?>
<div class="row segment-margin">
	<!--Cuadro exterior del formulario-->
	<div class="col col-xs-12" style="border: 2px solid #E7E7E7">
		<!--Formulario de creacion de bicicleta-->
		<form id='form' method='post'>
			<!--Titulo del fromulario-->
			<h1>Publicaci&oacute;n de bicicleta</h1>
			<!--Titulo-->
			<div class='form-group col-sm-12 text-center'>
				<h3 for='marca'>T&iacute;tulo</h3>
				<p><?php echo $_POST['titulo']?></p>

			</div>

			<!--Marca-->
			<div class='form-group col col-sm-6'>
				<label for='marca'>Marca</label>
				<p><?=$marca?></p>

			</div>

			<!--Modelo-->
			<div class='form-group col col-sm-6'>
				<label for='modelo'>Modelo</label>
				<p><?=$modelo?></p>
				

			</div>

			<!--Frenos-->
			<div class='form-group col col-sm-6'>
				<label for='frenos'>Frenos</label>
				<p><?=$frenos?></p>
				

			</div>

			<!--Piñon-->
			<div class='form-group col col-sm-6'>
				<label for='pinon'>Pi&ntilde;&oacute;n</label>
				<p><?=$pinon?></p>

			</div>

			<!--Cambios-->
			<div class='form-group col col-sm-6'>
				<label for='cambios'>Cambios</label>
				<p><?=$cambios?></p>

			</div>

			<!--Cadena-->
			<div class='form-group col col-sm-6'>
				<label for='cadena'>Cadena</label>
				<p><?=$cadena?></p>

			</div>

			<!--Pedales-->
			<div class='form-group col col-sm-6'>
				<label for='pedales'>Pedales</label>
				<p><?=$pedales?></p>

			</div>

			<!--Tijeras-->
			<div class='form-group col col-sm-6'>
				<label for='tijeras'>Tijeras</label>
				<p><?=$tijera?></p>

			</div>

			<!--Ruedas-->
			<div class='form-group col col-sm-6'>
				<label for='ruedas'>Ruedas</label>
				<p><?=$ruedas?></p>

			</div>

			<!--Cuadro-->
			<div class='form-group col col-sm-6'>
				<label for='cuadro'>Cuadro</label>
				<p><?=$cuadro?></p>

			</div>

			<!--Manubrio-->
			<div class='form-group col col-sm-6'>
				<label for='manubrio'>Manubrio</label>
				<p><?=$manubrio?></p>

			</div>

			<!--Tija-->
			<div class='form-group col col-sm-6'>
				<label for='tija'>Tija</label>
				<p><?=$tija?></p>

			</div>

			<!--Biela-->
			<div class='form-group col col-sm-6'>
				<label for='biela'>Biela</label>
				<p><?=$biela?></p>

			</div>

			<!--Sillin-->
			<div class='form-group col col-sm-6'>
				<label for='plato'>Sill&iacute;n</label>
				<p><?=$plato?></p>

			</div>

			<!--Plato-->
			<div class='form-group col col-sm-6'>
				<label for='plato'>Plato</label>
				<p><?=$plato?></p>

			</div>

			<!--Condicion-->
			<div class='form-group col col-sm-3'>
				<label for='condicion'>Condici&oacute;n</label>
				<p><?=$condicion?></p>

			</div>

			</form>

	</div>

</div>
