<?php
App::uses('AppController', 'Controller');
/**
 * Weekends Controller
 *
 * @property Weekend $Weekend
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class WeekendsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Session');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Weekend->recursive = 0;
		$this->set('weekends', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Weekend->exists($id)) {
			throw new NotFoundException(__('Invalid weekend'));
		}
		$options = array('conditions' => array('Weekend.' . $this->Weekend->primaryKey => $id));
		$this->set('weekend', $this->Weekend->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Weekend->create();
			if ($this->Weekend->save($this->request->data)) {
				$this->Session->setFlash(__('The weekend has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The weekend could not be saved. Please, try again.'));
			}
		}
		$couples = $this->Weekend->Couple->find('list');
		$this->set(compact('couples'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Weekend->exists($id)) {
			throw new NotFoundException(__('Invalid weekend'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Weekend->save($this->request->data)) {
				$this->Session->setFlash(__('The weekend has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The weekend could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Weekend.' . $this->Weekend->primaryKey => $id));
			$this->request->data = $this->Weekend->find('first', $options);
		}
		$couples = $this->Weekend->Couple->find('list');
		$this->set(compact('couples'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Weekend->id = $id;
		if (!$this->Weekend->exists()) {
			throw new NotFoundException(__('Invalid weekend'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Weekend->delete()) {
			$this->Session->setFlash(__('The weekend has been deleted.'));
		} else {
			$this->Session->setFlash(__('The weekend could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
