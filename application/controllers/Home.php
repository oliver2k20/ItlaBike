<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		return $this->load->view('home');
	}

	public function contacto(){
		return $this->load->view('home/contacto');
	}

	public function nosotros(){
		return $this->load->view('home/nosotros');
	}
}