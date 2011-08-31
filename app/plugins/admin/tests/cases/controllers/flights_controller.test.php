<?php
/* Flights Test cases generated on: 2011-05-07 08:12:23 : 1304745143*/
App::import('Controller', 'admin.Flights');

class TestFlightsController extends FlightsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FlightsControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->Flights =& new TestFlightsController();
		$this->Flights->constructClasses();
	}

	function endTest() {
		unset($this->Flights);
		ClassRegistry::flush();
	}

}
?>