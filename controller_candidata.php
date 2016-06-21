<?php 
header("Content-type: text/html; charset=utf-8");
session_start();
require_once("conexao.php");
require_once("class/VagaDAO.php");
require_once("class/Vaga.php");


$id_candidato = $_POST['id_candidato'];
$id_vaga = $_POST['id_vaga'];

$vagaDao = new VagaDAO($conexao);
if ($vagaDao->insereCandidatura($id_candidato, $id_vaga)) {
	$_SESSION['success'] = "Você se candidatou a vaga com sucesso. As informações da vaga ainda podem ser exibidas na parte de 'Minhas Vagas', boa sorte.";
	header("Location: home.php");
	die();
} else {
	$_SESSION['danger'] = "Algum problema ao se candidatar a vaga, contate o administrador do site";
	header("Locaton: home.php");
	die();
}

?>

