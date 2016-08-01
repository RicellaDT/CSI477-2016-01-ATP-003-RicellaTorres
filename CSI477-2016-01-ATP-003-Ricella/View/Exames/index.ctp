<div class="exames index">
	<h2><?php echo __('Exames'); ?></h2>
	<div class="actions">
		<?php echo $this->Html->link(__('Novo'), array('controller' => 'pacientes', 
  									'action' => 'index_login'),
				    array('class' => 'btn btn-danger btn-lg', 'target' => '_self')); ?>
	</div>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('paciente'); ?></th>
		<th><?php echo $this->Paginator->sort('procedimento'); ?></th>
		<th><?php echo $this->Paginator->sort('data'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($exames as $exame): ?>
	<tr>
		<td><?php echo h($exame['Paciente']['nome']); ?>&nbsp;</td>
		<td><?php echo h($exame['Procedimento']['nome']); ?>&nbsp;</td>
		<td><?php echo h($exame['Exame']['data']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'editar', $exame['Exame']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $exame['Exame']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $exame['Procedimento']['nome']))); ?>
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