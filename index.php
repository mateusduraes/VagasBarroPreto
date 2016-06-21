<?php require_once("cabecalho.php"); ?>
	<header class="container-fluid" id="bg_home">
		<div class="row">
			<h1 class="text-center">Bem vindo ao Radar Vagas</h1>
		</div>		
			<?php if (!isset($_SESSION['usuario_nome'])): ?>
				<?php require_once("formulario_login_final.php"); ?>
			<?php else: ?>	
				<div class="container">
					<div class="row">
						<h3 class="text-center white_message">Você está logado como <?=$_SESSION['usuario_nome']?>, clique <a href="home.php">aqui</a> e vá para seu painel! Boa sorte. </h3>
					</div>
				</div>
			<?php endif ?>
	</header>
 
	<section class="container">

		<div class="row">	
			<h2 class="text-center" id="sobre">Sobre o Projeto</h2>		
			<div class="col-sm-2">
				<img src="imgs/una.png" alt="Logo Centro Universitário UNA">
			</div>
			<div class="col-sm-6">
				<article>
					<p>Esse projeto é de carácter acadêmico e foi criado por alunos do Centro Universitário UNA com o intuito de impulsionar a questão empregatícia no bairro Barro Preto.</p>
					<p>Podemos observar que mesmo em tempos de crise, ainda acontecem contratações no Barro Preto, mas o rítmo tem desacerelado e com isso surgiu o Radar Vagas em <time>2016!</time></p>
				</article>
			</div>
			<div class="col-sm-3">
					<iframe class="pull-right" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.0820348951943!2d-43.94990145061132!3d-19.920947586543036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa697595f6540a1%3A0xdf0d010b22d33f54!2sCentro+Universit%C3%A1rio+Una+-+Campus+Barro+Preto!5e0!3m2!1spt-BR!2sbr!4v1465085947130" width="200" height="200" frameborder="0" style="border:0" allowfullscreen>
					</iframe>
			</div>
		</div>
	</section>

<?php require_once("rodape.php"); ?>
