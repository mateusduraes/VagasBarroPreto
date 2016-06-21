<?php 

require_once("class/Usuario.php");

class Empregador extends Usuario {	
	private $cnpj;

	public function getCnpj(){
		return $this->cnpj;
	}

	public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
	}
}

