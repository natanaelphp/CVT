<?php

class Horarios_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }

    public function lista(){
        $query = $this->db->get('horarios');
        return $query->result();
    }
    
    public function novo($data){
        return $this->db->insert('horarios',$data);
    }
    
    public function busca($id){
        $this->db->where('ID_horarios',$id);
        $query = $this->db->get('horarios');
        return $query->result();
    }
    
    public function atualiza($id,$data){
        $this->db->where('ID_horarios',$id);
        $this->db->update('horarios',$data);
    }
    
    public function deleta($id){
        $this->db->where('ID_horarios',$id);
        $this->db->delete('horarios');
    }
}

?>
