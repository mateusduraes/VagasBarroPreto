<?php 

require_once("cabecalho.php");
require_once("conexao.php");
require_once("class/Candidato.php");
require_once("class/CandidatoDAO.php");

$id = $_GET['id'];
$candidatoDao = new CandidatoDAO($conexao);
$candidatos_encontrados = $candidatoDao->buscaCandidatosPorVaga($id);




 ?>
<div class="container">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
<?php if (sizeof($candidatos_encontrados) > 0): ?>
	<?php $candidatos_encontrados_pesquisa = $candidatos_encontrados; 
		unset($candidatos_encontrados);
		?>
 	<?php require_once("tabela_candidatos.php"); ?>

<?php else: ?>
	<h2 class="text-center text-success">Essa vaga anda não possui candidatos.</h2>
<?php endif ?>
			<a href="javascript: history.go(-1)" class="btn btn-primary">Voltar</a>	
		</div>
	</div>
</div>


<?php require_once("rodape.php"); ?>