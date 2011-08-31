<?php
/* LowfairSearches Test cases generated on: 2011-07-20 12:49:29 : 1311155369*/
App::import('Controller', 'admin.LowfairSearches');

class TestLowfairSearchesController extends LowfairSearchesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LowfairSearchesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.lowfair_searches', 'app.promotion', 'app.shopping_order');

	function startTest() {
		$this->LowfairSearches =& new TestLowfairSearchesController();
		$this->LowfairSearches->constructClasses();
	}

	function endTest() {
		unset($this->LowfairSearches);
		ClassRegistry::flush();
	}

	function testSearch() {

	}

}
?>