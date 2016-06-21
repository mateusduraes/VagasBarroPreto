
<table class="table table-hover">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Habilidades</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($candidatos_encontrados_pesquisa as $candidato): ?>				
				<tr>
					<td><?=$candidato->getNome()?></td>
					<td><?=$candidato->getHabilidades()?></td>
					<td>
						<a class="btn btn-primary" href="candidato.php?id=<?=$candidato->getId()?>"> Detalhes
							<span class="glyphicon glyphicon-eye-open"></span>	
						</a>
							
					</td>
				</tr>				
		<?php endforeach ?>					
	</tbody>
</table>
