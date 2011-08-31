<?php
/* TravelAgents Test cases generated on: 2011-05-04 18:02:28 : 1304521348*/
App::import('Controller', 'admin.TravelAgents');

class TestTravelAgentsController extends TravelAgentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TravelAgentsControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->TravelAgents =& new TestTravelAgentsController();
		$this->TravelAgents->constructClasses();
	}

	function endTest() {
		unset($this->TravelAgents);
		ClassRegistry::flush();
	}

}
?>