<?php 
	plantilla::inicio();
?>

<div class="row segment-margin">
	<div class="col-xs-12">
		<div class="row" style="border: 1px solid #B4B4B4;">
			<div class="col-xs-12" >
				<h2 class="text-center">Regístrate</h2>
			</div>
			<div class="col-xs-10 col-xs-offset-1">
				<form enctype="multipart/form-data" action="" method="post">
					<div class="form-group input-group">
						<label class="input-group-addon">Foto: </label>
						<input required type="file" name="imagen" class="form-control"></input> 
					</div>
					<div class="form-group">
						<label for="username">Nombre de usuario</label>
			            <input type="text" class="form-control" name="username" placeholder="Nombre de usuario" required="" value="<?php echo !empty($user['nombreUsuario'])?$user['nombreUsuario']:''; ?>">
			            <span class="text-danger"><?php echo form_error('username'); ?></span>
			        </div>
					<div class="form-group">
						<label for="name">Nombre</label>
			            <input type="text" class="form-control" name="name" placeholder="Nombre" required="" value="<?php echo !empty($user['nombre'])?$user['nombre']:''; ?>">
			             <span class="text-danger"><?php echo form_error('name'); ?></span>
			        </div>
			        <div class="form-group">
						<label for="lastname">Apellido</label>
			            <input type="text" class="form-control" name="lastname" placeholder="Apellido" required="" value="<?php echo !empty($user['apellido'])?$user['apellido']:''; ?>">
			             <span class="text-danger"><?php echo form_error('lastname'); ?></span>
			        </div>
			        <div class="form-group">
			        	<label for="email">Correo</label>
			            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['correo'])?$user['correo']:''; ?>">
			            <span class="text-danger"><?php echo form_error('email'); ?></span>
			        </div>
			        <div class="form-group">
			        	<label for="phone">Telefono</label>
			            <input type="text" class="form-control" name="phone" placeholder="Telefono" value="<?php echo !empty($user['telefono'])?$user['telefono']:''; ?>">
			        </div>
			        <div class="form-group">
			          <label for="phone">Contraseña</label>
			          <input type="password" class="form-control" name="password" placeholder="Contraseña" required="">
			          <span class="text-danger"><?php echo form_error('password'); ?></span>
			        </div>
			        <div class="form-group">
			          <label for="phone">Confirmar contraseña</label>
			          <input type="password" class="form-control" name="conf_password" placeholder="Confirmar contraseña" required="">
			          <span class="text-danger"><?php echo form_error('conf_password'); ?></span>
			        </div>
			        <div class="form-group">
		              <button type="submit" name="regisSubmit" class="btn btn-primary" value="send"><i class="fa fa-check"></i> Registrarse</button>
		            </div>
		           	<span class="text-danger"><?php if(!empty($error_msg)){echo $error_msg ;} ?></span>
			</div>
		</div>
		
	</div>
</div>