<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Produto_business extends MY_Business {
    public function __construct(){
        parent::__construct();
        $this->load->dao("produto_dao");
    }

    public function cadastrar_produto($dados){
        $this->produto_dao->cadastrar_produto($dados);
        echo json_encode("sucesso");
    }

    public function excluir_produto($id){
        if($id){
            if($this->produto_dao->get_produto([["campo"=>"id", "valor"=>$id]]))
                $this->produto_dao->excluir_produto($id);
        }
    }

    public function listar_produto($id_despensa){
        $resultado = $this->produto_dao->get_produto([["campo"=>"uid_despensa", "valor"=>$id_despensa]]);
        echo json_encode($resultado);
    }

}

?>
