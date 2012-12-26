<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sobre extends CI_Controller {
    
    public function index(){
        $this->load->helper('form');
        
        $this->load->view('header');
        $this->load->view('sobre');
        $this->load->view('footer');
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
            echo "enviado";
        }
        else {
            echo "falha no engano";
        }
                
                
    }
        
}

?>
