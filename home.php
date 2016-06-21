<?php require_once("cabecalho.php"); ?>
	<?php if ($_SESSION['usuario_tipo'] == "candidato"): ?>
		<?php require_once("home_candidato.php"); ?>
	<?php elseif($_SESSION['usuario_tipo'] == "empregador"): ?>
		<?php require_once("home_empresa.php"); ?>
	<?php endif ?>
<?php require_once("rodape.php"); ?>