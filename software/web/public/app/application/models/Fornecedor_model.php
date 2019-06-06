<?php 

defined('BASEPATH') || exit('No direct script access allowed');

class Fornecedor_model extends CI_Model{
    public $id;
    public $descricao;
    public $uid_usuario;
    

    public function __construct($dados = NULL){
        $this->id = isset($dados["id"]) ? $dados["id"] : NULL;
        $this->descricao = isset($dados["descricao"]) ? $dados["descricao"] : NULL;
        $this->uid_usuario = isset($dados["uid_usuario"]) ? $dados["uid_usuario"] : NULL;

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

    public function get_uid_usuario(){
        return $this->uid_usuario;
    }

    public function set_uid_usuario($uid_usuario = NULL){
        $this->uid_usuario = $uid_usuario;
    }
}

