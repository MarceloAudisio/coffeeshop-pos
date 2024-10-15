<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		redirect('auth/login');
	}

	public function login(){
		$this->load->library('form_validation');
        $this->form_validation->set_rules('nombre','Usuario', 'trim|strtolower|required');
        $this->form_validation->set_rules('password','Contraseña','required');
        if( $this->form_validation->run() == FALSE ){
            $this->load->view('login');
        }else{
            $this->load->model('usuario_model');
            $usuario = set_value("usuario");
            $password = set_value("password");
            if( $uid = $this->usuario_model->check_login($usuario, $password) ){
                $u=$this->usuario_model->get_by_id($uid);
                    $this->session->set_userdata("usuario_id",$uid);
                    $this->session->set_userdata("nombre", $u["nombre"]);
                    $this->session->set_userdata("rol_id", $u["rol_id"]);
                    redirect('');
            }else{

                redirect('auth/login');
            }
        }
	}
	public function salir()
	{
		redirect('auth/index');
	}
}
