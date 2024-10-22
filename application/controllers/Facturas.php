<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facturas extends CI_Controller {
	public $datos=array();
	public function __construct() {	
		parent::__construct();
		if(!$this->session->userdata('usuario_id')){
			$this->session->set_flashdata('OP','PROHIBIDO');
			redirect("auth/login");
		}
	
	}
	public function index()
	{
		redirect("facturas/nueva");
	}
	public function nueva()
	{
		$this->mostrar('facturas/nueva');
	}

	function mostrar($vista=""){
		$this->datos["menu"]=$this->load->view("menu",null,true);
		$this->load->view($vista,$this->datos);
	}
}
