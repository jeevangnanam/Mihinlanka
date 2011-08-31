<?php
class AlertMessagesController extends AdminAppController {

	var $name = 'AlertMessages';

	function index() {
		$this->AlertMessage->recursive = 0;
		$this->set('alertMessages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid alert message', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('alertMessage', $this->AlertMessage->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AlertMessage->create();
			if ($this->AlertMessage->save($this->data)) {
				$this->Session->setFlash(__('The alert message has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alert message could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid alert message', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AlertMessage->save($this->data)) {
				$this->Session->setFlash(__('The alert message has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alert message could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AlertMessage->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for alert message', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AlertMessage->delete($id)) {
			$this->Session->setFlash(__('Alert message deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Alert message was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>