<?php
/* Payments Test cases generated on: 2011-08-08 19:24:02 : 1312820642*/
App::import('Controller', 'Payments');

class TestPaymentsController extends PaymentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PaymentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.payment', 'app.promotion', 'app.shopping_order');

	function startTest() {
		$this->Payments =& new TestPaymentsController();
		$this->Payments->constructClasses();
	}

	function endTest() {
		unset($this->Payments);
		ClassRegistry::flush();
	}

}
?>