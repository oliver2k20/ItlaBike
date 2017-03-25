<?php

	class plantilla{

		static $instancia;

		static function inicio(){
			self::$instancia = new plantilla();
		}


		function __construct(){
	?>

	<?php
		}

		function __destruct(){
	?>

	<?php
		}
	}
