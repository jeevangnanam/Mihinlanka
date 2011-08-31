<?php
/* Payment Test cases generated on: 2011-08-09 16:42:38 : 1312897358*/
App::import('Model', 'admin.Payment');

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