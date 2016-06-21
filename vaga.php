<?php 

session_start();
require_once("cabecalho.php");
require_once("conexao.php");
require_once("class/VagaDAO.php");
require_once("class/Vaga.php");
require_once("helpers/mostra_estado.php");

$id = $_GET['id'];
$tipo = $_SESSION['usuario_tipo'];

$vagaDao = new VagaDAO($conexao);
$vaga_encontrada = $vagaDao->buscaVagaPorId($id);
?>


	<div class="container">
		<div class="row">					
				<div class="panel panel-info">
					<div class="panel-heading">
						<h2 class="text-center"><?=$vaga_encontrada->getNome()?></h2>
					</div>
					<div class="panel-body">
						<div class="col-sm-4 col-sm-offset-1">							
							<h4>Descrição</h4>
							<p><?=$vaga_encontrada->getDescricao()?></p>
							<p><b>Turno:</b><?=$vaga_encontrada->getTurno()?></p>
							<p><b>Benefícios:</b></p>
							<p>Transporte: <?=$vaga_encontrada->getPagaTransporte()?></p>
							<p>Alimentação: <?=$vaga_encontrada->getPagaAlimentacao()?></p>
							<p>Saúde: <?=$vaga_encontrada->getPagaSaude()?></p>
						</div>
						<div class="col-sm-4 col-sm-offset-1">
							<h4>Mais Informações</h4>
							<p><b>Local:</b><?=$vaga_encontrada->getLocal()?></p>
							<p><b>Salario:</b>R$ <?=$vaga_encontrada->getSalario(); ?></p>
							<p><b>Exige Experiência: </b><?=$vaga_encontrada->getExigeExperiencia() ?></p>

							<?php if ($tipo == "candidato"): ?>
								<?php if (!in_array($vaga_encontrada->getId(), $_SESSION['minhas_vagas_ids'])): ?>
									<form action="controller_candidata.php" method="post">
										<input name="id_vaga" type="hidden" value="<?=$vaga_encontrada->getId() ?>">
										<input name="id_candidato" type="hidden" value="<?=$_SESSION['usuario_id']?>">
										<button class="btn btn-primary">
											Candidatar
										</button>
									</form>
								<?php else: ?>
									<p class="text-success">Você já está cadastrado nessa vaga !</p>
								<?php endif ?>
							<?php elseif($tipo == "empregador"): ?>
								<a href="vaga_candidatos.php?id=<?=$vaga_encontrada->getId()?>" class="btn btn-primary">Ver Candidatos</a>	
							<?php endif ?>
								<a href="javascript: history.go(-1)" class="btn btn-primary">Voltar</a>	
						</div>
					</div>					
				</div>			
		</div>
	</div>

<?php require_once("rodape.php"); ?>