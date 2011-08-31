<?php
/* Subscription Test cases generated on: 2011-06-05 19:09:29 : 1307290169*/
App::import('Model', 'Subscription');

class SubscriptionTestCase extends CakeTestCase {
	var $fixtures = array('app.subscription', 'app.country');

	function startTest() {
		$this->Subscription =& ClassRegistry::init('Subscription');
	}

	function endTest() {
		unset($this->Subscription);
		ClassRegistry::flush();
	}

}
?>