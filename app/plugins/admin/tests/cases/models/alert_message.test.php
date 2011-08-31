<?php
/* AlertMessage Test cases generated on: 2011-06-10 15:16:09 : 1307708169*/
App::import('Model', 'admin.AlertMessage');

class AlertMessageTestCase extends CakeTestCase {
	function startTest() {
		$this->AlertMessage =& ClassRegistry::init('AlertMessage');
	}

	function endTest() {
		unset($this->AlertMessage);
		ClassRegistry::flush();
	}

}
?>