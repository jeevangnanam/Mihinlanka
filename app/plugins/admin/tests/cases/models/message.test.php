<?php
/* Message Test cases generated on: 2011-05-07 21:53:50 : 1304794430*/
App::import('Model', 'admin.Message');

class MessageTestCase extends CakeTestCase {
	function startTest() {
		$this->Message =& ClassRegistry::init('Message');
	}

	function endTest() {
		unset($this->Message);
		ClassRegistry::flush();
	}

}
?>