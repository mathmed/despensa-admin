<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Compra_model extends CI_Model{
    public $uid;
    public $data;
    public $fornecedor_uid;


    public function __construct($dados = NULL){
        $this->uid = isset($dados["uid"]) ? $dados["uid"]: NULL;
        $this->data = isset($dados["data"]) ? $dados["data"]: NULL;
        $this->fornecedor_uid = isset($dados["fornecedor_uid"]) ? $dados["fornecedor_uid"]: NULL;
    }

    public function get_uid(){
        return $this->uid;
    }

    public function set_uid($uid = NULL){
        $this->uid = $uid;
    }

    public function get_data(){
        return $this->data;
    }

    public function set_data($data = NULL){
        $this->data = $data;
    }

    public function get_fornecedor_uid(){
        return $this->fornecedor_uid;
    }

    public function set_fornecedor_uid($fornecedor_uid = NULL){
        $this->fornecedor_uid = $fornecedor_uid;
    }


}