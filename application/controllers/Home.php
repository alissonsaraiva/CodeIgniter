<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    function __construct() {
        
        parent::__construct();
        
        //CATEGORIAS
        $this->load->model('categorias_model','modelcategorias');
        $this->categorias = $this->modelcategorias->listar_categorias();
        
        
        
        
    }

    
    public function index()
	{
            
            $this->load->model('publicacoes_model','modelpublicacoes');
            $dados['categorias'] = $this->categorias;
            $dados['publicacoes_destaque'] = $this->modelpublicacoes->destaques_home();
            $this->load->view('frontend/template/html-header', $dados);
            $this->load->view('frontend/template/header');
            
            $this->load->view('frontend/home');
        
            $this->load->view('frontend/template/aside');
            $this->load->view('frontend/template/footer');
            $this->load->view('frontend/template/html-footer');
	}
        
        
}
