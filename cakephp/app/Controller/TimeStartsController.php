<?php
App::uses('AppController', 'Controller');
/**
 * TimeStarts Controller
 *
 * @property TimeStart $TimeStart
 * @property PaginatorComponent $Paginator
 */
class TimeStartsController extends AppController {

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
		$this->TimeStart->recursive = 0;
		$this->set('timeStarts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TimeStart->exists($id)) {
			throw new NotFoundException(__('Invalid time start'));
		}
		$options = array('conditions' => array('TimeStart.' . $this->TimeStart->primaryKey => $id));
		$this->set('timeStart', $this->TimeStart->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TimeStart->create();
			if ($this->TimeStart->save($this->request->data)) {
				$this->Session->setFlash(__('The time start has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time start could not be saved. Please, try again.'));
			}
		}
		$users = $this->TimeStart->User->find('list');
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
		if (!$this->TimeStart->exists($id)) {
			throw new NotFoundException(__('Invalid time start'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TimeStart->save($this->request->data)) {
				$this->Session->setFlash(__('The time start has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time start could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TimeStart.' . $this->TimeStart->primaryKey => $id));
			$this->request->data = $this->TimeStart->find('first', $options);
		}
		$users = $this->TimeStart->User->find('list');
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
		$this->TimeStart->id = $id;
		if (!$this->TimeStart->exists()) {
			throw new NotFoundException(__('Invalid time start'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TimeStart->delete()) {
			$this->Session->setFlash(__('The time start has been deleted.'));
		} else {
			$this->Session->setFlash(__('The time start could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
