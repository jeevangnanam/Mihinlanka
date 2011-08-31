<?php
/* Downloads Test cases generated on: 2011-05-11 22:03:10 : 1305140590*/
App::import('Controller', 'admin.Downloads');

class TestDownloadsController extends DownloadsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DownloadsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.promotion', 'app.shopping_order');

	function startTest() {
		$this->Downloads =& new TestDownloadsController();
		$this->Downloads->constructClasses();
	}

	function endTest() {
		unset($this->Downloads);
		ClassRegistry::flush();
	}

	function testForm() {

	}

}
?>