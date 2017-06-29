<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobrenos extends CI_Controller {


    function __construct() {
        
        parent::__construct();
        
        //CATEGORIAS
        $this->load->model('categorias_model','modelcategorias');
        $this->categorias = $this->modelcategorias->listar_categorias();
        
        //AUTORES
        $this->load->model('autores_model','modelautores');
        
        
        
        
        
    }

    
    public function index()
	{
            
            
            $dados['categorias'] = $this->categorias;
            $dados['autores'] = $this->modelautores->listar_autores();
            
            //dados para serem enviados ao cabeçalho
            $dados['titulo_pagina'] = 'Sobre Nós';
            $dados['subtitulo_pagina'] = 'Conheça nossa equipe';
           
            
            $this->load->view('frontend/template/html-header', $dados);
            $this->load->view('frontend/template/header');
            
            $this->load->view('frontend/sobrenos');
        
            $this->load->view('frontend/template/aside');
            $this->load->view('frontend/template/footer');
            $this->load->view('frontend/template/html-footer');
	}
        
        public function autores($id,$slug=null) {
            
            $this->load->model('publicacoes_model','modelpublicacoes');
            $dados['categorias'] = $this->categorias;
            
            
            $dados['autores'] = $this->modelautores->listar_autor($id);
            
            
            //dados para serem enviados ao cabeçalho
            $dados['titulo_pagina'] = 'Sobre nós';
            $dados['subtitulo_pagina'] = 'Autores';
          
            
            $this->load->view('frontend/template/html-header', $dados);
            $this->load->view('frontend/template/header');
            
            $this->load->view('frontend/autor');
        
            $this->load->view('frontend/template/aside');
            $this->load->view('frontend/template/footer');
            $this->load->view('frontend/template/html-footer');
            
        }
        
        
}
