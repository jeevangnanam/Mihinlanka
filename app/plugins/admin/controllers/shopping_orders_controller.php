<?php
class ShoppingOrdersController extends AdminAppController {

	var $name = 'ShoppingOrders';

	function index() {
		$this->ShoppingOrder->recursive = 0;
                $this->paginate = array(
  'order' => array( 'id' => 'desc'));

		$this->set('shoppingOrders', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid shopping order', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('shoppingOrder', $this->ShoppingOrder->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ShoppingOrder->create();
			if ($this->ShoppingOrder->save($this->data)) {
				$this->Session->setFlash(__('The shopping order has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shopping order could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid shopping order', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ShoppingOrder->save($this->data)) {
				$this->Session->setFlash(__('The shopping order has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shopping order could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ShoppingOrder->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for shopping order', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ShoppingOrder->delete($id)) {
			$this->Session->setFlash(__('Shopping order deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Shopping order was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>