<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends PROFIT_Controller {

	 function __construct() {
	 	parent::__construct();
	 	$this->load->model("login_model","login");
	 }

	public function index()
	{

		$vars = array();
		$this->loadPagesDashboard("home", $vars );
	}

	function aparelhos(){
		$vars = array( "dados"=> $this->login->getTable("aparelhos") );
		$this->loadPagesDashboard("treinos/aparelhos", $vars );
	}

	function exercicios(){
		$vars = array( "dados"=> $this->login->getTable("exercicios") );
		$this->loadPagesDashboard("treinos/exercicios", $vars );
	}

	function treinos(){
		$vars = array( "dados"=> $this->login->getTable("treinos") );
		$this->loadPagesDashboard("treinos/treinos", $vars );
	}

	function alimentos(){
		$vars = array( "dados"=> $this->login->getTable("alimentos") );
		$this->loadPagesDashboard("treinos/alimentos", $vars );
	}

	function form_alimentos( $id = false){
		$vars = array( "dados"=> $this->login->getTable("alimentos") );
		$this->loadPagesDashboard("treinos/form_alimentos", $vars );
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */