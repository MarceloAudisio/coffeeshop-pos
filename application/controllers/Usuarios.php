<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends MY_Controller {

    public function index(){
        $this->mostrar("usuarios/lista");
    }
}