<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Categoria_model extends CI_Model{
    public $uid;
    public $descricao;
    public $validade_media;

    public function __construct($dados = NULL){
        $this->uid = isset($dados["uid"]) ? $dados["uid"]: NULL;
        $this->descricao = isset($dados["descricao"]) ? $dados["descricao"]: NULL;
        $this->validade_media = isset($dados["validade_media"]) ? $dados["validade_media"]: NULL;

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

    public function get_validade_media(){
        return $this->validade_media;
    }

    public function set_validade_media($validade_media = NULL){
        $this->validade_media = $validade_media;
    }



}