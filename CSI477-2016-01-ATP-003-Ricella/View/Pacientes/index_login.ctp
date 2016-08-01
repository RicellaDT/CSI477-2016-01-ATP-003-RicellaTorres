<?php 
echo '<div class="btn-group" role="group">';	

echo '<div class="btn-group">';
echo $this->Html->link('Voltar',
				    '/pages/home',
				    array('class' => 'btn btn-danger btn-lg', 'target' => '_self'));
echo '</div>';

echo '</div>';
 ?>

<h1>Acesso ao sistema</h1>

<?php 
	echo $this->Form->create('Paciente',
						array('controller' => 'pacientes',
								'action' => 'login'));

	echo $this->Form->input('login', array('class' => 'form-control', 
											'required' => 'true'));

	echo $this->Form->input('senha', array('class' => 'form-control', 
											'type' => 'password', 
											'required' => 'true'));

	echo $this->Form->end('Entrar');
 ?>