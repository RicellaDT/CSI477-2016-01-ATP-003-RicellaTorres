
<?php 
	echo '<div class="btn-group btn-group-justified" role="group">';


	echo '<div class="btn-group">';
	echo $this->Html->link("Marcar Novo Exame",
							array('controller' => 'procedimentos',
										'action' => 'index_pacientes'),
							array('class' => 'btn btn-success btn-lg'));
 	echo '</div>';


	echo '<div class="btn-group">';
	echo $this->Html->link('Sair',
				    '/pages/home',
				    array('class' => 'btn btn-danger btn-lg', 'target' => '_self'));
	echo '</div>';


	echo '</div>';
echo '</div>';
?>

<div class="exames index">
	<h2><?php echo __('Exames'); $totalValor = 0.00; $totalExames = 0; ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th><?php echo 'Nome'; ?></th>
		<th><?php echo 'Data'; ?></th>
		<th><?php echo 'Valor'; ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($exames as $exame): 
		$totalValor += $exame['Procedimento']['preco']; 
		$totalExames++;
	?>
	<tr>
		<td><?php echo h($exame['Procedimento']['nome']); ?>&nbsp;</td>
		<td><?php echo h($exame['Exame']['data']); ?>&nbsp;</td>
		<td><?php echo h($exame['Procedimento']['preco']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo " Total de exames: " . $totalExames . ". Valor total: R$" . $totalValor;
	?>	
	</p>
</div>

</div>