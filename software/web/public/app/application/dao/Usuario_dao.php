<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Usuario_dao extends MY_Dao {

    /* Construtor da classe */
	public function __construct(){
        parent::__construct();     
    }

    public function cadastrar_usuario($dados){
        $this->db->insert("Usuario", $dados);
    }

    public function excluir_usuario($id){
        $this->db->where("uid", $id);
        $this->db->delete("Usuario");
    }

    public function listar_usuario($filtros = null){
        if(!empty($filtros)){
            foreach($filtros as $filtro){
                $this->db->where($filtro["campo"], $filtro["valor"]);
            }
        }    
        $this->db->select("*");
        $this->db->from("Usuario");
        $resultado = $this->db->get()->result_object();
        return $resultado;
    }

    public function atualizar_usuario($filtros){
        if(!empty($filtros)){
            foreach($filtros as $filtro){
                $this->db->where($filtro["campo"], $filtro["valor"]);
            }
            foreach($filtros as $filtro){
                $this->db->set($filtro["campo"], $filtro["valor"]);
            }
        }
        $this->db->update("Usuario");
    }
}
