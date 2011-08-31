<?php
/* FlightSchedule Test cases generated on: 2011-05-04 19:02:25 : 1304524945*/
App::import('Model', 'admin.FlightSchedule');

class FlightScheduleTestCase extends CakeTestCase {
	var $fixtures = array('app.flight_schedule');

	function startTest() {
		$this->FlightSchedule =& ClassRegistry::init('FlightSchedule');
	}

	function endTest() {
		unset($this->FlightSchedule);
		ClassRegistry::flush();
	}

}
?>