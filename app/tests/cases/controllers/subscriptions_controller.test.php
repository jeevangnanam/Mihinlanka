<?php
/* Subscriptions Test cases generated on: 2011-06-05 19:09:58 : 1307290198*/
App::import('Controller', 'Subscriptions');

class TestSubscriptionsController extends SubscriptionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SubscriptionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.subscription', 'app.country', 'app.promotion', 'app.shopping_order');

	function startTest() {
		$this->Subscriptions =& new TestSubscriptionsController();
		$this->Subscriptions->constructClasses();
	}

	function endTest() {
		unset($this->Subscriptions);
		ClassRegistry::flush();
	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>