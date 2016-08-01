<div class="procedimentos index">
	<h2><?php echo __('Procedimentos'); $total = 0; $valorTotal = 0; ?></h2>
	<div class="actions">
		<?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?>
	</div>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('nome'); ?></th>
		<th><?php echo $this->Paginator->sort('preco'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($procedimentos as $procedimento): ?>
	<tr>
		<td><?php echo h($procedimento['Procedimento']['nome']); ?>&nbsp;</td>
		<td><?php echo h('R$' . $procedimento['Procedimento']['preco']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'editar', $procedimento['Procedimento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $procedimento['Procedimento']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $procedimento['Procedimento']['nome']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<?php 
 	echo '<div class="btn-group">';
	echo $this->Html->link("Área Administrativa",
							array('controller' => 'administrativas',
										'action' => 'index'),
							array('class' => 'btn btn-danger btn-lg'));
	echo '</div>';

echo '</div>';
?>
