<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Despensa_model extends CI_Model{
    public $uid;
    public $descricao;
    public $criada_em;

    public function __construct($dados = NULL){
        $this->uid = isset($dados["uid"]) ? $dados["uid"] : NULL;
        $this->descricao = isset($dados["descricao"]) ? $dados["descricao"] : NULL;
        $this->criada_em = isset($dados["criada_em"]) ? $dados["criada_em"] : NULL;
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

    public function get_criada_em(){
        return $this->criada_em;
    }

    public function set_criada_em($criada_em = NULL){
        $this->criada_em = $criada_em;
    }

}

