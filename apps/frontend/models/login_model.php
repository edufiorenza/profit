<?php 

//nao permite acesso direto
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends PROFIT_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
   
   function getUser( $email, $senha ){

        $this->db->select("*");
        $this->db->from("pessoas");
        $this->db->where("email", $email);
        $this->db->where("senha", $this->codificaSenha($senha) );

        $query = $this->db->get();

        if( $query->num_rows() > 0 ){
            return $query->row();
        }else{
            return false;
        }
   }
    

}