<?php
class FlightsController extends AdminAppController {

	var $name = 'Flights';

	function index() {
		$this->Flight->recursive = 0;
		$this->set('flights', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid flight', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('flight', $this->Flight->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Flight->create();
			if ($this->Flight->save($this->data)) {
				$this->Session->setFlash(__('The flight has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flight could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid flight', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Flight->save($this->data)) {
				$this->Session->setFlash(__('The flight has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flight could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Flight->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for flight', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Flight->delete($id)) {
			$this->Session->setFlash(__('Flight deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Flight was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>