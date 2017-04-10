<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
    }

	public function index(){
		$data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('idUsuario'=>$this->session->userdata('userId')));
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
                    'correo' => $this->input->post('email'),
                    'contrasena' => md5($this->input->post('password'))
                );
                $checkLogin = $this->user->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['idUsuario']);
                    $this->session->set_userdata('tipo',$checkLogin['tipo']);
                    redirect('usuario/index/');
                }else{
                    $data['error_msg'] = 'Correo o contraseña equivocado.';
                }
            }
        }
        $this->load->view("home", $data);
	}

    public function crear(){
        $data = array();
        $userData = array();
        if($this->input->post('regisSubmit')){
            $this->form_validation->set_rules('username', 'Nombre de usuario', 'required|max_length[50]');
            $this->form_validation->set_rules('name', 'Nombre', 'required|max_length[50]');
            $this->form_validation->set_rules('lastname', 'Apellido', 'required|max_length[10]');
            $this->form_validation->set_rules('email', 'Correo', 'required|valid_email|callback_chequear_email');
            $this->form_validation->set_rules('password', 'Contraseña', 'required');
            $this->form_validation->set_rules('conf_password', 'Confirmar Contraseña', 'required|matches[password]');

            $userData = array(
                'nombreUsuario' => strip_tags($this->input->post('username')),
                'nombre' => strip_tags($this->input->post('name')),
                'apellido' => strip_tags($this->input->post('lastname')),
                'contrasena' => md5($this->input->post('password')),
                'correo' => strip_tags($this->input->post('email')),
                'telefono' => strip_tags($this->input->post('phone'))
            );
                

            if($this->form_validation->run() == true){
                $insert = $this->user->insert($userData);
                $foto = $_FILES['imagen'];
                if($foto['error'] == 0 ){
                $tmp = "Content/usuario/{$insert}.jpg";
                move_uploaded_file($foto['tmp_name'], $tmp);
                }
                if($insert){
                    $this->session->set_userdata('success_msg', 'Registro completo. Inicia sesión.');
                    redirect('home');
                }else{
                    $data['error_msg'] = 'Ocurrió un error intente de nuevo.';
                }
            }
        }
        $data['user'] = $userData;
        return $this->load->view('usuario/crear', $data);
    }

    public function salir(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('tipo');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('home');
    }

    //Chequear si el correo existe
     public function chequear_email($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('correo'=>$str);
        $checkEmail = $this->user->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'El correo ya existe.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
	public function contra(){
		return $this->load->view('usuario/contr-olv');
	}

	public function deseados(){
		return $this->load->view('usuario/deseados');
	}
}