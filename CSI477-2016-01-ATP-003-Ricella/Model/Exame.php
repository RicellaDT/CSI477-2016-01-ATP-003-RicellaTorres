<?php
App::uses('AppModel', 'Model');
App::uses('Paciente', 'Model');

class Exame extends AppModel {


	public $belongsTo = array(
		'Paciente' => array(
			'className' => 'Paciente',
			'foreignKey' => 'paciente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Procedimento' => array(
			'className' => 'Procedimento',
			'foreignKey' => 'procedimento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function pacientes() {
        $pacienteModel = new Paciente();
        $pacientes = $pacienteModel->find('all');
        return $pacientes;
	}

	public function procedimentos() {
        $procedimentoModel = new Procedimento();
        $procedimentos = $procedimentoModel->find('all');
        return $procedimentos;
	}
}