
<h1>Área Administrativa</h1>

<div class="container-fluid">
<div class="row">
<?php 
	echo '<div class="btn-group btn-group-justified" role="group">';

	echo '<div class="btn-group">';
	echo $this->Html->link("Listar Procedimentos",
							array('controller' => 'procedimentos',
										'action' => 'index_admin'),
							array('class' => 'btn btn-primary btn-lg'));
	echo '</div>';


	echo '<div class="btn-group">';
	echo $this->Html->link("Listar Pacientes",
							array('controller' => 'pacientes',
										'action' => 'index'),
							array('class' => 'btn btn-primary btn-lg'));
	echo '</div>';


	echo '<div class="btn-group">';
	echo $this->Html->link("Listar  Exames",
							array('controller' => 'exames',
										'action' => 'index'),
							array('class' => 'btn btn-success btn-lg'));
 	echo '</div>';


	echo '<div class="btn-group">';
	echo $this->Html->link("Relatório Completo",
							array('controller' => 'exames',
										'action' => 'todosexames'),
							array('class' => 'btn btn-success btn-lg'));
 	echo '</div>';



	echo '<div class="btn-group">';
	echo $this->Html->link('Voltar',
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



