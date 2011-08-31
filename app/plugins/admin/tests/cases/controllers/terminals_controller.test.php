<?php
/* Terminals Test cases generated on: 2011-05-04 19:24:50 : 1304526290*/
App::import('Controller', 'admin.Terminals');

class TestTerminalsController extends TerminalsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TerminalsControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->Terminals =& new TestTerminalsController();
		$this->Terminals->constructClasses();
	}

	function endTest() {
		unset($this->Terminals);
		ClassRegistry::flush();
	}

}
?>