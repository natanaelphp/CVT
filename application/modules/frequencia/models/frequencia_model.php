<?php

class Frequencia_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    public function buscaHorarios($dia){
        $this->db->select('ID_horarios,hora,dia');
        $this->db->from('horarios');
        $this->db->like('dia',$dia);
        $this->db->order_by('hora');
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
    
    public function verificaFaltas($aluno){
        $this->db->select('ID_ALUNO,contFaltas');
        $this->db->from('cad_alunos');
        $this->db->where('ID_ALUNO',$aluno);
        $query = $this->db->get();
        return $query->result();
    }
    
    // Atualiza o aluno($aluno) com x($faltas) faltas
    public function atualizaStatus($aluno,$faltas){
        $this->db->where('ID_ALUNO',$aluno);
        $data = array('contFaltas' => $faltas);
        $this->db->update('cad_alunos',$data);
    }
    
    public function insereFalta($aluno,$data){
        $this->db->where('ID_ALUNO',$aluno);
        $campos = array (
            'ID_ALUNO' => $aluno,
            'dataHora' => $data
        );
        $this->db->insert('faltas',$campos);
    }
    
    //Retira aluno do curso
    public function retiraCurso($aluno){
        $this->db->where('ID_ALUNO',$aluno);
        $campos = array('horario' => 0);
        $this->db->update('cad_alunos',$campos);
    }
    

}

?>
