<div class="pacientes index">
	<h2><?php echo __('Pacientes'); $total = 0; $valorTotal = 0; ?></h2>
	<div class="actions">
		<?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?>
	</div>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('nome'); ?></th>
		<th><?php echo $this->Paginator->sort('login'); ?></th>
		<th><?php echo $this->Paginator->sort('senha'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pacientes as $paciente): ?>
	<tr>
		<td><?php echo h($paciente['Paciente']['nome']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['login']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['senha']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'editar', $paciente['Paciente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $paciente['Paciente']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $paciente['Paciente']['nome']))); ?>
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
