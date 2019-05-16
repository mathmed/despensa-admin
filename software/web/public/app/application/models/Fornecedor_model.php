<?php 

defined('BASEPATH') || exit('No direct script access allowed');

class Fornecedor_model extends CI_Model{
    public $uid;
    public $descricao;
    

    public function __construct($dados = NULL){
        $this->uid = isset($dados["uid"]) ? $dados["uid"] : NULL;
        $this->descricao = isset($dados["descricao"]) ? $dados["descricao"] : NULL;
        
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

