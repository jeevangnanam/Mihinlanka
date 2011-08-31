<?php
/* Download Test cases generated on: 2011-05-11 21:51:03 : 1305139863*/
App::import('Model', 'admin.Download');

class DownloadTestCase extends CakeTestCase {
	function startTest() {
		$this->Download =& ClassRegistry::init('Download');
	}

	function endTest() {
		unset($this->Download);
		ClassRegistry::flush();
	}

}
?>