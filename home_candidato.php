<?php 
require_once("conexao.php");
require_once("helpers/mostra_estado.php");
require_once("class/Vaga.php");
require_once("controller_lista_vagas.php");


session_start();
if (array_key_exists('vagas_encontradas_pesquisa', $_SESSION)) {
	$vagas_pesquisa = unserialize($_SESSION['vagas_encontradas_pesquisa']);
	unset($_SESSION['vagas_encontradas_pesquisa']);
}
 ?>

<!-- Header mensagem de Boas Vindas-->
<header class="container-fluid boas_vindas_candidato">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 boas_vindas">
			<h1>Olá <?=$_SESSION['usuario_nome']?>! Seja bem vindo</h1>
			<?php 
				mostraAlerta("danger");
				mostraAlerta("success");
			?>
		</div>
	</div>
</header>
<!-- Fim Header mensagem de Boas Vindas-->

<!-- Pesquisa de vagas -->
<section class="container-fluid pesquisa_vagas">
	<div class="container">
		<div class="row">		
			<div class="col-sm-10 col-sm-offset-1">
				<h2 class="text-center">Pesquise pelas melhores vagas</h2>
				<?php mostraAlerta("danger"); ?>
				<div class="form-group">
					<form action="controller_lista_vagas.php" method="post">
						<label for="pesquisa">Pesquisa:</label>
						<div class="input-group">
						<input type="text" name="pesquisa" class="form-control" placeholder="ex.: Porteiro, Designer, Vendedor etc.">
							<span class="input-group-btn">	
								<button class="btn btn-primary">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</form>
				</div>	
				<?php if (isset($vagas_pesquisa) && sizeof($vagas_pesquisa) > 0): ?>
					<?php require_once("tabela-vagas.php"); ?>
				<?php endif ?>				
			</div>
		</div>
	</div>
</section>
<!-- Fim pesquisa de vagas -->


<!-- Minhas Vagas -->
<section class="container-fluid minhas_vagas_candidato">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h2 class="text-center">Minhas Vagas</h2>
				<?php $minhas_vagas = listaMinhasVagasCandidato($conexao); ?>
				<?php if (empty($minhas_vagas)): //se o array estiver vazio, entao o usuario não se candidatou a nenhuma vaga, então é mostrado uma mensagem de informação?>
					<p class="text-danger">Você ainda não se candidatou a nenhuma vaga</p>
				<?php endif ?>
			</div>
			
				<?php
				 // se o array tiver mais que 1 elemento, entao o usuario já se candidato a alguma vaga e a tabela deve ser mostrada.
				 if (sizeof($minhas_vagas) > 0) {
				 	require_once("tabela-minhas-vagas-candidato.php");		 	
				 }
				 
				?>	
		</div>
	</div>
</section>
<!-- Fim Minhas Vagas -->