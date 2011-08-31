<?php
/* Currency Test cases generated on: 2011-04-08 18:44:18 : 1302277458*/
App::import('Model', 'Currency');

class CurrencyTestCase extends CakeTestCase {
	var $fixtures = array('app.currency', 'app.promotion');

	function startTest() {
		$this->Currency =& ClassRegistry::init('Currency');
	}

	function endTest() {
		unset($this->Currency);
		ClassRegistry::flush();
	}

}
?>