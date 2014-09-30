<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exercicios extends PROFIT_Controller {

	function __construct() {
	 	parent::__construct();
	 	$this->load->model("base_model","base");
	 	$this->table = "exercicios";
	}

	function index(){
		$vars = array( "dados"=> $this->base->getTable( $this->table ) );
		$this->loadPagesDashboard("exercicios/index", $vars );
	}

	function form( $id = false){
		$vars = array( 
			"dados"=> $this->base->getTable( $this->table ),
			"valores" => $this->base->getTableValues( $this->table, $id ),
			"aparelhos" => $this->base->getAll("aparelhos"),
			"id" => $id
		);

		$this->loadPagesDashboard("exercicios/form", $vars );
	}

	function validate(){

		$validate = new Validate();
		$validate->noblank( $this->input->post("descricao") );

		$this->save();
	}

	function save(){
		$this->base->save( $this->table , $this->input->post() );
		redirect("exercicios");
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */