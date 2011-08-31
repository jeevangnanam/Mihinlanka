<?php
/* Messages Test cases generated on: 2011-05-07 21:54:01 : 1304794441*/
App::import('Controller', 'admin.Messages');

class TestMessagesController extends MessagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MessagesControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->Messages =& new TestMessagesController();
		$this->Messages->constructClasses();
	}

	function endTest() {
		unset($this->Messages);
		ClassRegistry::flush();
	}

}
?>