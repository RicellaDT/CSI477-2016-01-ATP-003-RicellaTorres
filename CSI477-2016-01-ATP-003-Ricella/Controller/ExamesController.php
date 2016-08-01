<?php
App::uses('AppController', 'Controller');

class ExamesController extends AppController {


	public $components = array('Paginator', 'Flash', 'Session');


	public function index() {
		$options['order'] = array(
			'Exame.data DESC'
		);

		$exames = $this->Exame->find('all', $options);
		$this->set('exames', $exames);
	}

	public function todosexames() {
		$pacientes = $this->Exame->pacientes();
		$this->set('pacientes', $pacientes);

		$procedimentos = $this->Exame->procedimentos();
		$this->set('procedimentos', $procedimentos);
	}

		/*public function examespacientes() {
		$pacientes = $this->Exame->pacientes();
		$this->set('pacientes', $pacientes);

		$procedimentos = $this->Exame->procedimentos();
		$this->set('procedimentos', $procedimentos);
	}*/


	public function add($id = null) {
		if (!$this->Session->check('Paciente')) {
            $this->redirect(array('controller' => 'pacientes',
                                    'action' => 'index_login'));
            exit();
        } 

        $paciente = $this->Session->read('Paciente');
        $idPa = $paciente[0]['Paciente']['id'];

        $this->request->data['Exame']['paciente_id'] = $idPa;
        $this->request->data['Exame']['procedimento_id'] = $id;

		if ($this->request->is('post')) {
			$this->Exame->create();

			$this->request->data['Exame']['data'] = 
				$this->request->data['Exame']['data']['day'] . "/" .
				$this->request->data['Exame']['data']['month'] . "/" .
				$this->request->data['Exame']['data']['year'];
				
			if ($this->Exame->save($this->request->data)) {
				$this->Flash->success(__('Seu exame foi agendado.'));
				return $this->redirect(array('controller' => 'pacientes', 'action' => 'home', $idPa));
			} else {
				$this->Flash->error(__('Não foi possível agendar o exame. Tente novamente..'));
			}
		}
	}


	public function add_admin() {
		if ($this->request->is('post')) {
			$this->Exame->create();

			$this->request->data['Exame']['data'] = 
				$this->request->data['Exame']['data']['day'] . "/" .
				$this->request->data['Exame']['data']['month'] . "/" .
				$this->request->data['Exame']['data']['year'];

			if ($this->Exame->save($this->request->data)) {
				$this->Flash->success(__('Exame agendado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Não foi possível agendar o exame. Tente novamente...'));
			}
		}

		$pacientes = $this->Exame->Paciente->find('list', array('fields' => array('Paciente.id', 'Paciente.nome')));
		$this->set(compact('pacientes'));

		$procedimentos = $this->Exame->Procedimento->find('list', array('fields' => array('Procedimento.id', 'Procedimento.nome')));
		$this->set(compact('procedimentos'));
	}
	
	public function editar($id = null) {
		if (!$this->Exame->exists($id)) {
			throw new NotFoundException(__('Invalid Exame'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Exame']['data'] = 
				$this->request->data['Exame']['data']['day'] . "/" .
				$this->request->data['Exame']['data']['month'] . "/" .
				$this->request->data['Exame']['data']['year'];

			if ($this->Exame->save($this->request->data)) {
				$this->Flash->success(__('Edições concluídas.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Não foi possível concluir as edições.'));
			}
		} else {
			$options = array('conditions' => array('Exame.' . $this->Exame->primaryKey => $id));
			$this->request->data = $this->Exame->find('first', $options);

			$pacientes = $this->Exame->Paciente->find('list', array('fields' => array('Paciente.id', 'Paciente.nome')));
			$this->set(compact('pacientes'));

			$procedimentos = $this->Exame->Procedimento->find('list', array('fields' => array('Procedimento.id', 'Procedimento.nome')));
			$this->set(compact('procedimentos'));

			$this->set('exame', $this->Exame->findById($id));
		}
	}


	public function delete($id = null) {
		$this->Exame->id = $id;
		if (!$this->Exame->exists()) {
			throw new NotFoundException(__('Invalid Exame'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Exame->delete()) {
			$this->Flash->success(__('Exame CANCELADO!'));
		} else {
			$this->Flash->error(__('O exame não pode ser cancelado. Tente novamente...'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
