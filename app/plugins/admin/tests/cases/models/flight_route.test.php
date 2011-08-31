<?php
/* FlightRoute Test cases generated on: 2011-05-04 19:33:43 : 1304526823*/
App::import('Model', 'admin.FlightRoute');

class FlightRouteTestCase extends CakeTestCase {
	function startTest() {
		$this->FlightRoute =& ClassRegistry::init('FlightRoute');
	}

	function endTest() {
		unset($this->FlightRoute);
		ClassRegistry::flush();
	}

}
?>