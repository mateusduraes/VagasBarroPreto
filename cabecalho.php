<?php 
	header("Content-type: text/html; charset=utf-8");
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	require_once("helpers/mostra_estado.php");
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Radar Vagas</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top menu">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Radar Vagas</a>
				<button class="navbar-toggle" id="botao_menu" type="button" data-target=".navbar-collapse" data-toggle="collapse">
					<b>Menu</b>
				</button>
			</div>

			<ul class="nav navbar-nav collapse navbar-collapse navbar-right">
				<?php if (isset($_SESSION['usuario_nome'])): ?>
					<li><a href="home.php">Home</a></li>
				<?php endif ?>
				<?php if (!isset($_SESSION['usuario_nome'])): ?>
					<li><a href="cadastro.php">Cadastrar</a></li>			
				<?php endif ?>	
				<li><a href="index.php#sobre">Sobre</a></li>
				<?php if (isset($_SESSION['usuario_nome'])): ?>
					<li><a href="logout.php">Sair</a></li>
				<?php endif ?>								
			</ul>
		</div>
	</nav>


	
	<main>

		
