<?php
class SubscriptionsController extends AppController {

	var $name = 'Subscriptions';
	

	/*function index() {
		$this->Subscription->recursive = 0;
		$this->set('subscriptions', $this->paginate());
	}*/

	/*function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid subscription', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subscription', $this->Subscription->read(null, $id));
	}*/

	function thankyou(){
		$this->set('title_for_layout',"Subscribe for new updates");
		
        $this->set('banner', 'subscribe.jpg');
		}
	function add() {
		$this->set('title_for_layout',"Subscribe for new updates");
		
        $this->set('banner', 'subscribe.jpg');
		uses('sanitize');
		if (!empty($this->data)) {
			$this->data = Sanitize::clean($this->data, array('encode' => false,'clean' => true));
			$this->Subscription->create();
			if ($this->Subscription->save($this->data)) {
				$this->Session->setFlash(__('The subscription has been saved', true));
				$this->redirect(array('action' => 'thankyou'));
			} else {
				$this->Session->setFlash(__('The subscription could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->Subscription->Country->find('list');
		$this->set(compact('countries'));
	}

	/*function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid subscription', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subscription->save($this->data)) {
				$this->Session->setFlash(__('The subscription has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subscription->read(null, $id);
		}
		$countries = $this->Subscription->Country->find('list');
		$this->set(compact('countries'));
	}*/

	/*function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for subscription', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Subscription->delete($id)) {
			$this->Session->setFlash(__('Subscription deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Subscription was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}*/
}
?>