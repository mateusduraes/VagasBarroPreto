<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-default" id="formulario_login">
			<div class="panel-heading" id="formulario_login_heading">
					<h3 class="text-center">Faça seu login</h3>
					<b><?= mostraAlerta("danger"); ?></b>
			</div>
			<div class="panel-body">
				<ul class="nav nav-tabs">
				  <li class="active"><a data-toggle="tab" href="#login_candidato">Candidato</a></li>
				  <li><a data-toggle="tab" href="#login_empresa">Empresa</a></li>
				</ul>
				<div class="tab-content">
					<!-- Formulário de login para candidato-->
					<div id="login_candidato" class="tab-pane fade in active">
						<form action="controller_login.php" method="post">
							<label>Email:</label>
							<input class="form-control input-email" type="email" name="email" placeholder="ex.: email@live.com">

							<label>Senha:</label>
							<input class="form-control input-senha" type="password" name="senha" placeholder="Digite sua senha">
							
							
							<input type="hidden" value="candidato" name="usuario">			
							<br/>					
							<button class="btn btn-success botao-logar">
								<span class="glyphicon glyphicon-log-in"></span> Logar
							</button>					
						</form>
					</div>					
					<!-- Formulário de login para empregador-->
					<div id="login_empresa" class="tab-pane fade">
						<form action="controller_login.php" method="post">
							<label>Email:</label>
							<input class="form-control input-email" type="email" name="email" placeholder="ex.: email@live.com">

							<label>Senha:</label>
							<input class="form-control input-senha" type="password" name="senha" placeholder="Digite sua senha">
							
							
							<input type="hidden" value="empregador" name="usuario">			
							<br/>
							<button class="btn btn-success botao-logar">
								<span class="glyphicon glyphicon-log-in"></span> Logar
							</button>						
						</form>
					</div>					
				</div>	
			</div>
		</div>
	</div>
</div>

