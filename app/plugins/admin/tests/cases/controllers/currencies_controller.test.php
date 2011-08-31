<?php
/* Currencies Test cases generated on: 2011-05-03 15:59:42 : 1304427582*/
App::import('Controller', 'admin.Currencies');

class TestCurrenciesController extends CurrenciesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CurrenciesControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->Currencies =& new TestCurrenciesController();
		$this->Currencies->constructClasses();
	}

	function endTest() {
		unset($this->Currencies);
		ClassRegistry::flush();
	}

}
?>