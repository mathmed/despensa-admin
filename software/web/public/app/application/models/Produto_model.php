<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Produto_model extends CI_controller{
    public $uid;
    public $nome;
    public $status_;
    public $preco;
    public $aberto_em;
    public $uid_dispensa;
    public $uid_compra;
    public $uid_categoria; 

    public function __constructor($dados = NULL){
        $this->uid = $dados["uid"] ? $dados["uid"] : NULL;
        $this->nome = $dados["nome"] ? $dados["nome"] : NULL;
        $this->status_ = $dados["status_"] ? $dados["status_"] : NULL;
        $this->preco = $dados["preco"] ? $dados["preco"] : NULL;
        $this->aberto_em = $dados["aberto_em"] ? $dados["aberto_em"] : NULL;
        $this->uid_dispensa = $dados["uid_dispensa"] ? $dados["uid_dispensa"] : NULL;
        $this->uid_compra = $dados["uid_compra"] ? $dados["uid_compra"] : NULL;
        $this->uid_categoria = $dados["uid_categoria"] ? $dados["uid_categoria"] : NULL;

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
        $this->nome = $descricao;
    }

    public function get_status_(){
        return $this->status_;
    }

    public function set_status_($status_ = NULL){
        $this->status_ = $status_;
    }

    public function get_preco(){
        return $this->preco;
    }

    public function set_preco($preco = NULL){
        $this->preco = $preco;
    }

    public function get_aberto_em(){
        return $this->aberto_em;
    }

    public function set_aberto_em($aberto_em = NULL){
        $this->aberto_em = $aberto_em;
    }

    public function get_uid_dispensa(){
        return $this->uid_dispensa;
    }

    public function set_uid_dispensa($uid_dispensa = NULL){
        $this->uid_dispensa = $uid_dispensa;
    }

    public function get_uid_compra(){
        return $this->uid_compra;
    }

    public function set_uid_compra($uid_compra = NULL){
        $this->uid_compra = $uid_compra;
    }

    public function get_uid_categoria(){
        return $this->uid_categoria;
    }

    public function set_uid_categoria($uid_categoria = NULL){
        $this->uid_categoria = $uid_categoria;
    }
}

