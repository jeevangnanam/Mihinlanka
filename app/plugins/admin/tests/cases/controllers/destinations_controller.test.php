<?php
/* Destinations Test cases generated on: 2011-05-04 19:26:37 : 1304526397*/
App::import('Controller', 'admin.Destinations');

class TestDestinationsController extends DestinationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DestinationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('plugin.admin.destination', 'app.country', 'app.terminal', 'app.promotion', 'app.shopping_order');

	function startTest() {
		$this->Destinations =& new TestDestinationsController();
		$this->Destinations->constructClasses();
	}

	function endTest() {
		unset($this->Destinations);
		ClassRegistry::flush();
	}

}
?>