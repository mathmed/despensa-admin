<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Fornecedor_dao extends MY_Dao {

    /* Construtor da classe */
	public function __construct(){
        parent::__construct();     
    }

    public function cadastrar_fornecedor($dados){
        $this->db->insert("Fornecedor", $dados);
    }
    
    public function atualizar_fornecedor($dados){
        
    }

    public function get_fornecedor($filtros = null){
        if(!empty($filtros)){
            foreach($filtros as $filtro){
                $this->db->where($filtro["campo"], $filtro["valor"]);
            }
        }    
        $this->db->select("Fornecedor.id, Fornecedor.descricao");
        $this->db->from("Fornecedor");
        $this->db->join("Usuario","Usuario.uid = Fornecedor.uid_usuario");
        $resultado = $this->db->get()->result_object();
        return $resultado;
    }


    public function excluir_fornecedor($id){
        $this->db->where("id", $id);
        $this->db->delete("Fornecedor");
    }
}
