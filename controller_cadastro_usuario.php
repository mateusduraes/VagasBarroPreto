<?php header("Content-type: text/html; charset=utf-8"); 
require_once("conexao.php");
require_once("class/Candidato.php");
require_once("class/Empregador.php");
require_once("class/CandidatoDAO.php");
require_once("class/EmpregadorDAO.php");
require_once("class/LogicaUsuario.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$tipo = $_POST['usuario'];

if ($_POST['usuario'] == "empregador") {
	$empregador = new Empregador($nome, $email, $senha, $telefone, $celular, null);
	$empregador->setCnpj($_POST['cnpj']);

	$empregadorDao = new EmpregadorDAO($conexao);
	if ($empregadorDao->insereEmpregador($empregador)) {
		$empregadorId = $empregadorDao->buscaEmpregadorParaLogin($email, $senha);
		$empregador->setId($empregadorId['id']);
		$logicaUsuario = new LogicaUsuario($empregador);
		$logicaUsuario->fazLogin($tipo);
	} else {
		$_SESSION['danger'] = "Erro ao cadastrar";
		header("Location: cadastro.php");
		die();
	}
} else if ($_POST['usuario'] == "candidato") {
	$candidato = new Candidato($nome, $email, $senha, $telefone, $celular, null);
	$candidato->setDescricao($_POST['descricao']);
	$candidato->setSexo($_POST['sexo']);
	$candidato->setIdade($_POST['idade']);
	$candidato->setCpf($_POST['cpf']);
	$candidato->setHabilidades($_POST['habilidades']);

	$candidatoDao = new CandidatoDAO($conexao);
	if ($candidatoDao->insereCandidato($candidato)) {
		$candidatoId = $candidatoDao->buscaCandidatoParaLogin($email, $senha);
		$candidato->setId($candidatoId['id']);
		$logicaUsuario = new LogicaUsuario($candidato);
		$logicaUsuario->fazLogin($tipo);
	} else {
		$_SESSION['danger'] = "Erro ao cadastrar";
		header("Location: cadastro.php");
		die();
	}
}
 ?>
