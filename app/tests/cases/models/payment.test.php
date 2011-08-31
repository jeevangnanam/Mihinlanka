<?php
/* Payment Test cases generated on: 2011-08-09 16:42:05 : 1312897325*/
App::import('Model', 'Payment');

class PaymentTestCase extends CakeTestCase {
	var $fixtures = array('app.payment');

	function startTest() {
		$this->Payment =& ClassRegistry::init('Payment');
	}

	function endTest() {
		unset($this->Payment);
		ClassRegistry::flush();
	}

}
?>