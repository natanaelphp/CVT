<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sobre extends CI_Controller {
    
    public function index(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('nome','Nome','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('assunto','Assunto','required');
        $this->form_validation->set_rules('msg','Mensagem','required');
        $this->form_validation->set_message('required','O campo %s é obrigatório.');
        $this->form_validation->set_message('valid_email','O campo %s deve conter um endereço de email válido');
        $this->form_validation->set_error_delimiters('<div class="ui-state-error ui-corner-all erro">', '</div>');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('header');
            $this->load->view('sobre');
            $this->load->view('footer');
        }
        else{
            $this->enviaEmail();
        }
        
    }
    
    public function enviaEmail(){
        
        $this->load->library('email');

        $from = $this->input->post('email');
        $to = 'natanael.php@gmail.com';
        $assunto = $this->input->post('assunto');
        $msg = $this->input->post('msg');


        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($assunto);

        //$this->email->set_mailtype('html');
        $this->email->message($msg);

        //Anexo!!
        //$this->email->attach('asset/img/project.png');

        if ($this->email->send()){
           $dados['msg'] = 'sucesso';
        }
        else {
            $dados['msg'] = 'falha';
        }
        $this->load->view('header');
        $this->load->view('msg_email',$dados);
        $this->load->view('footer');
    }
        
}

?>
