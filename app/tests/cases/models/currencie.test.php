<?php
/* Currencie Test cases generated on: 2011-04-08 18:29:00 : 1302276540*/
App::import('Model', 'Currencie');

class CurrencieTestCase extends CakeTestCase {
	var $fixtures = array('app.currencie');

	function startTest() {
		$this->Currencie =& ClassRegistry::init('Currencie');
	}

	function endTest() {
		unset($this->Currencie);
		ClassRegistry::flush();
	}

}
?>