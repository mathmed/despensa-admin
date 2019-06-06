<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Fornecedor extends CI_Controller {

    /* Construtor da Classe */
	public function __construct(){
		/* Carregando serviços necessários */
		parent::__construct();
		$this->json = file_get_contents('php://input');
		$this->obj = json_decode($this->json,true);
		$this->load->business("fornecedor_business");
	}
	
	public function cadastrar_fornecedor(){
		$dados = $this->obj;
		$this->load->model("fornecedor_model");
		$this->fornecedor_model->__construct($dados);
		$this->fornecedor_business->cadastrar_fornecedor($this->fornecedor_model);
	}
	
	public function excluir_fornecedor(){
		$dados = $this->obj;
		$this->fornecedor_business->excluir_fornecedor($dados["id"]);
	}

	public function listar_fornecedor(){
		$dados = $this->obj;
		$this->fornecedor_business->listar_fornecedor($dados["id_usuario"]);
	}

}
