<?php 
header("Content-type: text/html; charset=utf-8");
require_once("conexao.php");
require_once("class/Vaga.php");
require_once("class/VagaDAO.php");
session_start();



//Caso seja pesquisa de vagas realizada pelo candidato
if (isset($_POST['pesquisa'])) {
	$pesquisa = $_POST['pesquisa'];
	//Cria objeto vagasDao para acessar o banco de dados e fazer a busca
	$vagaDao = new VagaDao($conexao);
	$vagas_encontradas_pesquisa = $vagaDao->buscaVagasPorNomeDescricao($pesquisa);
	
	//Redirecionando o usuário
	if (sizeof($vagas_encontradas_pesquisa) > 0) {
		$_SESSION['vagas_encontradas_pesquisa'] = serialize($vagas_encontradas_pesquisa);
		header("Location: home.php");
		die();
	} else {
		$_SESSION['danger'] = "Nenhuma vaga foi encontrada para a sua pesquisa.";
		header("Location: home.php");
		die();
	}
} 


function listaMinhasVagasCandidato($conexao){
	$vagaDao = new VagaDao($conexao);
	$minhas_vagas = $vagaDao->buscaMinhasVagasCandidato();

	if (sizeof($minhas_vagas) > 0) {
		return $minhas_vagas;
	} 
}

function listaMinhasVagasEmpregador($conexao){
	$vagaDao = new VagaDao($conexao);
	$minhas_vagas = $vagaDao->buscaMinhasVagasEmpregador();
	if (sizeof($minhas_vagas > 0)) {
		return $minhas_vagas;
	}
}

 ?>