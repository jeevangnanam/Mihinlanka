<?php
/* FileTypes Test cases generated on: 2011-05-11 21:51:39 : 1305139899*/
App::import('Controller', 'admin.FileTypes');

class TestFileTypesController extends FileTypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FileTypesControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->FileTypes =& new TestFileTypesController();
		$this->FileTypes->constructClasses();
	}

	function endTest() {
		unset($this->FileTypes);
		ClassRegistry::flush();
	}

}
?>