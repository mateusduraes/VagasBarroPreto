<?php 
	require_once("conexao.php");
	require_once("cabecalho.php"); 
	require_once("class/Candidato.php");
	require_once("controller_lista_vagas.php");
?>
<?php 
	if (array_key_exists('candidatos_encontrados_pesquisa', $_SESSION)) {
		$candidatos_encontrados_pesquisa = unserialize($_SESSION['candidatos_encontrados_pesquisa']);
		unset($_SESSION['candidatos_encontrados_pesquisa']);
	}
 ?>

<!-- Header boas vindas -->
<header class="container-fluid boas_vindas_empresa">
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
<!-- Fim Header boas vindas -->



<!-- Pesquisa de candidatos -->
<section class="container-fluid pesquisa_candidatos">
	<div class="container">
		<div class="row">		
			<div class="col-sm-10 col-sm-offset-1">
				<h2 class="text-center">Pesquise pelo profissional ideal</h2>
				<?php mostraAlerta("danger"); ?>
				<div class="form-group">
					<form action="controller_lista_candidatos.php" method="post" class="form-group">
						<label>Pesquisa:</label>
						<div class="input-group">
						<input type="text" name="pesquisa" class="form-control" 
						placeholder="ex.: Vendedora, Vendedor experiente, Photoshop, João">
						<span class="input-group-btn">
							<button class="btn btn-primary">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
						</div>
					</form>
				</div>
				<?php if (isset($candidatos_encontrados_pesquisa)) {
					require_once("tabela_candidatos.php");
				} ?>			
			</div>
		</div>
	</div>
</section>
<!-- Fim pequisa de candidatos -->
	


<!-- Cadastro de vaga -->
<?php require_once("formulario_cadastro_vaga.php"); ?>
<!-- Fim cadastro de vaga -->


<!-- Minhas vagas -->
<section class="container-fluid minhas_vagas_empresa">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h2 class="text-center">Minhas Vagas</h2>
				<?php $minhas_vagas = listaMinhasVagasEmpregador($conexao); ?>
				<?php if (empty($minhas_vagas)): //se o array estiver vazio, entao o usuario não cadastrou nenhuma vaga?>
					<p class="text-danger">Você ainda não cadastrou nenhuma vaga.</p>
				<?php endif ?>
			</div>
			
				<?php
				 // se o array tiver mais que 1 elemento, entao o usuario já cadastrou alguma vaga
				 if (sizeof($minhas_vagas) > 0) {
				 	require_once("tabela-minhas-vagas-candidato.php");		 	
				 }
				 
				?>	 
		</div>
	</div>
</section>
<!-- Fim minhas vagas -->

<?php require_once("rodape.php"); ?>