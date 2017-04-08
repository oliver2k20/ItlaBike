<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index(){
		return $this->load->view('usuario/inicio');
	}

	public function contra(){
		return $this->load->view('usuario/contr-olv');
	}

	public function nosotros(){
		return $this->load->view('usuario/crear');
	}

	public function deseados(){
		return $this->load->view('usuario/deseados');
	}
}