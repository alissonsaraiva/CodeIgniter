<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {


    function __construct() {
        
        parent::__construct();
        
        //CATEGORIAS
        $this->load->model('categorias_model','modelcategorias');
        $this->categorias = $this->modelcategorias->listar_categorias();
        
        
        
        
    }

    
    public function index($id, $slug=null)
	{
            
            $this->load->model('publicacoes_model','modelpublicacoes');
            $dados['categorias'] = $this->categorias;
            $dados['publicacoes_destaque'] = $this->modelpublicacoes->categoria_pub($id);
            
            //dados para serem enviados ao cabeçalho
            $dados['titulo_pagina'] = 'Categorias';
            $dados['subtitulo_pagina'] = '';
            $dados['subtitulo_paginadb'] = $this->modelcategorias->listar_titulo($id);
            
            $this->load->view('frontend/template/html-header', $dados);
            $this->load->view('frontend/template/header');
            
            $this->load->view('frontend/categoria');
        
            $this->load->view('frontend/template/aside');
            $this->load->view('frontend/template/footer');
            $this->load->view('frontend/template/html-footer');
	}
        
        
}
