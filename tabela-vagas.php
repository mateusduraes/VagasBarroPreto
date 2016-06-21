<table class="table table-inverse">
	<thead>
		<tr>
			<th>Nome da Vaga</th>
			<th>Local</th>
			<th>Salario</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($vagas_pesquisa as $vaga): ?>
			<tr>
				<td><?=$vaga->getNome()?></td>
				<td><?=$vaga->getLocal()?></td>
				<td><?=$vaga->getSalario()?></td>
				<td>
					<a class="btn btn-primary" href="vaga.php?id=<?=$vaga->getId()?>">Detalhes</a>	
					<?php if (in_array($vaga->getId(), $_SESSION['minhas_vagas_ids'])): ?>
						<span class="glyphicon glyphicon-ok-circle" aria-hidden="true">
							Concorrendo
						</span>					
					<?php endif ?>							
				</td>
			</tr>
		<?php endforeach ?>									
	</tbody>
</table>