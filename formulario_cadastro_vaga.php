<section class="container-fluid cadastra_vaga">
<h2 class="text-center">Cadastre uma vaga</h2>
<div class="container">
<div class="row">
	<div class="col-sm-offset-1">		
		<form action="controller_cadastra_vaga.php" method="post" class="form-horizontal " >
			<h4>Dados da Vaga</h4>
			<div class="col-sm-6">
				<div class="form-group">				
					<label class="col-sm-3" for="nome">Nome da Vaga:</label>
					<div class="col-sm-6"><input type="text" placeholder="ex.: Vaga de Designer" class="form-control" name="nome"></div>				
				</div>	
				
				<div class="form-group">
					<label class="col-sm-3" for="local">Local:</label>
					<div class="col-sm-6"><input type="text" placeholder="ex.: Barro Preto" class="form-control" name="local"></div>
				</div>
					
				<div class="form-group">
					<label class="col-sm-3" for="salario">Salário:</label>
					<div class="col-sm-6"><input type="number" placeholder="ex.: 890" class="form-control" name="salario"></div>
				</div>
					
				<div class="form-group">
					<label class="col-sm-3" for="turno">Turno:</label>
					<div class="col-sm-6">
						<select name="turno" class="form-control">
							<option value="Diurno">Diurno</option>
							<option value="Vespertino">Vespertino</option>
							<option value="Noturno">Noturno</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-12" for="descricao">Descrição:</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="descricao" placeholder="Descreva a vaga, tarefas a serem realizadas, conhecimentos necessários, etc."></textarea>
					</div>
				</div>				
			</div>

			<div class="col-sm-6">
				<div class="form-group">
					<label class="col-sm-3" for="experiencia">Exige Experiencia:</label>
					<div class="col-sm-6">
						<select name="experiencia" class="form-control">
							<option value="1">Sim, exigimos experiência</option>
							<option value="0">Não exigimos experiência</option>
						</select>
					</div>
				</div>
				
					<h4>Benefícios</h4>
					
				<div class="form-group">
					<label class="col-sm-3" for="alimentacao">Alimentação</label>
					<div class="col-sm-6">
						<select name="alimentacao" class="form-control">
							<option value="1">Sim, pagamos alimentação</option>
							<option value="0">Não pagamos alimentação</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3" for="saude">Saúde:</label>
					<div class="col-sm-6">
						<select name="saude" class="form-control">
							<option value="1">Sim, pagamos plano de saúde</option>
							<option value="0">Não pagamos plano de saúde</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3" for="transporte">Transporte:</label>
					<div class="col-sm-6">
						<select name="transporte" class="form-control">
							<option value="1">Sim, pagamos vale transporte</option>
							<option value="0">Não pagamos vale transporte</option>
						</select>
					</div>
				</div>	
					
				<button class="btn btn-primary">
					<span class="glyphicon glyphicon-plus"></span>
					Cadastrar Vaga
				</button>
			</div>	
		</form>
	</div>
</div>
</div>
</section>