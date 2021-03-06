<?php 

defined('BASEPATH') || exit('No direct script access allowed');

class Produto_model extends CI_Model{
    public $id;
    public $nome;
    public $status_;
    public $preco;
    public $aberto_em;
    public $uid_despensa;
    public $uid_compra;
    public $uid_categoria; 
    public $validade;
    public $quantidade;
    public $unidade;

    public function __construct($dados = NULL){
        $this->id = isset($dados["id"]) ? $dados["id"] : NULL;
        $this->nome = isset($dados["nome"]) ? $dados["nome"] : NULL;
        $this->status_ = isset($dados["status_"]) ? $dados["status_"] : NULL;
        $this->preco = isset($dados["preco"]) ? $dados["preco"] : NULL;
        $this->aberto_em = isset($dados["aberto_em"]) ? $dados["aberto_em"] : NULL;
        $this->uid_despensa = isset($dados["uid_despensa"]) ? $dados["uid_despensa"] : NULL;
        $this->uid_compra = isset($dados["uid_compra"]) ? $dados["uid_compra"] : NULL;
        $this->uid_categoria = isset($dados["uid_categoria"]) ? $dados["uid_categoria"] : NULL;
        $this->validade = isset($dados["validade"]) ? $dados["validade"] : NULL;
        $this->quantidade = isset($dados["quantidade"]) ? $dados["quantidade"] : NULL;
        $this->unidade = isset($dados["unidade"]) ? $dados["unidade"] : NULL;


    }

    public function get_uid(){
        return $this->id;
    }

    public function set_uid($uid = NULL){
        $this->uid = $id;
    }

    public function get_nome(){
        return $this->nome;
    }

    public function set_nome($nome = NULL){
        $this->nome = $nome;
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

    public function get_uid_despensa(){
        return $this->uid_despensa;
    }

    public function set_uid_despensa($uid_despensa = NULL){
        $this->uid_despensa = $uid_despensa;
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

    public function get_validade(){
        return $this->validade;
    }

    public function set_validade($validade = NULL){
        $this->validade = $validade;
    }

    public function get_quantidade(){
        return $this->quantidade;
    }

    public function set_quantidade($quantidade = NULL){
        $this->quantidade = $quantidade;
    }

    public function get_unidade(){
        return $this->unidade;
    }

    public function set_unidade($unidade = NULL){
        $this->unidade = $unidade;
    }
}

