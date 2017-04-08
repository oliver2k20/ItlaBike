<!--Controlador para los articulos-->

<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class Articulo extends CI_Controller {
	public function crearBicicleta(){
		return $this->load->view('Articulo/crearBicicleta');

	}

}

