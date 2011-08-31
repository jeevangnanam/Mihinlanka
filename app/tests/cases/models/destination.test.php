<?php
/* Destination Test cases generated on: 2011-04-05 15:44:57 : 1302007497*/
App::import('Model', 'Destination');

class DestinationTestCase extends CakeTestCase {
	var $fixtures = array('app.destination');

	function startTest() {
		$this->Destination =& ClassRegistry::init('Destination');
	}

	function endTest() {
		unset($this->Destination);
		ClassRegistry::flush();
	}

}
?>