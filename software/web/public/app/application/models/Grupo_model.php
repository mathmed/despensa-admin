<?php 

defined('BASEPATH') || exit('No direct script access allowed');

class Grupo_model extends CI_Model{
    public $uid;
    public $nome;
    public $criado_em;

    public function __construct($dados = NULL){
        $this->uid = isset($dados["uid"]) ? $dados["uid"] : NULL;
        $this->nome = isset($dados["nome"]) ? $dados["nome"] : NULL;
        $this->criado_em = isset($dados["criado_em"]) ? $dados["criado_em"] : NULL;
    }

    public function get_uid(){
        return $this->uid;
    }

    public function set_uid($uid = NULL){
        $this->uid = $uid;
    }

    public function get_nome(){
        return $this->nome;
    }

    public function set_nome($nome = NULL){
        $this->nome = $nome;
    }

    public function get_criado_em(){
        return $this->criado_em;
    }

    public function set_criado_em($criado_em = NULL){
        $this->criado_em = $criado_em;
    }

}

