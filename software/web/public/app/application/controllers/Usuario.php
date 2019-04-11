<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	/* Construtor da Classe */
	public function __construct(){

		/* Carregando serviços necessários */
		parent::__construct();
	}

	public function CadastrarUsuario()
	{
		$this->load->business("Usuario");
	}
}
