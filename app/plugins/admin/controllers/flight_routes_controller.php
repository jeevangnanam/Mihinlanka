<?php
class FlightRoutesController extends AdminAppController {

	var $name = 'FlightRoutes';

	function index() {
		$this->FlightRoute->recursive = 0;
		$this->set('flightRoutes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid flight route', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('flightRoute', $this->FlightRoute->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FlightRoute->create();
			if ($this->FlightRoute->save($this->data)) {
				$this->Session->setFlash(__('The flight route has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flight route could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid flight route', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FlightRoute->save($this->data)) {
				$this->Session->setFlash(__('The flight route has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flight route could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FlightRoute->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for flight route', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FlightRoute->delete($id)) {
			$this->Session->setFlash(__('Flight route deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Flight route was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>