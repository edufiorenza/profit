<?php

//nao permite acesso direto
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends PROFIT_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
	 	parent::__construct();
	 	$this->load->model("login_model","login");
	 }

	public function index()
	{

		$vars = array();
		$this->loadPagesLanding("login/login", $vars );
	}

	public function logout(){
		unset( $_SESSION["dadosUsuario"] );
		redirect("login"); 
	}

	function processa(){

		$email = $this->input->post("email");
		$password = $this->input->post("password");

		//verifica se o usuario esta cadastrado
		$login = $this->login->getUser( $email, $password );
		
		if( $login === false){
			redirect("login");
		}else{
			//gravando dados do usuario na sessao
			$_SESSION["dadosUsuario"] = $login;
			redirect("dashboard");
		}

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */