<?php
/* Aco Test cases generated on: 2011-04-05 15:44:56 : 1302007496*/
App::import('Model', 'Aco');

class AcoTestCase extends CakeTestCase {
	var $fixtures = array('app.aco', 'app.aro', 'app.aros_aco');

	function startTest() {
		$this->Aco =& ClassRegistry::init('Aco');
	}

	function endTest() {
		unset($this->Aco);
		ClassRegistry::flush();
	}

}
?>