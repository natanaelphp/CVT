<?php

class Relatorios_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    public function listaAlunos(){
        
        $this->db->order_by('nome');
        $query = $this->db->get('cad_alunos');
        return $query->result();
    }

}

?>
