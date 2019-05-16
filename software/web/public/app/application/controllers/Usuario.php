<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Usuario extends CI_Controller {

	/* Construtor da Classe */
	public function __construct(){
		/* Carregando serviços necessários */
		parent::__construct();
		$this->json = file_get_contents('php://input');
		$this->obj = json_decode($this->json,true);
		$this->load->business("usuario_business");
	}

	public function cadastrar_usuario(){
		$form = $this->obj;
		$confirma_senha = $form["confirmacao"];
		$this->load->model("usuario_model");
		$this->usuario_model->__construct($form);
		$this->usuario_business->cadastrar_usuario($this->usuario_model, $confirma_senha);
	}

	public function excluir_usuario(){
		$form = $this->obj;
		$this->usuario_business->excluir_usuario($form["id"]);
	}

	public function listar_usuario(){
		$this->usuario_business->listar_usuario();
	}

	public function atualizar_usuario(){
		$dados = $this->obj;
		$this->usuario_business->atualizar_usuario($dados);
	}

	public function login(){
		$form = $this->obj;
		$this->usuario_business->login($form);
	}


}
