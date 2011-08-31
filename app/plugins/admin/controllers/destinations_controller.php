<?php
class DestinationsController extends AdminAppController {

	var $name = 'Destinations';

	function index() {
       


		$this->Destination->recursive = 0;
		$this->set('destinations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid destination', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('destination', $this->Destination->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Destination->create();
			if ($this->Destination->save($this->data)) {
				$this->Session->setFlash(__('The destination has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The destination could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->Destination->Country->find('list');
		$this->set(compact('countries'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid destination', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Destination->save($this->data)) {
				$this->Session->setFlash(__('The destination has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The destination could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Destination->read(null, $id);
		}
		$countries = $this->Destination->Country->find('list');
		$this->set(compact('countries'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for destination', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Destination->delete($id)) {
			$this->Session->setFlash(__('Destination deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Destination was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>