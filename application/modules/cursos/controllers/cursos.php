<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('cursos_model');
            
    }

    public function index(){
        $dados['cursos'] = $this->cursos_model->lista();

        $this->load->view('header');
        $this->load->view('menu');      
        $this->load->view('cursos_geral',$dados);
        $this->load->view('footer');
    }
        
    public function novo(){
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('curso','Curso','required');
        $this->form_validation->set_message('required', 'O Campo não pode ficar vazio.');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->helper('form');
            $dados['form_action'] = 'cursos/novo';

            $this->load->view('header');
            $this->load->view('menu');      
            $this->load->view('form',$dados);
            $this->load->view('footer');
        }
        else{
            $curso = $this->input->post('curso');
            $data = array(
                'ID_CURSO' => '',
                'nome' => $curso
            );
            $this->cursos_model->novo($data);
            redirect('cursos');
        }   
    }
    
    public function editar($id){
         $this->load->library('form_validation');
        
        $this->form_validation->set_rules('curso','Curso','required');
        $this->form_validation->set_message('required', 'O Campo não pode ficar vazio.');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->helper('form');
            
            $dados['form_action'] = 'cursos/editar/'.$id;
            $dados['curso'] = $this->cursos_model->busca($id);
            
            $this->load->view('header');
            $this->load->view('menu');      
            $this->load->view('form',$dados);
            $this->load->view('footer');
        }
        else{
            $data = array(
                'nome' => $this->input->post('curso')
            );
            $this->cursos_model->atualiza($id,$data);
            redirect('cursos');
        }
    }
    
    public function excluir($id){
        $this->cursos_model->deleta($id);
        redirect('cursos');
    }
    
        
}

?>
