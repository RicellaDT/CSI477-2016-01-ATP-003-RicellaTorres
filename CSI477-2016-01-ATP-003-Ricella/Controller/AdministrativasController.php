<?php
App::uses('AppController', 'Controller');

class AdministrativasController extends AppController {


	public $components = array('Paginator', 'Flash', 'Session');


	public function index() {
	}

	public function list_pacientes() {
	}	

	public function list_exames() {
		$this->redirect(array('controller' => 'exames',
                                    'action' => 'index'));
	}	

	public function list_exames_paciente($id = null) {
	}

	public function list_exames_procedimento($id = null) {
	}

}