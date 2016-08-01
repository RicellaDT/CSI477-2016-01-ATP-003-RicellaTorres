<?php
App::uses('AppController', 'Controller');

class ProcedimentosController extends AppController {

	public $components = array('Paginator', 'Flash', 'Session');

	public function index() {
	$this->set('procedimentos', $this->Procedimento->find('all', 
				array('order'=>array('procedimento.nome'=>'asc'))));

	}	

	public function index_pacientes() {
		$options['order'] = array(
            'Procedimento.nome ASC'
        );

		$procedimentos = $this->Procedimento->find('all', $options);
		$this->set('procedimentos', $procedimentos);

		$paciente = $this->Session->read('Paciente');
        $this->set('idPa', $paciente[0]['Paciente']['id']);
	}

	public function index_admin() {
		$this->set('procedimentos', $this->Procedimento->find('all'));
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->Procedimento->create();
			if ($this->Procedimento->save($this->request->data)) {
				$this->Flash->success(__('Novo procedimento inserido'));
				return $this->redirect(array('action' => 'index_admin'));
			} else {
				$this->Flash->error(__('Não foi possível inserir o procedimento. Tente novamente...'));
			}
		}
	}

		public function editar($id = null) {
		if (!$this->Procedimento->exists($id)) {
			throw new NotFoundException(__('Invalid Procedimento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Procedimento->save($this->request->data)) {
				$this->Flash->success(__('Edições concluídas.'));
				return $this->redirect(array('action' => 'index_admin'));
			} else {
				$this->Flash->error(__('Não foi possível concluir as edições.'));
			}
		} else {
			$options = array('conditions' => array('Procedimento.' . $this->Procedimento->primaryKey => $id));
			$this->request->data = $this->Procedimento->find('first', $options);
		}
	}


	public function delete($id = null) {
		$this->Procedimento->id = $id;
		if (!$this->Procedimento->exists()) {
			throw new NotFoundException(__('Invalid Procedimento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Procedimento->delete()) {
			$this->Flash->success(__('O procedimento foi deletado'));
		} else {
			$this->Flash->error(__('O paciente não pode ser cancelado. Tente novamente...'));
		}
		return $this->redirect(array('action' => 'index_admin'));
	}
}



