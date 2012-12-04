<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Horarios extends CI_Controller { 
     
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('horarios_model');
    }
    
    public function index(){
        $dados['horarios'] = $this->horarios_model->lista();

        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('horarios_geral',$dados);
        $this->load->view('footer');
    }
    
  public function novo(){
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('dia','Dia','required');
        $this->form_validation->set_rules('hora','Hora','required');
        $this->form_validation->set_message('required', 'O Campo "%s" não pode ficar vazio.');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->helper('form');
            $dados['form_action'] = 'horarios/novo';

            $this->load->view('header');
            $this->load->view('menu');      
            $this->load->view('form',$dados);
            $this->load->view('footer');
        }
        else{
            $dia = $this->input->post('dia');
            $hora = $this->input->post('hora');
            $data = array(
                'ID_horarios' => '',
                'dia' => $dia,
                'hora' => $hora,
            );
            $this->horarios_model->novo($data);
            redirect('horarios');
        }   
    }
    
    public function editar($id){
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('dia','Dia','required');
        $this->form_validation->set_rules('hora','Hora','required');
        $this->form_validation->set_message('required', 'O Campo "%s" não pode ficar vazio.');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->helper('form');
            
            $dados['form_action'] = 'horarios/editar/'.$id;
            $dados['horario'] = $this->horarios_model->busca($id);
            
            $this->load->view('header');
            $this->load->view('menu');      
            $this->load->view('form',$dados);
            $this->load->view('footer');
        }
        else{
            $data = array(
                'dia' => $this->input->post('dia'),
                'hora' => $this->input->post('hora'),
                
            );
            $this->horarios_model->atualiza($id,$data);
            redirect('horarios');
        }
    }
    
    public function excluir($id){
        $this->horarios_model->deleta($id);
        redirect('horarios');
    }
        
        
}

?>
