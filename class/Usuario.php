<?php 

abstract class Usuario {
	private $nome;
	private $email;
	private $senha;
	private $telefone;
	private $celular;
	private $id;

	function __construct($nome, $email, $senha, $telefone, $celular, $id){
		$this->setNome($nome);
		$this->setEmail($email);
		$this->setSenha($senha);
		$this->setTelefone($telefone);
		$this->setCelular($celular);
		$this->setId($id);
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getCelular(){
		return $this->celular;
	}

	public function setCelular($celular){
		$this->celular = $celular;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

}
