<?php
App::uses('AppController', 'Controller');
/**
 * Couples Controller
 *
 * @property Couple $Couple
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CouplesController extends AppController {

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
        
        public $paginator_settings = array(
            'limit' => 10,
        );

        /**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Paginator->settings = $this->paginator_settings;
		$this->set('couples', $this->Paginator->paginate());
                            // start a standard search
                $this->Prg->commonProcess();
                // process the URL parameters
                $params = $this->Prg->parsedParams();
                // generate teh paginator conditions
                $conditions = $this->Couple->parseCriteria($params);
                // add the conditions for paging
                $this->Paginator->settings['conditions'] = $conditions;
                $this->set('couples', $this->Paginator->paginate());
            }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Couple->exists($id)) {
			throw new NotFoundException(__('Invalid couple'));
		}
		$options = array('conditions' => array('Couple.' . $this->Couple->primaryKey => $id));
		$this->set('couple', $this->Couple->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Couple->create();
			if ($this->Couple->save($this->request->data)) {
				$this->Session->setFlash(__('The couple has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The couple could not be saved. Please, try again.'));
			}
		}
		$weekends = $this->Couple->Weekend->find('list');
		$this->set(compact('weekends'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Couple->exists($id)) {
			throw new NotFoundException(__('Invalid couple'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Couple->save($this->request->data)) {
				$this->Session->setFlash(__('The couple has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The couple could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Couple.' . $this->Couple->primaryKey => $id));
			$this->request->data = $this->Couple->find('first', $options);
		}
		$weekends = $this->Couple->Weekend->find('list');
		$this->set(compact('weekends'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Couple->id = $id;
		if (!$this->Couple->exists()) {
			throw new NotFoundException(__('Invalid couple'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Couple->delete()) {
			$this->Session->setFlash(__('The couple has been deleted.'));
		} else {
			$this->Session->setFlash(__('The couple could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
