<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {


    function __construct() {
        
        parent::__construct();
        
        
    }

    
    public function index()
	{
            
            
            //dados para serem enviados ao cabeçalho
            $dados['titulo_pagina'] = 'Painel de controle';
            $dados['subtitulo_pagina'] = 'Home';
            
            $this->load->view('backend/template/html-header', $dados);
            $this->load->view('backend/template/template');
            $this->load->view('backend/home');
            $this->load->view('backend/template/html-footer');
    }
    
    public function pag_login() {
        
        //dados para serem enviados ao cabeçalho
            $dados['titulo_pagina'] = 'Painel de controle';
            $dados['subtitulo_pagina'] = 'Entrar no sistema';
            
            $this->load->view('backend/template/html-header', $dados);
            $this->load->view('backend/login');
            $this->load->view('backend/template/html-footer');
        
    }
    
    public function login() {
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-user','Usuário',
                'required|min_length[3]');
        $this->form_validation->set_rules('txt-senha','Senha',
                'required|min_length[3]');
        
        if($this->form_validation->run() == FALSE){
          $this->pag_login();  
        }else{
            $usuario = $this->input->post('txt-user');
            $senha = $this->input->post('txt-senha');
            
            $this->db->where('user',$usuario);
            $this->db->where('senha',$senha);
            $userLogado = $this->db->get('usuario')->result();
            
            if(count($userLogado) == 1){
                $dadosSessao['userLogado'] = $userLogado[0];
                $dadosSessao['logado']=TRUE;
                $this->session->set_userdata($dadosSessao);
                redirect(base_url('admin'));
            }else{
                $dadosSessao['userLogado'] = NULL;
                $dadosSessao['logado']=FALSE;
                $this->session->set_userdata($dadosSessao);
                redirect(base_url('admin/login'));
            }
        }
        
    }
        
        
}
