<?php 
header("Content-type: text/html; charset=utf-8");
require_once("class/CandidatoDAO.php");
require_once("class/Candidato.php");
require_once("cabecalho.php");
require_once("conexao.php");
$id = $_GET['id'];
$candidatoDao = new CandidatoDAO($conexao);
$candidato_encontrado = $candidatoDao->buscaCandidatoPorId($id);

 ?>

 <div class="container">
 	<div class="row">
 		<div class="col-sm-10 col-sm-offset-1">
 			<div class="panel panel-info">
 				<div class="panel-heading">
 					<h2><?=$candidato_encontrado->getNome()?></h2>
 				</div>
 				<div class="panel-body">
 					<div class="col-sm-4 col-sm-offset-1">
 						<h4>Habilidades:</h4>
 						<p><?=$candidato_encontrado->getHabilidades()?></p>
 						<h4>Descricao:</h4>
 						<p><?=$candidato_encontrado->getDescricao()?></p>				
 					</div>

 					<div class="col-sm-4 col-sm-offset-1">
 						<h4>Mais informações</h4>
 						<p><b>Telefone: </b><?=$candidato_encontrado->getTelefone()?></p>
 						<p><b>Celular: </b><?=$candidato_encontrado->getCelular()?></p>
 						<p><b>Email: </b></p><?=$candidato_encontrado->getEmail()?>
 						<h5>Informações Adicionais</h5>
 						<p><b>Sexo:</b><?=$candidato_encontrado->getSexo()?></p>
 						<p><b>Idade:</b><?=$candidato_encontrado->getIdade()?></p>
 					</div> 					
 				</div>
 				<div class="panel-footer">
 					<a href="javascript: history.go(-1)" class="btn btn-primary">Voltar</a>	
 				</div>
 			</div>
 		</div>
 	</div>
 </div>



 <?php require_once("rodape.php"); ?>