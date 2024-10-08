<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facturas extends CI_Controller {
	public function index()
	{
		redirect("facturas/nueva");
	}
	public function nueva()
	{
		$this->load->view('facturas/nueva');
	}
}
