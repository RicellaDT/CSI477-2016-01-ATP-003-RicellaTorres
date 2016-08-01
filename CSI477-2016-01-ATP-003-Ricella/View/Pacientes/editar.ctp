<div class="pacientes form">
<?php echo $this->Form->create('Paciente'); ?>
	<fieldset>
		<legend><?php echo __('Editar Dados do Paciente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('login');
		echo $this->Form->input('senha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<?php 
echo '<div class="btn-group" role="group">';	

echo '<div class="btn-group">';
echo $this->Html->link('Voltar',
				    '/pages/home',
				    array('class' => 'btn btn-danger btn-lg', 'target' => '_self'));
echo '</div>';

echo '</div>';
 ?>