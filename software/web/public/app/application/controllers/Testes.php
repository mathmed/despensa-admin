<?php
defined('BASEPATH') || exit('No direct script access allowed');


/* Arquivo para realizar testes */
class Testes extends CI_Controller {

    /* Construtor da Classe */
	public function __construct(){

		/* Carregando serviços necessários */
		parent::__construct();
		$this->json = file_get_contents('php://input');
        $this->obj = json_decode($this->json,true);
	}
	

    public function index(){}

	/* Criar funções de testes abaixo ... */

	
	public function testes_models(){

		/*Testes da classe Compra_model, fazer igual com as outras classes*/
		$this->load->model("compra_model");
		$this->compra_model->__construct(

			["uid"=>1, "data"=>"20/02/1998", "fornecedor_uid"=>1 ]
		);
		print_r($this->compra_model);
	}

	public function testes_business(){
		$this->load->business("despensa_business");
		$this->despensa_business->listar_despensa();
	}



}

