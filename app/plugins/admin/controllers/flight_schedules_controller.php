<?php
class FlightSchedulesController extends AdminAppController {

	var $name = 'FlightSchedules';
  

	function index() {
		$this->FlightSchedule->recursive = 0;
		$this->set('flightSchedules', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid flight schedule', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('flightSchedule', $this->FlightSchedule->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FlightSchedule->create();
			if ($this->FlightSchedule->save($this->data)) {
				$this->Session->setFlash(__('The flight schedule has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flight schedule could not be saved. Please, try again.', true));
			}
		}
               
		$flights = $this->FlightSchedule->Flight->find('list');
		$departureDestinations = $this->FlightSchedule->DepartureDestination->find('list',array('fields' => array('id','code')));
		$departureTerminals = $this->FlightSchedule->DepartureTerminal->find('list',array('fields' => array('id','name')));
		$arrivalDestinations = $this->FlightSchedule->ArrivalDestination->find('list',array('fields' => array('id','code')));
		$arrivalTerminals = $this->FlightSchedule->ArrivalTerminal->find('list',array('fields' => array('id','name')));
		$routes = $this->FlightSchedule->FlightRoute->find('list',array('fields' => array('id','route')));
		$this->set(compact('flights', 'departureDestinations', 'departureTerminals', 'arrivalDestinations', 'arrivalTerminals', 'routes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid flight schedule', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FlightSchedule->save($this->data)) {
				$this->Session->setFlash(__('The flight schedule has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flight schedule could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FlightSchedule->read(null, $id);
		}
		$flights = $this->FlightSchedule->Flight->find('list');
		$departureDestinations = $this->FlightSchedule->DepartureDestination->find('list',array('fields' => array('id','code')));
		$departureTerminals = $this->FlightSchedule->DepartureTerminal->find('list',array('fields' => array('id','name')));
		$arrivalDestinations = $this->FlightSchedule->ArrivalDestination->find('list',array('fields' => array('id','code')));
		$arrivalTerminals = $this->FlightSchedule->ArrivalTerminal->find('list',array('fields' => array('id','name')));
		$routes = $this->FlightSchedule->FlightRoute->find('list',array('fields' => array('id','route')));
		$this->set(compact('flights', 'departureDestinations', 'departureTerminals', 'arrivalDestinations', 'arrivalTerminals', 'routes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for flight schedule', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FlightSchedule->delete($id)) {
			$this->Session->setFlash(__('Flight schedule deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Flight schedule was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>