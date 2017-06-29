<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autores_model extends CI_Model {
    
    public $id;
    public $nome;
    public $email;
    public $img;
    public $historico;
    public $user;
    public $senha;
    


    function __construct() {
        
        parent::__construct();
        
    }
    
   
    
    function listar_autor($id) {
        $this->db->select('id, nome, historico, img');
        $this->db->from('usuario');
        $this->db->where('id ='.$id);
        return $this->db->get()->result();
        
        
    }
    
    function listar_autores() {
        $this->db->select('id, nome, img');
        $this->db->from('usuario');
        $this->db->order_by('nome', 'ASC');
        return $this->db->get()->result();
        
        
    }


    
    
        
        
}
