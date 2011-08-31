<?php
/* FileType Test cases generated on: 2011-05-11 21:50:29 : 1305139829*/
App::import('Model', 'admin.FileType');

class FileTypeTestCase extends CakeTestCase {
	function startTest() {
		$this->FileType =& ClassRegistry::init('FileType');
	}

	function endTest() {
		unset($this->FileType);
		ClassRegistry::flush();
	}

}
?>