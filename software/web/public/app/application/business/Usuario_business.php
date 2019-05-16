<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Usuario_business extends MY_Business {
    private $salt = "bsiufrn";

    public function __construct(){
        parent::__construct();
        $this->load->dao("usuario_dao");
        
    }
 

    public function valida_email($email){
        if (preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email)) {
            return true;
        } else {
            return false;
        }
    }

    public function cadastrar_usuario($model_usuario, $confirma_senha){
        if($model_usuario){
            $email = $this->valida_email($model_usuario->email);
            if($email){
                if($this->usuario_dao->listar_usuario([["campo"=>"email", "valor"=>$model_usuario->email]]))
                    echo(json_encode("Email já cadastrado"));
                else if($this->usuario_dao->listar_usuario([["campo"=>"usuario", "valor"=>$model_usuario->usuario]]))
                    echo(json_encode("Usuário já cadastrado"));
                else if($model_usuario->senha < 6)
                    echo(json_encode("Senha curta"));
                else if($model_usuario->senha != $confirma_senha)
                    echo (json_encode("Senha diferente"));
                else{    
                    $this->usuario_model->set_senha(md5($model_usuario->get_senha()));
                    $this->usuario_dao->cadastrar_usuario($model_usuario);
                    echo (json_encode("Sucesso"));
                }
            }else 
                echo(json_encode("Email inválido"));
        }
    }

    public function excluir_usuario($id){
        if($id){
            if($this->usuario_dao->listar_usuario([["campo"=>"uid", "valor"=>$id]]))
                $this->usuario_dao->excluir_usuario($id);
        }
    }

    public function listar_usuario(){
        $resultado = $this->usuario_dao->listar_usuario();
    }

    public function atualizar_usuario($dados){
        $this->usuario_dao->atualizar_usuario($dados);
    }

    public function login($dados){
        if($dados){
            $user = $this->usuario_dao->listar_usuario([["campo"=>"usuario", "valor"=>$dados["usuario"]]]);

            if(isset($user[0])) $user = $user[0];

            if($user != null && ($user->senha == md5($dados["senha"]))){
                $user->token = md5($user->senha.$user->usuario.$this->salt);
                echo(json_encode($user));
            }else echo(json_encode("error"));
        }else echo(json_encode("error"));
    }

    
}

?>
