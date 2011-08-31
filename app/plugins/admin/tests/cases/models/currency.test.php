<?php
/* Currency Test cases generated on: 2011-05-03 16:34:53 : 1304429693*/
App::import('Model', 'admin.Currency');

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