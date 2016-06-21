<?php require_once("cabecalho.php"); ?>


<section class="container-fluid" id="bg_home">
		<div class="row">
			<h1 class="text-center">Bem vindo ao Radar Vagas</h1>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="panel panel-default" id="formulario_cadastro">
						<div class="panel-heading" id="formulario_cadastro_heading">
							<h3>Cadastro</h3>
						</div>
						<div class="panel-body">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#cadastro_candidato">Candidato</a></li>
								<li><a data-toggle="tab" href="#cadastro_empresa">Empresa</a></li>
							</ul>
							<div class="tab-content">
								<!-- Formulário para cadastro candidato -->
								<div id="cadastro_candidato" class="tab-pane fade in active">
									<h4>Cadastro de Candidato</h4>

									<form action="controller_cadastro_usuario.php" method="post" class="form-horizontal" id="form-cadastro-candidato">
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-md-2" for="nome">Nome:</label>
												<div class="col-md-7">
												    <input type="text" class="form-control input-cadastrar-nome" name="nome" placeholder="ex.: João Henrique">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2" for="telefone">Telefone:</label>
												<div class="col-md-7">
													<input type="tel" class="form-control input-cadastrar-telefone" name="telefone" placeholder="ex.:(99)9999-9999">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2" for="celular">Celular:</label>
												<div class="col-md-7">
													<input type="tel" class="form-control input-cadastrar-celular" name="celular" placeholder="ex.:(99)99999-9999">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2" for="Idade">Idade:</label>
												<div class="col-md-7">
													<input type="number" class="form-control input-cadastrar-idade" name="idade" placeholder="Digite sua idade.">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2" for="Sexo">Sexo:</label>
												<div class="col-md-7">
													<select name="sexo" class="form-control select-sexo">
														<option value="m">Masculino</option>
														<option value="f">Feminino</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2" for="cpf">CPF:</label>
												<div class="col-md-7">
													<input type="text" name="cpf" class="form-control input-cadastrar-cpf" placeholder="ex.:999.999.999-99">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-md-12" for="descricao">Descrição:</label>
												<div class="col-md-12">
													<textarea class="form-control textarea-cadastrar-descricao" name="descricao" placeholder="Fale sobre você, essas informações são importantes para que o contratante lhe conheça melhor !"></textarea>
												</div>
											</div>
											<div class="form-group">
													<label class="col-md-12" for="habilidades">Habilidades:</label>
													<div class="col-md-12">
														<textarea class="form-control textarea-cadastrar-habilidades" name="habilidades" placeholder="Fale sobre suas habilidades, conhecmentos técnicos, etc."></textarea>
													</div>
											</div>

											<div class="form-group">
												<h4>Dados para login</h4>
												<label class="col-md-2" for="email">Email:</label>
												<div class="col-md-7">
													<input type="email" name="email" class="form-control input-cadastrar-email" placeholder="ex.:email@live.com">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2" for="senha">Senha:</label>
												<div class="col-md-7">
													<input type="password" name="senha" class="form-control input-cadastrar-senha" placeholder="Digite sua senha!">
												</div>
											</div>
										</div>
										<input type="hidden" name="usuario" value="candidato">
										<button class="btn btn-primary" id="botao_cadastra_candidato">Cadastrar</button>
									</form>
								</div>
								<!-- Fim Formulário para cadastro candidato -->







								<!-- Formulário para cadastro empresa -->
								<div id="cadastro_empresa" class="tab-pane fade">
									<h4>Cadastro de Empresa</h4>

									<form action="controller_cadastro_usuario.php" method="post" class="form-horizontal" id="form-cadastro-empregador">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-sm-2" for="nome">Nome:</label>
												<div class="col-sm-7">
													<input type="text" class="form-control input-cadastrar-nome" placeholder="ex.: Roupa Nova" name="nome">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2" for="cnpj">CNPJ:</label>
												<div class="col-sm-7">
													<input type="text" class="form-control input-cadastrar-cnpj" name="cnpj" placeholder="ex.:99.999.999/9999-99">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2" for="telefone">Telefone:</label>
												<div class="col-sm-7">
													<input type="tel" class="form-control input-cadastrar-telefone" name="telefone" placeholder="ex.:(99)9999-9999">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2" for="celular">Celular:</label>
												<div class="col-sm-7">
													<input type="tel" name="celular" class="form-control input-cadastrar-celular" placeholder="ex.:(99)99999-9999">
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<h4>Dados para Login</h4>
											<div class="form-group">
												<label class="col-sm-2" for="email">Email:</label>
												<div class="col-sm-7">
													<input type="email" name="email" class="form-control input-cadastrar-email" placeholder="ex.: email@live.com">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2" for="senha">Senha:</label>
												<div class="col-sm-7">
													<input type="password" name="senha" class="form-control input-cadastrar-senha" placeholder="Digite sua senha!">
												</div>
											</div>
										</div>
										<input type="hidden" name="usuario" value="empregador">
										<button class="btn btn-primary" id="botao_cadastra_empresa">Cadastrar</button>
									</form>
								</div>
								<!-- Fim Formulário para cadastro empresa-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>


<?php require_once("rodape.php"); ?>
