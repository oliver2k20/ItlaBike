<?php 
	plantilla::inicio();
?>

<div class="row" style="margin-top: 50px">
	<div class="col-xs-3" style="border: 1px solid #B4B4B4; background-color: #F8F8F8;">
		<h4 class="text-center" style="color: black;"><?php echo $user['nombre'] . ' ' . $user['apellido']?></h4>
		<img style="border-radius: 5px; padding: 10px" class="img-responsive" src="<?php echo base_url()?>Content/usuario/<?php echo $user['idUsuario']?>.jpg ?>"/>
		<p style="color: black;"><b>Email:   </b><?php echo $user['correo']?></p>
		<p style="color: black;"><b>Telefono:  </b><?php echo $user['telefono']?></p>
		<a href="<?php echo site_url("usuario/salir"); ?>" style="margin: 5px; border-radius: 4px" class="btn btn-danger logoutBtn btn-block">Cerrar sesión</a>
	</div>
	<div class="col-xs-8">
		
	</div>
</div>