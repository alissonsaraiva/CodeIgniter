<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


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
        
        
}
