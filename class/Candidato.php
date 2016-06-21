<?php 
require_once("class/Usuario.php");
class Candidato extends Usuario {
	private $descricao;
	private	$sexo;
	private $idade;
	private $cpf;
	private $habilidades;

	public function getDescricao(){
		return $this->descricao;
	}
	
	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	
	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}
	
	public function getIdade(){
		return $this->idade;
	}	

	public function setIdade($idade){
		$this->idade = $idade;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getHabilidades(){
		return $this->habilidades;
	}

	public function setHabilidades($habilidades){
		$this->habilidades = $habilidades;
	}
}