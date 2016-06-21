<?php 
header("Content-type: text/html; charset=utf-8");
session_start();
require_once("conexao.php");
require_once("class/CandidatoDAO.php");




if (isset($_POST['pesquisa'])) {
	$texto = $_POST['pesquisa'];
	$candidatoDao = new CandidatoDAO($conexao);
	$candidatos_encontrados = array();
	$candidatos_encontrados = $candidatoDao->buscaCandidatosPorDescricaoHabilidades($texto);
	if (sizeof($candidatos_encontrados) > 0) {
		$_SESSION['candidatos_encontrados_pesquisa'] = serialize($candidatos_encontrados);
		header("Location: home.php");
		die();
	} else {
		$_SESSION['danger'] = "Nenhum candidato foi encontrado para a sua pesquisa";
		header("Location: home.php");
		die();
	}
}



?>