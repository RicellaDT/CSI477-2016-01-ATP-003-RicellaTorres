

<div class="container-fluid">
<div class="row">
<?php 
	echo '<div class="btn-group btn-group-justified" role="group">';



	echo '<div class="btn-group">';
	echo $this->Html->link("Meus Exames",
							array('controller' => 'pacientes',
										'action' => 'list_exames'),
							array('class' => 'btn btn-primary btn-lg'));
	echo '</div>';


	echo '<div class="btn-group">';
	echo $this->Html->link('Sair',
				    '/pages/home',
				    array('class' => 'btn btn-danger btn-lg', 'target' => '_self'));
	echo '</div>';


	echo '</div>';
echo '</div>';
?>

<div class="procedimentos index">
<h2>Lista de Procedimentos</h2>

	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('preco'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($procedimentos as $procedimento): ?>
	<tr>
		<td><?php echo h($procedimento['Procedimento']['id']); ?>&nbsp;</td>
		<td><?php echo h($procedimento['Procedimento']['nome']); ?>&nbsp;</td>
		<td><?php echo h($procedimento['Procedimento']['preco']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Solicitar'), array('controller' => 'exames', 'action' => 'add', $procedimento['Procedimento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>




