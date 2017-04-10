<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index(){
		$data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('usuario/inicio', $data);
        }else{
            redirect('home/contacto');
        }
	}

	public function login(){
		$data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email', 'Correo', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Contraseña', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email'=>$this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'status' => '1'
                );
                $checkLogin = $this->user->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    redirect('usuario/inicio/');
                }else{
                    $data['error_msg'] = 'Correo o contraseña equivocado.';
                }
            }
        }
        $this->load->view("home");
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