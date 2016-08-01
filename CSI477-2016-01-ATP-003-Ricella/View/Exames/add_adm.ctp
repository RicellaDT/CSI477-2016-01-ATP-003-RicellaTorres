<div class="procedimentos form">
<?php echo $this->Form->create('Exame'); ?>
	<fieldset>
		<legend><?php echo __('Agendar exame'); ?></legend>
	<?php
		echo $this->Form->input('data', array(
    'type' => 'date',
    'label' => 'Data prevista',
    'dateFormat' => 'DMY',
    'minYear' => date('Y'),
    'maxYear' => date('Y') + 18
		));
		echo $this->Form->input('paciente_id');
		echo $this->Form->input('procedimento_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agendar')); ?>
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