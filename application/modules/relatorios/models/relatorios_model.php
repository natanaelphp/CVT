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

    public function empresas(){
        $this->db->select('empresa,E_D,count(*) as total');
        $this->db->from('cad_alunos');
        $this->db->group_by('empresa');
        
        $query = $this->db->get();
        return $query->result();
    }
    
    public function empresas2(){
        $this->db->select('empresa,E_D,count(*) as total');
        $this->db->from('cad_alunos');
        $this->db->group_by('empresa,E_D');
        
        $query = $this->db->get();
        return $query->result();
    }
    
    
    
}

?>
