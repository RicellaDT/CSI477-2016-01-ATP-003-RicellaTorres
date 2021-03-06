<div class="procedimentos form">
<?php echo $this->Form->create('Exame'); ?>
	<fieldset>
		<legend><?php echo __('Editar Exame'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('data', array(
	    'type' => 'date',
	    'label' => 'Data prevista',
	    'dateFormat' => 'DMY',
	    'minYear' => date('Y'),
	    'maxYear' => date('Y') + 18,
	    'value' => array(
    	'day' => substr($exame['Exame']['data'], 0, 2),
    	'month' => substr($exame['Exame']['data'], 3, 5),
    	'year' => substr($exame['Exame']['data'], 6, 10)
    	)
	));
		echo $this->Form->input('paciente_id');
		echo $this->Form->input('procedimento_id');
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