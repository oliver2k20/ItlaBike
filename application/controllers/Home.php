<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index(){
		return $this->load->view('home');
	}

	public function contacto(){
		//IMPORTANTE IR A PHP.INI FILE Y CAMBIAR ;extension=php_openssl.dll POR extension=php_openssl.dll


		//Reglas de validación
		$this->form_validation->set_rules('name', 'Nombre', 'trim|required|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'Correo', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Asunto', 'trim|required');
        $this->form_validation->set_rules('message', 'Mensaje', 'trim|required');
        $this->form_validation->set_rules('phone', 'Telefono', 'trim|required');

        //Validación en el formulario
        if ($this->form_validation->run() == FALSE)
        {
            //La validación falla
            $this->load->view('home/contacto');
        }
        else
        {
        	//Iniciar variables
        	$name = $this->input->post('name');
		    $from_email = $this->input->post('email');
		    $subject = $this->input->post('subject');
		    $phone = $this->input->post('phone');
		    $message = $this->input->post('message');

		    $to_email = 'itlabikeshop@gmail.com';

            //Configuración de la librería email
            $config['protocol'] = 'smtp';
		    $config['smtp_host'] = 'ssl://smtp.gmail.com';
		    $config['smtp_port'] = '465';
		    $config['smtp_user'] = 'itlabikeshop@gmail.com'; // Correo
		    $config['smtp_pass'] = 'OjoPragmatico'; // Contraseña
		    $config['mailtype'] = 'html';
		    $config['wordwrap'] = TRUE;
		    $config['charset'] = 'iso-8859-1';
		    $config['newline'] = "\r\n";

		    $this->email->initialize($config);

		    //Enviar Correo
		    $this->email->from($from_email, $name);
		    $this->email->to($to_email);
		    $this->email->subject($subject);
		    $this->email->message($message . " Mi telefono ". $phone);
		    if ($this->email->send())
		    {
		        // correo enviado
		        $this->session->set_flashdata('msg-correo','<div class="alert alert-success text-center">Tu correo ha sido enviado!</div>');
		        redirect('home/contacto');
		    }
		    else
		    {
		        //error

		        $this->session->set_flashdata('msg-correo','<div class="alert alert-danger text-center">Ha ocurrido un error</div>'. $this->email->print_debugger());
		        redirect('home/contacto');
		    }
		        }
		    }

	public function nosotros(){
		return $this->load->view('home/nosotros');
	}
	function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', 'El campo %s solo puede contener letras y espacios');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}