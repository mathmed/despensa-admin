<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Produto_dao extends MY_Dao {

    /* Construtor da classe */
	public function __construct(){
        parent::__construct();     
    }

    public function cadastrar_produto($dados){
        $this->db->insert("Produto", $dados);
    }

    public function get_produto(){
        if(!empty($filtros)){
            foreach($filtros as $filtro){
                $this->db->where($filtro["campo"], $filtro["valor"]);
            }
        }    
        $this->db->select("*");
        $this->db->from("Produto");
        $this->db->join("Despensa","Despensa.uid = Produto.uid_despensa");
        $resultado = $this->db->get()->result_object();
        return $resultado;
    }

    public function excluir_produto($id){
        $this->db->where("uid", $id);
        $this->db->delete("Produto");
    }
}
