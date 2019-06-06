<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Fornecedor_business extends MY_Business {
    public function __construct(){
        parent::__construct();
        $this->load->dao("fornecedor_dao");

    }

    public function cadastrar_fornecedor($dados){
        $this->fornecedor_dao->cadastrar_fornecedor($dados);
    }

    public function listar_fornecedor($id_usuario){
        $resultado = $this->fornecedor_dao->get_fornecedor([["campo"=>"uid_usuario", "valor"=>$id_usuario]]);
        print_r($resultado);
    }

    public function excluir_fornecedor($id){
        if($id){
            if($this->fornecedor_dao->get_fornecedor([["campo"=>"id", "valor"=>$id]]))
                $this->fornecedor_dao->excluir_fornecedor($id);
        }    
    }

}

?>
