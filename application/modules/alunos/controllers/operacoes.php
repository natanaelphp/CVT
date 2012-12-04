<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operacoes extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('operacoes_model');
        $this->load->model('alunos_model');
        
        $this->load->helper('form');
    }

    public function index(){
        //code ...
    }
    
    public function alterarhorario($aluno){
        
        if ($this->input->post('horario') == FALSE){
            
            $this->load->model('horarios/horarios_model');    
            
            $dados['horarios'] = $this->horarios_model->lista();
            $dados['form_action'] = 'alunos/alterarhorario/'.$aluno;
            $dados['id_aluno'] = $aluno;
            $dados['horario_aluno'] = $this->operacoes_model->consulta_horario($aluno);
            
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('op/form_horario',$dados);
            $this->load->view('footer');
        }
        else{
            $data = array(
                'contFaltas' => '',
                'horario' => $this->input->post('horario')
            );
            $this->alunos_model->atualiza($aluno,$data);
            redirect('alunos/exibir/'.$aluno);
        }
        
    }
    
    public function faltas($id_aluno){
        $dados['id_aluno'] = $id_aluno;
        $dados['aluno'] = $this->alunos_model->consulta($id_aluno);
        $dados['faltas'] = $this->operacoes_model->consulta_faltas($id_aluno);
        
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('op/faltas',$dados);
        $this->load->view('footer');
    }
    
    public function cursos($id_aluno){
        $dados['id_aluno'] = $id_aluno;
        $dados['aluno'] = $this->alunos_model->consulta($id_aluno);
        $dados['cursos'] = $this->operacoes_model->consulta_cursos($id_aluno);
        
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('op/cursos_geral',$dados);
        $this->load->view('footer');
    }
  
    public function novo_curso($id_aluno){
        
        if ($this->input->post('curso') == FALSE){
            $this->load->model('cursos/cursos_model');
            $dados['cursos'] = $this->cursos_model->lista();
            $dados['id_aluno'] = $id_aluno;
            $dados['form_action'] ='alunos/operacoes/novo_curso/'.$id_aluno;

            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('op/form_curso',$dados);
            $this->load->view('footer');
        }
        else{
            $data = array(
                'ID_ALUNO' => $id_aluno,
                'ID_CURSO' => $this->input->post('curso')
            );
            $this->operacoes_model->insere_relacao_curso($data);
            redirect('alunos/cursos/'.$id_aluno);
        }
        
    }
    public function editar_situacao_curso($id_aluno,$id_curso){
        
        if ($this->input->post('situacao') == FALSE){
            
            $dados['id_aluno'] = $id_aluno;
            $dados['id_curso'] = $id_curso;

            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('op/form_situacao',$dados);
            $this->load->view('footer');
        }
        else{
            $situacao = array(
                'situacao' => $this->input->post('situacao')
            );
            $this->operacoes_model->atualiza_relacao_curso($id_aluno,$id_curso,$situacao);
            redirect('alunos/cursos/'.$id_aluno);
        }
    }
    public function excluir_curso($id_aluno,$id_curso){
        $this->operacoes_model->deleta_relacao_curso($id_aluno,$id_curso);
        redirect('alunos/cursos/'.$id_aluno);
    }
    
    
    
}