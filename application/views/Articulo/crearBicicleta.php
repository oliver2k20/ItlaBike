<!--Pagina de creacion de articulos-->

<?php 
	plantilla::inicio();

?>
<!--Div que contiene el formulario y provee los margenes-->
<div class="row segment-margin">
	<!--Cuadro exterior del formulario-->
	<div class="col col-xs-12" style="border: 2px solid #E7E7E7">
		<!--Formulario de creacion de bicicleta-->
		<form id='form' method='post'>
			<!--Titulo del fromulario-->
			<h1>Nueva publicacion de bicicleta</h1>
			<!--Marca-->
			<div class='form-group col col-sm-6'>
				<label for='marca'>Marca</label>
				<input class='form-control' name='marca' id='marca' />

			</div>

			<!--Modelo-->
			<div class='form-group col col-sm-6'>
				<label for='modelo'>Modelo</label>
				<input class='form-control' name='modelo' id='modelo' />

			</div>

			<!--Frenos-->
			<div class='form-group col col-sm-6'>
				<label for='frenos'>Frenos</label>
				<input class='form-control' name='frenos' id='frenos'>

			</div>

			<!--Piñon-->
			<div class='form-group col col-sm-6'>
				<label for='pinon'>Pi&ntilde;&oacute;n</label>
				<input class='form-control' name='pinon' id='pinon' />

			</div>

			<!--Cambios-->
			<div class='form-group col col-sm-6'>
				<label for='cambios'>Cambios</label>
				<input class='form-control' name='cambios' id='cambios' /> 

			</div>

			<!--Cadena-->
			<div class='form-group col col-sm-6'>
				<label for='cadena'>Cadena</label>
				<input class='form-control' name='cadena' id='cadena'>

			</div>

			<!--Pedales-->
			<div class='form-group col col-sm-6'>
				<label for='pedales'>Pedales</label>
				<input class='form-control' name='pedales' id='pedales' />

			</div>

			<!--Tijeras-->
			<div class='form-group col col-sm-6'>
				<label for='tijeras'>Tijeras</label>
				<input class='form-control' name='tijeras' id='tijeras'>

			</div>

			<!--Ruedas-->
			<div class='form-group col col-sm-6'>
				<label for='ruedas'>Ruedas</label>
				<input class='form-control' name='ruedas' id='ruedas'>

			</div>

			<!--Cuadro-->
			<div class='form-group col col-sm-6'>
				<label for='cuadro'>Tijeras</label>
				<input class='form-control' name='cuadro' id='cuadro'>

			</div>

			<!--Manubrio-->
			<div class='form-group col col-sm-6'>
				<label for='manubrio'>Manubrio</label>
				<input class='form-control' name='manubrio' id='manubrio'>

			</div>

			<!--Tija-->
			<div class='form-group col col-sm-6'>
				<label for='tija'>Tija</label>
				<input class='form-control' name='tija' id='tija'>

			</div>

			<!--Biela-->
			<div class='form-group col col-sm-6'>
				<label for='biela'>Biela</label>
				<input class='form-control' name='biela' id='biela'>

			</div>

			<!--Sillin-->
			<div class='form-group col col-sm-6'>
				<label for='plato'>Sill&iacute;n</label>
				<input class='form-control' name='sillin' id='sillin'>

			</div>

			<!--Plato-->
			<div class='form-group col col-sm-6'>
				<label for='plato'>Plato</label>
				<input class='form-control' name='plato' id='plato'>

			</div>

			<!--Condicion-->
			<div class='form-group col col-sm-3'>
				<label for='condicion'>Condici&oacute;n</label>
				<select name='condicion' form='form' class='form-control'>
					<!--Pongo los values en numeros para que haga la relacion en la base de datos-->
					<option value='1'>Nuevo</option>
					<option value='2'>Usado</option>
				</select>

			</div>

			<!--Estilo-->
			<div class='form-group col col-sm-3'>
				<label for='estilo'>Estilo</label>
				<select class='form-control' name='estilo' id='estilo' form='form'>
					<option value='1'>Carretera</option>
					<option value='2'>De monta&ntilde;a</option>
					<option value='3'>BMX</option>
					<option value='4'>Urbana</option>
					<option value='5'>Playera</option>
					<option value='6'>Infantil</option>
					<option value='7'>Otra</option>

				</select>

			</div>

			<!--Precio-->
			<div class='form-group col col-sm-6'>
				<label for='precio'>Precio</label>
				<input class='form-control' type='number' id='precio' name='precio'>

			</div>

			<!--Color-->
			<div class='form-group col col-sm-3'>
				<label for='color'>Color</label>
				<select class='form-control' name='color' id='color' form='form'>
					<option value='1'>Negro</option>
					<option value='2'>Marr&oacute;n</option>
					<option value='3'>Gris</option>
					<option value='4'>Blanco</option>
					<option value='5'>Azul</option>
					<option value='6'>Verde</option>
					<option value='7'>Amarillo</option>
					<option value='8'>Naranja</option>
					<option value='9'>Rojo</option>
					<option value='10'>Rosado</option>
					<option value='11'>P&uacute;rpura</option>
					<option value='12'>Otro</option>

				</select>

			</div>

			<!--Provincia-->
			<div class='form-group col col-sm-3'>
				<label for='provincia'>Provincia</label>
				<select class='form-control' name='provincia' id='provincia'>
					<option value='1'>Santo Domingo</option>

				</select>

			</div>

			<!--Descripcion-->
			<div class='form-group'>
				<label>Descripci&oacute;n</label>
				<textarea class='form-control' name='descripcion' id='descripcion'></textarea>
			</div>



			<!--Boton para enviar informacion-->
			<div class='text-center'>
				<button type='submit' class='btn btn-primary'>Crear publicaci&oacute;n</button>

			</div>


		</form>

	</div>

</div>