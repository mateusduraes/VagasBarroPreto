<?php 
header("Content-type: text/html; charset=utf-8");
require_once("class/VagaDAO.php");
require_once("class/Vaga.php");
require_once("conexao.php");

session_start();

$nome = $_POST['nome'];
$local = $_POST['local'];
$salario = $_POST['salario'];
$turno = $_POST['turno'];
$descricao = $_POST['descricao'];
$exige_experiencia = $_POST['experiencia'];
$paga_alimentacao = $_POST['alimentacao'];
$paga_saude = $_POST['saude'];
$paga_transporte = $_POST['transporte'];

$vaga_cadastrar = new Vaga($local, $nome, $exige_experiencia, $salario, 
				$turno,	$paga_transporte, $paga_alimentacao, $paga_saude,
				$descricao, null, $_SESSION['usuario_id']);

$vagaDao = new VagaDAO($conexao);

if ($vagaDao->insereVaga($vaga_cadastrar)) {
	$_SESSION['success'] = "Vaga cadastrada com sucesso, você pode ver as informações dela em 'Minhas Vagas' ";
	header("Location: home.php");
	die();
} else {
	$_SESSION['danger'] = "Erro ao cadastrar a vaga, contate o administrador ".mysqli_error($conexao);
	header("Location: home.php");
	die();
}

?>
