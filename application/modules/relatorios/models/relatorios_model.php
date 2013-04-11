<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relatorios_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    public function listaAlunos(){
        
        $this->db->order_by('nome');
        $query = $this->db->get('alunos');
        return $query->result();
    }

    public function empresas(){
        $this->db->select('empresa,E_D,count(*) as total');
        $this->db->from('alunos');
        $this->db->group_by('empresa');
        
        $query = $this->db->get();
        return $query->result();
    }
    
    public function empresas2(){
        $this->db->select('empresa,E_D,count(*) as total');
        $this->db->from('alunos');
        $this->db->group_by('empresa,E_D');
        
        $query = $this->db->get();
        return $query->result();
    }
    
    
    
}

?>
