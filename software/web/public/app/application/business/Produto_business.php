<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Produto_business extends MY_Business {
    public function __construct(){
        parent::__construct();
        $this->load->dao("produto_dao");
    }

    public function cadastrar_produto($dados){
        $this->produto_dao->cadastrar_produto($dados);
    }
 
}

?>
