<table class="table table-striped">
	<thead>
		<tr>
			<th>Nome da Vaga</th>
			<th>Local</th>
			<th>Salario</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($minhas_vagas as $vaga): ?>
			<tr>
				<td><?=$vaga->getNome()?></td>
				<td><?=$vaga->getLocal()?></td>
				<td><?=$vaga->getSalario()?></td>
				<td>
					<a class="btn btn-primary" href="vaga.php?id=<?=$vaga->getId()?>">Detalhes
						<span class="glyphicon glyphicon-eye-open"></span>	
					</a>
				</td>
			</tr>
		<?php endforeach ?>									
	</tbody>
</table>

