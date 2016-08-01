<?php
App::uses('AppController', 'Controller');

class PacientesController extends AppController {


	public $components = array('Paginator', 'Flash', 'Session');
	public $helpers = array('Html', 'Form');


	public function home($id){
		$this->set('paciente', $this->Paciente->findById($id)); 
	}



	public function index_login() {
	        
	}


	public function validar() {
	    	$paciente = $this->Paciente->findAllByLoginAndSenha(
	    								$this->data['Paciente']['login'],
	    								$this->data['Paciente']['senha']);
	    	if (!empty($paciente)) {
	    		return $paciente;
	    	} else {
	    		return false;
	    	}
	    }

	    public function login() {
	        if (!empty($this->data['Paciente']['login']) and
	        	!empty($this->data['Paciente']['senha'])) {
	        	$paciente = $this->validar();

	        	if ($paciente != false) {
	        		$this->Session->write('Paciente', $paciente);

	        		$this->set('paciente', $paciente);
	        		$this->redirect(array('controller' => 'pacientes',
	        							'action' => 'home', $paciente['0']['Paciente']['id']));
	        		exit();
	        	} else {
	        		$this->Flash->set('Login e/ou senha inválidos!');
	        		$this->redirect(array('action' => 'index_login'));
	        		exit();
	        	}
	        } else {
	        	$this->redirect(array('action' => 'index_login'));
	        	exit();
	        }
	    }

	    public function logout() {
	        $this->Session->destroy();
	        $this->redirect('/');
	        exit();
	    }

	public function index() {
		$options['order'] = array(
			'Paciente.nome ASC'
		);

		$pacientes = $this->Paciente->find('all', $options);
		$this->set('pacientes', $pacientes);

		$procedimentos = $this->Paciente->procedimentos();
		$this->set('procedimentos', $procedimentos);
	}
	
	public function list_exames($id = null) {
		$options['conditions'] = array(
			'Paciente.id' => $id
		);

		$options['order'] = array(
			'Exame.data DESC',
			'Procedimento.nome'
		);

		$this->set('exames', $this->Paciente->Exame->find('all', $options));
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->Paciente->create();
			if ($this->Paciente->save($this->request->data)) {
				$this->Flash->success(__('Novo paciente inserido.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('O paciente não pode ser inserido. Tente novamente...'));
			}
		}
	}

	public function editar($id = null) {
		if (!$this->Paciente->exists($id)) {
			throw new NotFoundException(__('Invalid Paciente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Paciente->save($this->request->data)) {
				$this->Flash->success(__('Edições concluídas.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Não foi possível concluir as edições.'));
			}
		} else {
			$options = array('conditions' => array('Paciente.' . $this->Paciente->primaryKey => $id));
			$this->request->data = $this->Paciente->find('first', $options);
		}
	}


	public function delete($id = null) {
		$this->Paciente->id = $id;
		if (!$this->Paciente->exists()) {
			throw new NotFoundException(__('Invalid Paciente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Paciente->delete()) {
			$this->Flash->success(__('O paciente foi deletado'));
		} else {
			$this->Flash->error(__('O paciente não pode ser cancelado. Tente novamente...'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
