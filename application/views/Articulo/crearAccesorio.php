<?php
	plantilla::inicio();

	$mensaje = "";
	$CI =& get_instance();
	
	if($_POST){
		$datos = $_POST;

		/*Cargamos el modelo para poder usarlo, esta variante con tres parametros nos permite
		usar la configuracion del archivo de configuracion de base de datos para conectar nuestro modelo con su tabla correspondiente*/
		$CI->load->model('accesorio', '', TRUE);
		$CI->accesorio->insertAccesorio();

		$CI->load->model('anuncio', '', TRUE);
		$CI->anuncio->insertAnuncio(3);
	}


?>
<div class='row segment-margin'>
	<div class='col col-sm-12' style='border: 2px solid #E7E7E7'>
		<form id='form' method='post'>
			<h1>Nueva publicaci&oacute;n de accesorio</h1>
			<!--Titulo-->
			<div class='form-group col-sm-12 text-center'>
				<h3 for='marca'>T&iacute;tulo</h3>
				<input class='form-control' name='titulo' id='titulo'>

			</div>

			<!--Marca-->
			<div class='form-group col-sm-12'>
				<label for='marca'>Marca</label>
				<input class='form-control' name='marca' id='marca'>

			</div>

			<!--Modelo-->
			<div class='form-group col-sm-12'>
				<label for='modelo'>Modelo</label>
				<input class='form-control' name='modelo' id='modelo'>

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
			<div class='form-group col-sm-12'>
				<label>Descripci&oacute;n</label>
				<textarea class='form-control' name='descripcion' id='descripcion'></textarea>
			</div>

			<!--Boton de envio de anuncio-->
			<div class='text-center'>
				<button class='btn btn-primary'>Crear anuncio</button>

			</div>



		</form>

	</div>


</div>