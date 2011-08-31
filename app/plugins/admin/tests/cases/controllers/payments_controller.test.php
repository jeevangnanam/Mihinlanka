<?php
/* Payments Test cases generated on: 2011-08-09 16:42:54 : 1312897374*/
App::import('Controller', 'admin.Payments');

class TestPaymentsController extends PaymentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PaymentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('plugin.admin.payment', 'app.promotion', 'app.shopping_order');

	function startTest() {
		$this->Payments =& new TestPaymentsController();
		$this->Payments->constructClasses();
	}

	function endTest() {
		unset($this->Payments);
		ClassRegistry::flush();
	}

	function testAdd() {

	}

}
?>