<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Despensa extends CI_Controller {
    /* Construtor da Classe */
	public function __construct(){
		/* Carregando serviços necessários */
		parent::__construct();
		$this->json = file_get_contents('php://input');
        $this->obj = json_decode($this->json,true);
		$this->load->business("despensa_business");

	}

	public function cadastrar_despensa(){
		$form = $this->obj;
		$date_atual = date("Y-m-d");
		$form["criada_em"] = $date_atual;

		$this->load->model('despensa_model');
		$this->despensa_model->__construct($form);
		$this->despensa_business->cadastrar_despensa($this->despensa_model, $form["uid_usuario"]);
	}

	public function excluir_despensa(){
		$form = $this->obj;
		$this->despensa_business->excluir_despensa($form["id"]);
	}

	public function listar_despensa(){
		$form = $this->obj;
		$this->despensa_business->listar_despensa($form);
	}

	public function atualizar_despensa(){
		$dados = $this->obj;
		$this->despensa_business->atualizar_despensa($dados);
	}
}
