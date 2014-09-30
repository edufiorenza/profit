<?php



function check_field( $tabela, $field ){

	$ci =& get_instance();

	if( isset( $ci->config->config['gerador'][$tabela]['labels'] ) ){
		$config = $ci->config->config['gerador'][$tabela]['labels'];
	}else{
		$config = array();
	}
	
	if($field == "cod_".$tabela){
		return "Código";
	}else if( $field == "descricao"){
		return "Descrição";
	}else if( isset($config[$field]) ){
		return $config[$field];
	}else{
		return ucfirst($field);
	}
	
}

function check_field_value( $tabela, $field, $value ){

	$ci =& get_instance();
	
	if( $field != "cod_".$tabela ){
		//se possui ligação com outra tabela
		if( strpos( $field, "cod_") > -1 ){
			return get_value_fk( $field, $value );
		}else{
			return $value;
		}
	}else{
		return $value;
	}
}

function get_value_fk( $field , $value ){

	$ci =& get_instance();

	$tabela = str_replace("cod_","", $field);

	$ci->db->select("descricao");
	$ci->db->from( $tabela );
	$ci->db->where("cod_" . $tabela, $value );

	$query = $ci->db->get();

	if($query->num_rows() > 0){
		$row = $query->row();
		return $row->descricao;
	}else{
		return $value;
	}

}
?>