<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Despensa_business extends MY_Business{
    public function __construct(){
        parent::__construct();
        $this->load->dao("despensa_dao");
    }
 

    public function cadastrar_despensa($id_usuario, $form = null){

        if($form){
            if (empty($form->descricao)) {
                echo json_encode("error");
            }
            else{
                $exist = false;
                $descricoes = $this->despensa_dao->get_despensa([["campo"=>"descricao", "valor"=>$form->descricao], ["campo" => "usuario_tem_despensa.uid_usuario", "valor" => $id_usuario]]);
                foreach($descricoes as $descricao){
                    if($descricao->descricao == $form->descricao)
                        $exist = true;
                }
                if(!$exist){
                    $this->despensa_dao->insert_despensa($form, $id_usuario);
                    echo json_encode("sucesso");
                }else {
                    echo json_encode("error");
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

    public function listar_despensa($form){
        $resultado = $this->despensa_dao->get_despensa([["campo" => "usuario_tem_despensa.uid_usuario", "valor" => $form["uid_usuario"]]]);
        echo json_encode($resultado);
    }
    

    public function atualizar_despensa($dados){
        if($dados){
            $exist = false;
            $descricoes = $this->despensa_dao->get_despensa([["campo"=>"descricao", "valor"=>$dados->descricao]]);
            foreach($descricoes as $descricao){
                if($descricao->descricao == $dados->descricao){
                    $exist = true;
                }
            }
            if(!$exist){
                $this->despensa_dao->update_despensa($dados);
                echo json_encode("sucesso");
            }else echo json_encode("error");
        }
    }
}


?>
