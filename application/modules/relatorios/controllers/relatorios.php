<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relatorios extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('relatorios_model');
    }
   
    public function index(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('relatorios_geral');
        $this->load->view('footer');
    }
        
    public function alunos(){
        $this->load->helper('data');
        $dados['alunos'] = $this->relatorios_model->listaAlunos();
        
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('alunos',$dados);
        $this->load->view('footer');
    }
    
    public function pdfAlunos(){
        $this->load->helper('data');
        $this->load->library('pdf');
        
        $dados['alunos'] = $this->relatorios_model->listaAlunos();
        
        $html = $this->load->view('pdf/alunos',$dados,TRUE);

        $this->pdf->exibe($html,'Relatório de Alunos CVT');
    }
    
    
}
