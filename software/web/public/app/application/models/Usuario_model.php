<?php 

defined('BASEPATH') || exit('No direct script access allowed');

class Usuario_model extends CI_Model{
    public $uid;
    public $nome;
    public $email;
    public $usuario;
    public $senha;


    public function __construct($dados = NULL){
        $this->uid = isset($dados["uid"]) ? $dados["uid"] : NULL;
        $this->nome = isset($dados["nome"]) ? $dados["nome"] : NULL;
        $this->email = isset($dados["email"]) ? $dados["email"] : NULL;
        $this->usuario = isset($dados["usuario"]) ? $dados["usuario"] : NULL;
        $this->senha = isset($dados["senha"]) ? $dados["senha"] : NULL;
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

    public function get_email(){
        return $this->email;
    }

    public function set_email($email = NULL){
        $this->email = $email;
    }

    public function get_usuario(){
        return $this->usuario;
    }

    public function set_usuario($usuario = NULL){
        $this->usuario = $usuario;
    }

    public function get_senha(){
        return $this->senha;
    }

    public function set_senha($senha = NULL){
        $this->senha = $senha;
    }
   
}

