<?php
/* Destination Test cases generated on: 2011-05-03 16:52:34 : 1304430754*/
App::import('Model', 'admin.Destination');

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