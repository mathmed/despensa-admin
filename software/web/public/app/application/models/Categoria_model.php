<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_model{
    public $uid;
    public $descricao;
    public $validade_media;
    public $tipo_medida;

    public function __construct($dados = NULL){
        $this->uid = $dados["uid"] ? $dados["uid"]: NULL;
        $this->descricao = $dados["descricao"] ? $dados["descricao"]: NULL;
        $this->validade_media = $dados["validade_media"] ? $dados["validade_media"]: NULL;
        $this->uid = $dados["tipo_medida"] ? $dados["tipo_medida"]: NULL;

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

    public function set_validade_media($uid = NULL){
        $this->validade_media = $validade_media;
    }

    public function get_tipo_medida(){
        return $this->tipo_medida;
    }

    public function set_tipo_medida($tipo_medida = NULL){
        $this->tipo_medida = $tipo_medida;
    }


    

}