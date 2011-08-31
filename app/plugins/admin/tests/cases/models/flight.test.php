<?php
/* Flight Test cases generated on: 2011-05-07 08:12:03 : 1304745123*/
App::import('Model', 'admin.Flight');

class FlightTestCase extends CakeTestCase {
	function startTest() {
		$this->Flight =& ClassRegistry::init('Flight');
	}

	function endTest() {
		unset($this->Flight);
		ClassRegistry::flush();
	}

}
?>