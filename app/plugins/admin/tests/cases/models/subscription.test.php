<?php
/* Subscription Test cases generated on: 2011-05-07 20:58:54 : 1304791134*/
App::import('Model', 'admin.Subscription');

class SubscriptionTestCase extends CakeTestCase {
	function startTest() {
		$this->Subscription =& ClassRegistry::init('Subscription');
	}

	function endTest() {
		unset($this->Subscription);
		ClassRegistry::flush();
	}

}
?>