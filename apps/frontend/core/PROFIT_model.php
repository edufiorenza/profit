<?php 

//nao permite acesso direto
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PROFIT_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    
    function codificaSenha( $senha ){

    	return md5( md5( $senha ) );
    }

    function getTable( $tabela ){

        $retorno = array();

    	$this->db->select("*");
    	$this->db->from( $tabela );
    	$this->db->order_by( "cod_" . $tabela ,"desc" );
    	$q = $this->db->get();

    	if($q->num_rows() > 0 ){
            $retorno['dados'] = $q->result_array();
        }else{
            $retorno['dados'] = array();
        }

        $fields = $this->db->list_fields( $tabela );

        $retorno['fields'] = $fields ;

        return $retorno;
    }

    function getTableValues( $tabela, $id ){

        if( $id == false){
            return array();
        }

        $this->db->select("*");
        $this->db->from( $tabela );
        $this->db->where( "cod_" . $tabela , $id );
        $q = $this->db->get();

        if($q->num_rows() > 0 ){
            return $q->row();
        }else{
            return array();
        }

    }

    function save( $tabela, $dados){

        if( isset($dados['cod'] ) ){
            $this->db->where('cod_'.$tabela, $dados['cod']);
            //removendo identificador antes de salvar
            unset( $dados["cod"] );
            $this->db->update( $tabela , $dados); 
        }else{
            $this->db->insert( $tabela, $dados );
        }
       
    }

    function getAll( $tabela ){

        $this->db->select("*");
        $this->db->from( $tabela );
        $this->db->order_by( "descricao" ,"desc" );
        $q = $this->db->get();

        if($q->num_rows() > 0 ){
            return $q->result_array();
        }else{
            return array();
        }

    }
    

}