<?php
/* Subscriptions Test cases generated on: 2011-05-07 20:58:59 : 1304791139*/
App::import('Controller', 'admin.Subscriptions');

class TestSubscriptionsController extends SubscriptionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SubscriptionsControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->Subscriptions =& new TestSubscriptionsController();
		$this->Subscriptions->constructClasses();
	}

	function endTest() {
		unset($this->Subscriptions);
		ClassRegistry::flush();
	}

}
?>