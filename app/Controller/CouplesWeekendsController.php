<?php
App::uses('AppController', 'Controller');
/**
 * CouplesWeekends Controller
 *
 * @property CouplesWeekend $CouplesWeekend
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CouplesWeekendsController extends AppController {

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
	public $components = array('Paginator', 'Session', 'Search.Prg');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CouplesWeekend->recursive = 0;
		$this->set('couplesWeekends', $this->Paginator->paginate());
                // search
                $this->Prg->commonProcess();
                // process the URL parameters
                $params = $this->Prg->parsedParams();
                // generate teh paginator conditions
                $conditions = $this->CouplesWeekend->parseCriteria($params);
                // add the conditions for paging
                $this->Paginator->settings['conditions'] = $conditions;
                $this->set('couplesWeekends', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CouplesWeekend->exists($id)) {
			throw new NotFoundException(__('Invalid couples weekend'));
		}
		$options = array('conditions' => array('CouplesWeekend.' . $this->CouplesWeekend->primaryKey => $id));
		$this->set('couplesWeekend', $this->CouplesWeekend->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
            
		if (!$this->CouplesWeekend->Couple->exists($id)) {
			throw new NotFoundException(__('Invalid couples'));
		}            
		if ($this->request->is('post')) {
			$this->CouplesWeekend->create();
			if ($this->CouplesWeekend->save($this->request->data)) {
				$this->Session->setFlash(__('The couples weekend has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The couples weekend could not be saved. Please, try again.'));
			}
		} 
		$couples = $this->CouplesWeekend->Couple->find('list', array(
                                'conditions' => array('id' => $id)
                    ));
		$weekends = $this->CouplesWeekend->Weekend->find('list');
		$this->set(compact('couples', 'weekends'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CouplesWeekend->exists($id)) {
			throw new NotFoundException(__('Invalid couples Weekend'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CouplesWeekend->save($this->request->data)) {
				$this->Session->setFlash(__('The couples weekend has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The couples weekend could not be saved. Please, try again.'));
			}
		}else {
			$options = array('conditions' => array('CouplesWeekend.' . $this->CouplesWeekend->primaryKey => $id));
			$this->request->data = $this->CouplesWeekend->find('first', $options);
		} 
                $couples = $this->CouplesWeekend->Couple->find('list');
		$weekends = $this->CouplesWeekend->Weekend->find('list');
		$this->set(compact('couples', 'weekends'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CouplesWeekend->id = $id;
		if (!$this->CouplesWeekend->exists()) {
			throw new NotFoundException(__('Invalid couples weekend'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CouplesWeekend->delete()) {
			$this->Session->setFlash(__('The couples weekend has been deleted.'));
		} else {
			$this->Session->setFlash(__('The couples weekend could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
