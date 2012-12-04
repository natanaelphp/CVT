<?php

class Operacoes_model extends CI_model{
    function __construct() {
        parent::__construct();
    }
    
    public function consulta_horario($aluno){
        $this->db->select('horario');
        $this->db->where('ID_ALUNO',$aluno);
        $query = $this->db->get('cad_alunos');
        return $query->result();
    }
    
    public function consulta_faltas($aluno){
        $this->db->select('dataHora');
        $this->db->where('ID_ALUNO',$aluno);
        $query = $this->db->get('faltas');
        return $query->result();
    }
    
    public function consulta_cursos($aluno){
        $this->db->select('ID_ALUNO,cursos.ID_CURSO,nome,situacao');
        $this->db->from('aluno_curso');
        $this->db->join('cursos','aluno_curso.ID_CURSO = cursos.ID_CURSO');
        $this->db->where('ID_ALUNO',$aluno);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function insere_relacao_curso($dados){
        $this->db->insert('aluno_curso',$dados);
    }


    public function atualiza_relacao_curso($id_aluno,$id_curso,$situacao){
        $this->db->where('ID_ALUNO',$id_aluno);
        $this->db->where('ID_CURSO',$id_curso);
        $this->db->limit('1');
        $this->db->update('aluno_curso',$situacao);
    } 
    public function deleta_relacao_curso($id_aluno,$id_curso){
        $this->db->where('ID_ALUNO',$id_aluno);
        $this->db->where('ID_CURSO',$id_curso);
        $this->db->limit('1');
        $this->db->delete('aluno_curso');
    }
            
    
}


?>
