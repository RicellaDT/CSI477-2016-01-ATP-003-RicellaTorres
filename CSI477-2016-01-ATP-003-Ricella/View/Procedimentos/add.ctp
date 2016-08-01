<div class="procedimentos form">
<?php echo $this->Form->create('Procedimento'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Novo Procedimento'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('preco');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Adicionar')); ?>
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