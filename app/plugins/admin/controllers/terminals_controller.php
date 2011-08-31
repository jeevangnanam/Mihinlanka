<?php
class TerminalsController extends AdminAppController {

	var $name = 'Terminals';

	function index() {
		$this->Terminal->recursive = 0;
		$this->set('terminals', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid terminal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('terminal', $this->Terminal->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Terminal->create();
			if ($this->Terminal->save($this->data)) {
				$this->Session->setFlash(__('The terminal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The terminal could not be saved. Please, try again.', true));
			}
		}
		$destinations = $this->Terminal->Destination->find('list',array('fields' => array('id','code')));
		$this->set(compact('destinations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid terminal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Terminal->save($this->data)) {
				$this->Session->setFlash(__('The terminal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The terminal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Terminal->read(null, $id);
		}
		$destinations = $this->Terminal->Destination->find('list',array('fields' => array('id','code')));
		$this->set(compact('destinations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for terminal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Terminal->delete($id)) {
			$this->Session->setFlash(__('Terminal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Terminal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>