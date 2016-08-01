<?php
App::uses('AppModel', 'Model');

class Procedimento extends AppModel {


/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Exame' => array(
			'className' => 'Exame',
			'foreignKey' => 'procedimento_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}