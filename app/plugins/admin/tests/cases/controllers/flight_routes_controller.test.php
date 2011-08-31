<?php
/* FlightRoutes Test cases generated on: 2011-05-04 19:37:42 : 1304527062*/
App::import('Controller', 'admin.FlightRoutes');

class TestFlightRoutesController extends FlightRoutesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FlightRoutesControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->FlightRoutes =& new TestFlightRoutesController();
		$this->FlightRoutes->constructClasses();
	}

	function endTest() {
		unset($this->FlightRoutes);
		ClassRegistry::flush();
	}

}
?>