<?php
/* Aro Test cases generated on: 2011-04-05 15:44:56 : 1302007496*/
App::import('Model', 'Aro');

class AroTestCase extends CakeTestCase {
	var $fixtures = array('app.aro', 'app.aco', 'app.aros_aco');

	function startTest() {
		$this->Aro =& ClassRegistry::init('Aro');
	}

	function endTest() {
		unset($this->Aro);
		ClassRegistry::flush();
	}

}
?>