<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fornecedor extends CI_Controller {

    /* Construtor da Classe */
	public function __construct(){
		/* Carregando serviços necessários */
		parent::__construct();
		$this->json = file_get_contents('php://input');
        $this->obj = json_decode($this->json,true);
    }
    
}
