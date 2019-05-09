<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Despensa_business extends MY_Business{
    public function __construct(){
        parent::__construct();
        $this->load->dao("despensa_dao");
    }
 

    public function cadastrar_despensa($form = null, $id_usuario){

        if($form){
            if (empty($form->descricao)) {
                echo(json_encode("error"));
            }
            else{
                $exist = false;
                $descricoes = $this->despensa_dao->get_despensa([["campo"=>"descricao", "valor"=>$form->descricao]]);
                foreach($descricoes as $descricao){
                    if($descricao->descricao == $form->descricao)
                        $exist = true;
                }
                if(!$exist){
                    $this->despensa_dao->insert_despensa($form, $id_usuario);
                    echo(json_encode("sucesso"));
                }else {
                    echo(json_encode("error"));
                } 
            }  
        }
    }

    public function excluir_despensa($id){
        if($id){
            if($this->despensa_dao->get_despensa([["campo"=>"uid", "valor"=>$id]])){
                $this->despensa_dao->delete_despensa($id);
            }    
        }
    }

    public function listar_despensa(){
        $resultado = $this->despensa_dao->get_despensa();
        print_r($resultado);
    }
    

    public function atualizar_despensa($dados){
        if($dados){
            $exist = false;
            $descricoes = $this->despensa_dao->get_despensa([["campo"=>"descricao", "valor"=>$form->descricao]]);
            foreach($descricoes as $descricao){
                if($descricao->descricao == $dados->descricao)
                    $exist = true;
            }
            if(!$exist){
                $this->despensa_dao->update_despensa($dados);
                echo(json_encode("sucesso"));
            }else echo(json_encode("error"));
        }
    }
}


?>
