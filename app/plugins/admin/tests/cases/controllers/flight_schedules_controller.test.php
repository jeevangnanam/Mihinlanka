<?php
/* FlightSchedules Test cases generated on: 2011-05-04 19:15:13 : 1304525713*/
App::import('Controller', 'admin.FlightSchedules');

class TestFlightSchedulesController extends FlightSchedulesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FlightSchedulesControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->FlightSchedules =& new TestFlightSchedulesController();
		$this->FlightSchedules->constructClasses();
	}

	function endTest() {
		unset($this->FlightSchedules);
		ClassRegistry::flush();
	}

}
?>