<?php

class Frequencia_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    public function buscaHorarios($dia){
        $this->db->select('ID_horarios,hora,dia');
        $this->db->from('horarios');
        $this->db->like('dia',$dia);
        return $query = $this->db->get();
    }
    
    public function lista_alunos($horario){
        $this->db->select('ID_ALUNO,nome');
        $this->db->from('cad_alunos');
        $this->db->where('horario',$horario);
        $this->db->order_by('nome');
        $query = $this->db->get();
        return $query->result();
    }
    
}

?>
