<?php
/* TravelAgent Test cases generated on: 2011-05-04 18:02:09 : 1304521329*/
App::import('Model', 'admin.TravelAgent');

class TravelAgentTestCase extends CakeTestCase {
	var $fixtures = array('app.travel_agent');

	function startTest() {
		$this->TravelAgent =& ClassRegistry::init('TravelAgent');
	}

	function endTest() {
		unset($this->TravelAgent);
		ClassRegistry::flush();
	}

}
?>