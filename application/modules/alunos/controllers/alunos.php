<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alunos extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
               
        $this->load->database();
        $this->load->model('alunos_model');
        
        $this->load->helper('form');
        $this->load->library('session');
    }

    public function index(){
            // Code..
    }
    
    public function Cadastrar(){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_message('required','O campo %s é obrigatório.');
        $this->form_validation->set_message('valid_email','O campo %s deve conter um endereço de email válido.');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if ($this->form_validation->run() == FALSE){
            
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('form_novo');
            $this->load->view('footer');
        }
        else{
            $nome = $this->input->post('nome');
            $documento = $this->input->post('documento');
            $mae = $this->input->post('mae');
            $data_nasc = $this->input->post('data_nasc');
            $escolaridade = $this->input->post('escolaridade');
            $endereco = $this->input->post('endereco');
            $bairro = $this->input->post('bairro');
            $cidade = $this->input->post('cidade');
            $telefone = $this->input->post('telefone');
            $email = $this->input->post('email');
            $empresa = $this->input->post('empresa');
            $renda = $this->input->post('renda');
            $E_D = $this->input->post('E_D');
            $id_inclusao = $this->input->post('id_inclusao');
            $senha = $this->input->post('senha');
            $data_inscricao = $this->input->post('data_inscricao');
            $L_R = $this->input->post('L_R');
            
            $dados = array(
                'ID_ALUNO' => '',
                'nome' => $nome,
                'CPF_RG' => $documento,
                'mae' => $mae,
                'data_nascimento' => $data_nasc,
                'escolaridade' => $escolaridade,
                'endereco' => $endereco,
                'bairro' => $bairro,
                'cidade' => $cidade,
                'telefone' => $telefone,
                'email' => $email,
                'empresa' => $empresa,
                'renda' => $renda,
                'E_D' => $E_D,
                'ID_inclusao' => $id_inclusao,
                'senhaid' => $senha,
                'data_inscricao' => $data_inscricao,
                'L_R' => $L_R
            );
            
            $id = $this->alunos_model->cadastrar($dados);
            
            $link = anchor('alunos/exibir/'.$id ,' <b>Visualizar aluno</b>');
            $this->session->set_flashdata('msg','Aluno cadastrado com sucesso: '.$link);
            redirect();
        }
    }
    
    public function buscar(){
        
        $this->load->view('header');
        $this->load->view('menu');
        
        if ($this->input->post('busca') == FALSE){
            
            $this->load->view('form_busca');
            
        }
        else{
            $aluno = $this->input->post('busca');
            $dados['alunos'] = $this->alunos_model->busca($aluno);      
            $dados['digitado'] = $aluno; 
            $this->load->view('form_busca');
            $this->load->view('resultado_busca',$dados);
        }
        
        $this->load->view('footer');    
    }
    
    public function exibir($id_aluno=null){
        $dados['aluno'] = $this->alunos_model->consulta($id_aluno);
        
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('exibe_aluno',$dados);
        $this->load->view('footer');
    }
    
    public function editar($id_aluno=null){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_message('required','O campo %s é obrigatório.');
        $this->form_validation->set_message('valid_email','O campo %s deve conter um email válido.');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if ($this->form_validation->run() == FALSE){
            
            $dados['aluno'] = $this->alunos_model->consulta($id_aluno);
        
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('form_edit',$dados);
            $this->load->view('footer');
        }
        else{
            $nome = $this->input->post('nome');
            $documento = $this->input->post('documento');
            $mae = $this->input->post('mae');
            $data_nasc = $this->input->post('data_nasc');
            $escolaridade = $this->input->post('escolaridade');
            $endereco = $this->input->post('endereco');
            $bairro = $this->input->post('bairro');
            $cidade = $this->input->post('cidade');
            $telefone = $this->input->post('telefone');
            $email = $this->input->post('email');
            $empresa = $this->input->post('empresa');
            $renda = $this->input->post('renda');
            $E_D = $this->input->post('E_D');
            $id_inclusao = $this->input->post('id_inclusao');
            $senha = $this->input->post('senha');
            $data_inscricao = $this->input->post('data_inscricao');
            $L_R = $this->input->post('L_R');
            
            $dados = array(
                //'ID_ALUNO' => '',
                'nome' => $nome,
                'CPF_RG' => $documento,
                'mae' => $mae,
                'data_nascimento' => $data_nasc,
                'escolaridade' => $escolaridade,
                'endereco' => $endereco,
                'bairro' => $bairro,
                'cidade' => $cidade,
                'telefone' => $telefone,
                'email' => $email,
                'empresa' => $empresa,
                'renda' => $renda,
                'E_D' => $E_D,
                'ID_inclusao' => $id_inclusao,
                'senhaid' => $senha,
                'data_inscricao' => $data_inscricao,
                'L_R' => $L_R
            );
            
            $this->alunos_model->atualiza($id_aluno, $dados);
            
            redirect('alunos/exibir/'.$id_aluno);
            
        }
   
    }
    
    public function excluir($id_aluno=null){
        
        if ($this->alunos_model->deleta($id_aluno)) 
            $this->session->set_flashdata('msg','Aluno excluído com sucesso');        
        redirect();
    }
        
}

?>
