<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frequencia extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
        $this->load->model('frequencia_model');
    }
    
    public function index(){

        $dias_semana = array(
            'segunda',
            'terça',
            'quarta',
            'quinta',
            'sexta',
            'sábado'
        );

        $max = 0;

        foreach ($dias_semana as $dia):
            $horarios = $this->frequencia_model->buscaHorarios($dia);
            if ($horarios->num_rows() > $max)
                $max = $horarios->num_rows();
            $dados['horarios'][$dia] =  $horarios->result();
        endforeach;

        $dados['max'] = $max; 

        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('frequencia_geral',$dados);
        $this->load->view('footer');
    }
    
    public function horario($id){
        $this->load->helper('data');
        $this->load->helper('form');
        
        $dados['alunos'] = $this->frequencia_model->lista_alunos($id);
        
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('horario',$dados);
        $this->load->view('footer');
    
    }
        
}

?>
