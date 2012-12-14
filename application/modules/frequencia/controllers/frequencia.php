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
        
        $this->load->library('session');
        $dados['msg'] = $this->session->flashdata('msg');

        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('frequencia_geral',$dados);
        $this->load->view('footer');
    }
    
    public function horario($id){
        $this->load->helper('data');
        $this->load->helper('form');
        
        $dados['alunos'] = $this->frequencia_model->lista_alunos($id);
        $dados['horario'] = $id;
        
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('horario',$dados);
        $this->load->view('footer');    
    }
    
    public function processaFaltas(){
        
        $this->load->helper('data');
        
        if ($this->input->post()){
            $i = 0;
            foreach ($this->input->post() as $key => $id_aluno) {
                //echo $key."->".$id_aluno.br();
                if ($key != 'horario'){
                    $verificaAluno = $this->frequencia_model->verificaFaltas($id_aluno);
                    //armazena os faltosos em um vetor
                    $vetFaltosos[$i] = $verificaAluno[0]->ID_ALUNO;
                    //recebe o numero de faltas atual
                    $numFaltas = $verificaAluno[0]->contFaltas;
                    //Variavel recebe data e hora para registrar falta
                    $data = escreve_data()." ".date('H:i:s');

                    if($numFaltas == 0){
                        $this->frequencia_model->atualizaStatus($id_aluno,'1');
                        $this->frequencia_model->insereFalta($id_aluno,$data);
                    }
                    elseif($numFaltas == 1){
                        $this->frequencia_model->atualizaStatus($id_aluno,'2');
                        $this->frequencia_model->insereFalta($id_aluno,$data);
                    }
                    elseif($numFaltas == 2){
                        $this->frequencia_model->atualizaStatus($id_aluno,'3');
                        $this->frequencia_model->insereFalta($id_aluno,$data);

                        $this->frequencia_model->retiraCurso($id_aluno);
                    }
                    $i++;
                }
                
            }
            
            //Zera a quantidade de faltas dos aluno Presentes
             $this->db->where('horario',$this->input->post('horario'));
             while ($i>0){
                 $i--;
                 $this->db->where('ID_ALUNO !=',$vetFaltosos[$i]);
             }
             $campos = array('contFaltas' => 0);
             $this->db->update('cad_alunos',$campos);
            
            
        }
        $this->load->library('session');
        $this->session->set_flashdata('msg','Faltas Processadas');
        
        redirect('frequencia');
    }
        
}

?>
