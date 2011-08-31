<?php
/* LowfairSearch Test cases generated on: 2011-07-20 12:49:06 : 1311155346*/
App::import('Model', 'admin.LowfairSearch');

class LowfairSearchTestCase extends CakeTestCase {
	var $fixtures = array('app.lowfair_search');

	function startTest() {
		$this->LowfairSearch =& ClassRegistry::init('LowfairSearch');
	}

	function endTest() {
		unset($this->LowfairSearch);
		ClassRegistry::flush();
	}

}
?>