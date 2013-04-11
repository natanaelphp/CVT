<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }

    public function lista(){
        $this->db->order_by('nome');
        $query = $this->db->get('cursos');
        return $query->result();
    }
    
    public function novo($data){
        return $this->db->insert('cursos',$data);
    }
    
    public function busca($id){
        $this->db->where('ID_CURSO',$id);
        $query = $this->db->get('cursos');
        return $query->result();
    }
    
    public function atualiza($id,$data){
        $this->db->where('ID_CURSO',$id);
        $this->db->update('cursos',$data);
    }
    
    public function deleta($id){
        //Deleta todas as relações deste curso com os aluno
        $this->db->where('ID_CURSO',$id);
        $this->db->delete('aluno_curso');
        
        //Deleta o curso
        $this->db->where('ID_CURSO',$id);
        $this->db->delete('cursos');
    }
}

?>
