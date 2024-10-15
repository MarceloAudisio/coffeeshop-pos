<?php

class MY_Controller extends CI_Controller{
    public $datos=array();
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata("usuario_id")){
            redirect("auth/login");
        }
    }
    public function mostrar($vista=null){
        $this->load->view($vista,$this->datos);
    }
}