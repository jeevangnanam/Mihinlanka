<?php
/* FlightRoute Test cases generated on: 2011-05-07 18:53:27 : 1304783607*/
App::import('Model', 'FlightRoute');

class FlightRouteTestCase extends CakeTestCase {
	var $fixtures = array('app.flight_route');

	function startTest() {
		$this->FlightRoute =& ClassRegistry::init('FlightRoute');
	}

	function endTest() {
		unset($this->FlightRoute);
		ClassRegistry::flush();
	}

}
?>