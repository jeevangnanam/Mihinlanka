<?php
/* Terminal Test cases generated on: 2011-05-04 19:14:26 : 1304525666*/
App::import('Model', 'admin.Terminal');

class TerminalTestCase extends CakeTestCase {
	function startTest() {
		$this->Terminal =& ClassRegistry::init('Terminal');
	}

	function endTest() {
		unset($this->Terminal);
		ClassRegistry::flush();
	}

}
?>