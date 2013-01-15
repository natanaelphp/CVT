<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relatorios extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('relatorios_model');
        
        $this->load->helper('data');
    }
   
    public function index(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('relatorios_geral');
        $this->load->view('footer');
    }
        
    public function alunos(){
        $dados['alunos'] = $this->relatorios_model->listaAlunos();
        
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('alunos',$dados);
        $this->load->view('footer');
    }
    
    public function pdfAlunos(){
        $this->load->library('pdf');
        
        $dados['alunos'] = $this->relatorios_model->listaAlunos();
        
        $html = $this->load->view('pdf/alunos',$dados,TRUE);

        $this->pdf->exibe($html,'Relatório de Alunos CVT');
    }
    
      public function alunosCompleto(){
        
          
        $this->load->helper('form');
                
        $dados['alunos'] = $this->relatorios_model->listaAlunos();
        
        $this->load->view('header');
        $this->load->view('menu');
        
        if ($this->input->post()){
            if ($this->input->post('pdf')){
                
                $this->load->library('pdf');
                $html = $this->load->view('pdf/alunosCompleto',$dados,TRUE);
                $this->pdf->exibe($html,'Relatório de Alunos CVT');
            }
            else{
                $this->load->view('alunosCompleto',$dados);
            }
        }
        else{
            $this->load->view('formCompleto');
        }
        
        $this->load->view('footer');
     
    }
    
    public function empresas(){
        
        $dados['empresas'] = $this->relatorios_model->empresas();
        
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('empresas',$dados);
        $this->load->view('footer');
        
    }
    
    public function empresas2(){
        
        $dados['empresas'] = $this->relatorios_model->empresas2();
        
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('empresas2',$dados);
        $this->load->view('footer');
    }
    
    
    
}
