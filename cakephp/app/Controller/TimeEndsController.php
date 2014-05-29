<?php
App::uses('AppController', 'Controller');
/**
 * TimeEnds Controller
 *
 * @property TimeEnd $TimeEnd
 * @property PaginatorComponent $Paginator
 */
class TimeEndsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TimeEnd->recursive = 0;
		$this->set('timeEnds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TimeEnd->exists($id)) {
			throw new NotFoundException(__('Invalid time end'));
		}
		$options = array('conditions' => array('TimeEnd.' . $this->TimeEnd->primaryKey => $id));
		$this->set('timeEnd', $this->TimeEnd->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TimeEnd->create();
			if ($this->TimeEnd->save($this->request->data)) {
				$this->Session->setFlash(__('The time end has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time end could not be saved. Please, try again.'));
			}
		}
		$users = $this->TimeEnd->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TimeEnd->exists($id)) {
			throw new NotFoundException(__('Invalid time end'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TimeEnd->save($this->request->data)) {
				$this->Session->setFlash(__('The time end has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time end could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TimeEnd.' . $this->TimeEnd->primaryKey => $id));
			$this->request->data = $this->TimeEnd->find('first', $options);
		}
		$users = $this->TimeEnd->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TimeEnd->id = $id;
		if (!$this->TimeEnd->exists()) {
			throw new NotFoundException(__('Invalid time end'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TimeEnd->delete()) {
			$this->Session->setFlash(__('The time end has been deleted.'));
		} else {
			$this->Session->setFlash(__('The time end could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
