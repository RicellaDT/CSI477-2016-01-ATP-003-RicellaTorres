
<h1>Área do Paciente </h1>
<h1><?php echo $paciente['Paciente']['nome']; ?></h1>
<h4>Login: <?php echo $paciente['Paciente']['login']; ?></h4>
<br/><br/>


<div class="container-fluid">
<div class="row">
<?php 
	echo '<div class="btn-group btn-group-justified" role="group">';

	echo '<div class="btn-group">';
	echo $this->Html->link("Marcar Novo Exame",
							array('controller' => 'procedimentos',
										'action' => 'index_pacientes'),
							array('class' => 'btn btn-success btn-lg'));
 	echo '</div>';

	echo '<div class="btn-group">';
	echo $this->Html->link("Meus Exames",
							array('controller' => 'pacientes',
										'action' => 'list_exames', $paciente['Paciente']['id']),
							array('class' => 'btn btn-primary btn-lg'));
	echo '</div>';


	echo '<div class="btn-group">';
	echo $this->Html->link('Sair',
				    '/pages/home',
				    array('class' => 'btn btn-danger btn-lg', 'target' => '_self'));
	echo '</div>';


	echo '</div>';
echo '</div>';

echo '<br>';
echo '<div class="container-fluid">';
	echo $this->Html->image('main.jpg', array('class' => 'img-responsive'));
echo '</div>';

/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');

if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;

?>
</div>


</div>

