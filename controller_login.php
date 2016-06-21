<?php 
header("Content-type: text/html; charset=utf-8");
require_once("conexao.php");
require_once("class/CandidatoDAO.php");
require_once("class/Candidato.php");
require_once("class/EmpregadorDAO.php");
require_once("class/Empregador.php");
require_once("class/LogicaUsuario.php");
session_start();

function erroLogin(){
	$_SESSION['danger'] = "Login ou senha incorretos";
	header("Location: index.php");
	die();
}

$email = $_POST['email'];
$senha = $_POST['senha'];
$usuario = $_POST['usuario'];




if ($usuario == "candidato") {
	//Cria o objeto DAO para acessar o banco de dados
	$candidatoDao = new CandidatoDAO($conexao);
	//Faz a busca do candidato com base no email e senha informados.
	$candidato_encontrado = $candidatoDao->buscaCandidatoParaLogin($email, $senha);		
	//Caso não encontre nenhum candidato, volta pra index com mensagem de erro
	if ($candidato_encontrado == null) {
		erroLogin();
	} else {
		//Cria um objeto Candidato baseado no resultado da consulta.
		$candidato = new Candidato
			($candidato_encontrado['nome'],	$candidato_encontrado['email'], 
			$candidato_encontrado['senha'], $candidato_encontrado['telefone'], 
			$candidato_encontrado['celular'], $candidato_encontrado['id']);
			 $candidato->setDescricao($candidato_encontrado['descricao']);
			$candidato->setSexo($candidato_encontrado['sexo']);
			$candidato->setIdade($candidato_encontrado['idade']);
			$candidato->setCpf($candidato_encontrado['cpf']);
			$candidato->setHabilidades($candidato_encontrado['habilidades']);
		//Faz login utilizando do objeto	
		$logica_usuario = new LogicaUsuario($candidato);
		
		$logica_usuario->fazLogin("candidato");
	}
} else if ($usuario == "empregador") {
	//Cria o objeto DAO para acessar o banco de dados
	$empregadorDao = new EmpregadorDAO($conexao);
	// Faz a busca do empregador com base no e-mail e senha informados
	$empregador_encontrado = $empregadorDao->buscaEmpregadorParaLogin($email, $senha);
	//Caso não encontre nenhum empregador, volta pra index com mensagem de erro
	if ($empregador_encontrado == null) {
		erroLogin();
	} else {
		//Cria um objeto do tipo empregador baseado no resultado
		$empregador = new Empregador($empregador_encontrado['nome'], 
		$empregador_encontrado['email'], $empregador_encontrado['senha'], 
		$empregador_encontrado['telefone'], $empregador_encontrado['celular'], 
		$empregador_encontrado['id']);

		$empregador->setCnpj($empregador_encontrado['cnpj']);
		// Fasz login utilizando o objeto
		$logica_usuario = new LogicaUsuario($empregador);
		
		$logica_usuario->fazLogin("empregador");
	}
}

 ?>