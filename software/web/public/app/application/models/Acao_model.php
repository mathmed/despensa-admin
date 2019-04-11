<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Acao_model extends CI_Model {

    public $uid;
    public $acao;
    public $data_acao;
    public $uid_grupo;
    public $uid_usuario;


    public function __constructor($dados = NULL){

        $this->uid = $dados["uid"] ? $dados["uid"] : NULL;
        $this->acao = $dados["acao"] ? $dados["acao"] : NULL;
        $this->data_acao = $dados["data_acao"] ? $dados["data_acao"] : NULL;
        $this->uid_grupo = $dados["uid_grupo"] ? $dados["uid_grupo"] : NULL;
        $this->uid_usuario = $dados["uid_usuario"] ? $dados["uid_usuario"] : NULL;
    }


    public function get_uid(){
        return $this->uid;
    }

    public function get_acao(){
        return $this->acao;
    }
    

    public function get_data_acao(){
        return $this->data_acao;
    }
    

    public function get_uid_grupo(){
        return $this->uid_grupo;
    }
    

    public function get_uid_usuario(){
        return $this->uid_usuario;
    }
    
    public function set_uid($uid = NULL){
        $this->uid = $uid;
    }

    public function set_acao($acao = NULL){
        $this->acao = $acao;        
    }
    

    public function set_data_acao($data_acao = NULL){
        $this->data_acao = $data_acao;        
    }
    

    public function set_uid_grupo($uid_grupo = NULL){
        $this->uid_grupo = $uid_grupo;
    }
    

    public function set_uid_usuario($uid_grupo = NULL){
        $this->uid_grupo = $uid_grupo;

    }
}

?>