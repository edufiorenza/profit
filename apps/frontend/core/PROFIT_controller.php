<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PROFIT_Controller extends CI_Controller {

	 function __construct() {
	 	session_start();
	 	parent::__construct();
	 	
	 }

	 public function _verificaSessaoLogin(){
		//redireciona para a tela de login caso a sessao tenha expirado ou não exista
		if( !isset( $_SESSION['hashLogado'] ) ){
			redirect( site_url("login") );
		}
	}

	public function mergeVariaveis( $array ){
		$dataAdd = array(
            'assets_path' => base_url()."assets/",
            'site_url' => site_url()
        );

        $data = array_merge( $dataAdd, $array );

        return $data;
	}

	public function loadPagesLanding( $pages, $variaveis = array() ) {

		$data = $this->mergeVariaveis( $variaveis );
       
        foreach( array_keys($data) as $key){
        	$this->smartyci->assign( $key , $data[$key] );
        }

		//carregar topo comum das paginas
		$this->smartyci->display( 'site/header.tpl' );

		if( is_array($pages) ){
			foreach($pages as $page){
				$this->smartyci->display( "site/{$page}.tpl" );
			}
		}else{
			$this->smartyci->display( "site/{$pages}.tpl" );
		}

		//carregar rodape comum das paginas
		$this->smartyci->display( 'site/footer.tpl' );

	}

	public function loadPagesDashboard( $pages, $variaveis = array() ) {

		$data = $this->mergeVariaveis( $variaveis );
       
        foreach( array_keys($data) as $key){
        	$this->smartyci->assign( $key , $data[$key] );
        }

		//carregar topo comum das paginas
		$this->smartyci->display( 'dashboard/header.tpl' );
		$this->smartyci->display( 'dashboard/sidebar.tpl' );

		if( is_array($pages) ){
			foreach($pages as $page){
				$this->smartyci->display( "dashboard/{$page}.tpl" );
			}
		}else{
			$this->smartyci->display( "dashboard/{$pages}.tpl" );
		}

		//carregar rodape comum das paginas
		$this->smartyci->display( 'dashboard/footer.tpl' );

	}


	public function loadPagesSingle( $page, $variaveis = array() ) {

		$data = $this->mergeVariaveis( $variaveis );

        foreach( array_keys($data) as $key){
        	$this->smartyci->assign( $key , $data[$key] );
        }

		$this->smartyci->display( "site/{$page}.tpl" );

	}


}
