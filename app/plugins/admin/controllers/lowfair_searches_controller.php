<?php
class LowfairSearchesController extends AdminAppController {

	var $name = 'LowfairSearches';

	function index() {
		$this->LowfairSearch->recursive = 0;
		$this->set('lowfairSearches', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid lowfair search', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('lowfairSearch', $this->LowfairSearch->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->LowfairSearch->create();
			if ($this->LowfairSearch->save($this->data)) {
				$this->Session->setFlash(__('The lowfare search has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lowfare search could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid lowfare search', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->LowfairSearch->save($this->data)) {
				$this->Session->setFlash(__('The lowfare search has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lowfare search could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->LowfairSearch->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for lowfare search', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->LowfairSearch->delete($id)) {
			$this->Session->setFlash(__('Lowfare search deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Lowfare search was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>