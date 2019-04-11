<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Fornecedor_model extends CI_controller{
    public $uid;
    public $descricao;
    

    public function __construct($dados = NULL){
        $this->uid = $dados["uid"] ? $dados["uid"] : NULL;
        $this->descricao = $dados["descricao"] ? $dados["descricao"] : NULL;
        
    }

    public function get_uid(){
        return $this->uid;
    }

    public function set_uid($uid = NULL){
        $this->uid = $uid;
    }

    public function get_descricao(){
        return $this->descricao;
    }

    public function set_descricao($descricao = NULL){
        $this->descricao = $descricao;
    }
}

