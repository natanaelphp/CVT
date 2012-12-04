<?php

class Alunos_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    public function cadastrar($dados){
        $this->db->insert('cad_alunos',$dados);
        //Retorna o ID do aluno inserido
        return $this->db->insert_id();
    }
    
    public function busca($aluno){
        $this->db->select('ID_ALUNO,nome');
        $this->db->like('nome',$aluno);
        $this->db->order_by('nome');
        $query = $this->db->get('cad_alunos');
        return $query->result();
    }
    
    public function consulta($id_aluno){
        $this->db->where('ID_ALUNO',$id_aluno);
        $this->db->join('horarios','cad_alunos.horario = horarios.ID_horarios','left');
        $query = $this->db->get('cad_alunos');
        return $query->result();
    }
    
    public function atualiza($id_aluno,$campos){
        $this->db->where('ID_ALUNO',$id_aluno);
        $this->db->update('cad_alunos',$campos);
    }
    
    public function deleta($id_aluno){
        //Deleta todas as faltas relacionadas ao aluno
        $this->db->where('ID_ALUNO',$id_aluno);
        $query = $this->db->delete('faltas');
        
        //Deleta todos os cursos relacionados ao aluno
        $this->db->where('ID_ALUNO',$id_aluno);
        $query = $this->db->delete('aluno_curso');
        
        $this->db->where('ID_ALUNO',$id_aluno);
        $query = $this->db->delete('cad_alunos');
        return $query;
    }
    
}

?>
