<?php
class TravelAgentsController extends AdminAppController {

	var $name = 'TravelAgents';

	function index() {
             
		$this->TravelAgent->recursive = 0;

                if(isset($this->data['TravelAgent']['agents'])){
                    $this->set('travelAgents', $this->paginate('TravelAgent',array('TravelAgent.name like  ' => "%".trim($this->data['TravelAgent']['agents'])."%")));
                }else{
                    $this->set('travelAgents', $this->paginate());
                }
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid travel agent', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('travelAgent', $this->TravelAgent->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TravelAgent->create();
			if ($this->TravelAgent->save($this->data)) {
				$this->Session->setFlash(__('The travel agent has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The travel agent could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->TravelAgent->Country->find('list');
		$this->set(compact('countries'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid travel agent', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TravelAgent->save($this->data)) {
				$this->Session->setFlash(__('The travel agent has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The travel agent could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TravelAgent->read(null, $id);
		}
		$countries = $this->TravelAgent->Country->find('list');
		$this->set(compact('countries'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for travel agent', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TravelAgent->delete($id)) {
			$this->Session->setFlash(__('Travel agent deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Travel agent was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>