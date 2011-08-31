<?php
/* ArosAco Test cases generated on: 2011-04-05 15:44:56 : 1302007496*/
App::import('Model', 'ArosAco');

class ArosAcoTestCase extends CakeTestCase {
	var $fixtures = array('app.aros_aco', 'app.aro', 'app.aco');

	function startTest() {
		$this->ArosAco =& ClassRegistry::init('ArosAco');
	}

	function endTest() {
		unset($this->ArosAco);
		ClassRegistry::flush();
	}

}
?>