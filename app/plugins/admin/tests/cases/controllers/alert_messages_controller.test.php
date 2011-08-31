<?php
/* AlertMessages Test cases generated on: 2011-06-10 15:16:18 : 1307708178*/
App::import('Controller', 'admin.AlertMessages');

class TestAlertMessagesController extends AlertMessagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AlertMessagesControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->AlertMessages =& new TestAlertMessagesController();
		$this->AlertMessages->constructClasses();
	}

	function endTest() {
		unset($this->AlertMessages);
		ClassRegistry::flush();
	}

}
?>