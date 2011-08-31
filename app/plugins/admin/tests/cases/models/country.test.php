<?php
/* Country Test cases generated on: 2011-04-11 13:04:55 : 1302516295*/
App::import('Model', 'admin.Country');

class CountryTestCase extends CakeTestCase {
	var $fixtures = array('app.country');

	function startTest() {
		$this->Country =& ClassRegistry::init('Country');
	}

	function endTest() {
		unset($this->Country);
		ClassRegistry::flush();
	}

}
?>