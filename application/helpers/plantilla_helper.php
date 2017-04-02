<?php

	class plantilla{

		static $instancia;

		static function inicio(){
			self::$instancia = new plantilla();
		}


		function __construct(){
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>ItlaBike</title>
			<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			
			<script src="https://use.fontawesome.com/4d3637b14b.js"></script>
			<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
			<!--Animate css-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
			<!--End of anumate css-->
			<!--bxSlider-->
				<link type="text/css" href="<?php  echo base_url('Content')?>/css/jquery.bxslider.min.css" rel="stylesheet">
				<script type="text/javascript" src="<?php  echo base_url('Content')?>/js/jquery.bxslider.min.js"></script>
			
			<!---->

			<link type="text/css" href="<?php  echo base_url('Content')?>/css/style.css" rel="stylesheet">
			<script type="text/javascript" src="<?php  echo base_url('Content')?>/js/script2.js"></script>
			
			
			<style>
				
			</style>
		</head>
		<body>
			<div class="container">

				<nav class="navbar navbar-default">

			        <div class="nav nav-justified navbar-nav">
			        	<a class="navbar-brand" href="#" ><img  style="margin-bottom:10px" width="100" height="25" /></a>
			        	<ul class="nav navbar-nav">
			        		<li><a href="#"><b>Inicio</b></a></li>
			        		<li><a href="#"><b>Nosotros</b></a></li>
			        		<li class="dropdown">
			        			<a href="#" data-toggle="dropdown" class="dropdown-toggle"><b>Categorías</b><span class="caret"></span></a>
			        			<ul class="dropdown-menu">
								    <li><a href="#"><b>Bicicletas</b></a></li>
								    <li><a href="#">Carretera</a></li>
								    <li><a href="#">BMX</a></li>
								    <li><a href="#">Urbana</a></li>
								    <li><a href="#">Playera</a></li>
								    <li><a href="#">Infantil</a></li>
								    <li><a href="#">Otra</a></li>
								    <li class="divider"></li>
								    <li><a href="#"><b>Partes</b></a></li>
								    <li class="divider"></li>
								    <li><a href="#"><b>Accesorios</b></a></li>
								</ul>
			        		</li>
			        	</ul>
			        	<ul class="nav navbar-nav navbar-right">
			        		<!--Dropdown login-->
			        		<li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><b>Cuenta</b></a>
								<ul id="login-dp" class="dropdown-menu">
									<li>
										 <div class="row">
												<div class="col-md-12">
													Inicia con
													<div class="social-buttons">
														<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
														<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
													</div>
					                                <p>o ingresa tus datos</p>
													 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
															<div class="form-group">
																 <label class="sr-only" for="exampleInputEmail2">Email address</label>
																 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Correo" required>
															</div>
															<div class="form-group">
																 <label class="sr-only" for="exampleInputPassword2">Password</label>
																 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Contraseña" required>
					                                             <div class="help-block text-right"><a href="">Olvidaste la contraseña ?</a></div>
															</div>
															<div class="form-group">
																 <button type="submit" class="btn btn-primary btn-block">Ingresa</button>
															</div>
													 </form>
												</div>
												<div class="bottom text-center">
													Eres nuevo ? <a href="#"><b>Únete</b></a>
												</div>
										 </div>
									</li>
								</ul>
					        </li>
					     
					      <li class="tada-hover" style="padding-right: 10px"><a href="#"><span class="glyphicon glyphicon-star"></span>Deseados</a></li>
					    </ul>
			 			
			            <form class="navbar-form navbar-search navbar-right" role="search">
			                <div class="input-group">
			                    <input type="text" class="form-control">
			                
			                    <div class="input-group-btn">
			                        <button type="button" class="btn btn-search">
			                            <span class="glyphicon glyphicon-search"></span>
			                            <span class="label-icon">Buscar</span>
			                        </button>
			                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
			                            <span class="caret"></span>
			                        </button>
			                        <ul class="dropdown-menu pull-right" role="menu">
			                            <li class="pulse-hover">
			                                <a href="#">
			                                	<span class="glyphicon glyphicon-search"></span>
			                                    <span>Bicicletas</span>
			                                </a>
			                            </li>
			                            <li class="pulse-hover">
			                                <a href="#">
			                                <span class="glyphicon glyphicon-search"></span>
			                                <span>Accesorios</span>
			                                </a>
			                            </li>
			                            <li class="pulse-hover">
			                            	<a href="#">
			                            	<span class="glyphicon glyphicon-search"></span>
			                            	<span>Partes</span>
			                            	</a>
			                            </li>
			                        </ul>
			                    </div>
			                </div>  
			            </form>   
			         
			        </div>
			    </nav>
			
		
	<?php
		}

		function __destruct(){
	?>
			
			</div>
			<div class="container-fluid">
				<footer class="zigzag jagged-top" style="margin-top: 20px;">
				<div class="row">
					<div>
						<p>
					</div>
				</div>
			</footer>
			</div>
		</body>
		</html>
	<?php
		}
	}
