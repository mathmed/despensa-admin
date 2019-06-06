<?php
defined('BASEPATH') || exit('No direct script access allowed');



class Produto extends CI_Controller {

    /* Construtor da Classe */
	public function __construct(){
		/* Carregando serviços necessários */
		parent::__construct();
		$this->json = file_get_contents('php://input');
		$this->obj = json_decode($this->json,true);
		$this->load->business("produto_business");
	}

	public function cadastrar_produto(){
		$dados = $this->obj;
		$this->load->model("produto_model");
		$this->produto_model->__construct($dados);
		$this->produto_business->cadastrar_produto($this->produto_model);
	}

	public function excluir_produto(){
		$dados = $this->obj;
		$this->produto_business->excluir_produto($dados["id"]);
	}

	public function listar_produto(){
		$dados = $this->obj;
		$this->produto_business->listar_produto($dados["id_despensa"]);
	}
	

}
