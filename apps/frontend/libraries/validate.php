<?php

//nao permite acesso direto
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validate {

    public function __construct() {
        
    }

    public function noblank( $valor ){
        if( trim($valor) == ""){
            return false;
        }
        return true;
    }

   
}