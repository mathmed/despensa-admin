<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Despensa_dao extends MY_Dao {

    /* Construtor da classe */
	public function __construct(){
        parent::__construct();     
    }

    public function insert_despensa($form, $id_usuario){
        $this->db->insert("Despensa", $form);
        $data = array(
            "uid_despensa" => $this->db->insert_id(),
            "uid_usuario" => $id_usuario
        );
        $this->db->insert("usuario_tem_despensa", $data);
    }

    public function get_despensa($filtros = null){
        if(!empty($filtros)){
            foreach($filtros as $filtro){
                $this->db->where($filtro["campo"], $filtro["valor"]);
            }
        }    
        $this->db->select("*");
        $this->db->from("Despensa");
        $this->db->join("usuario_tem_despensa","Despensa.uid = usuario_tem_despensa.uid_despensa");
        $resultado = $this->db->get()->result_object();
        return $resultado;
    }


    public function delete_despensa($id){
        $this->db->where("uid", $id);
        $this->db->delete("Despensa");
    }

    public function update_despensa($dados){
        $this->db->set("descricao", $dados["decricao"]);
        $this->db->where("uid", $dados["uid"]);
        $this->db->update("Despensa");

    }
    
}
