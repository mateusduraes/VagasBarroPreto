<?php 

session_start();
require_once("class/Candidato.php");
require_once("class/Usuario.php");

class LogicaUsuario{
	private $nome;
	private $email;
	private $id;

	function __construct ($usuario){
		$this->nome = $usuario->getNome();
		$this->email = $usuario->getEmail();
		$this->id = $usuario->getId();
	}

	public function fazLogin($tipo){	
		session_destroy();
		session_start();	
		$_SESSION['usuario_id'] = $this->id;
		$_SESSION['usuario_nome'] = $this->nome;
		$_SESSION['usuario_email'] = $this->email;
		$_SESSION['usuario_tipo'] = $tipo;
		//$_SESSION['success'] = "Login realizado com sucesso. Bem vindo ".$_SESSION['usuario_nome']."!";
		header("Location: home.php");
		die();		
	}
}
	

