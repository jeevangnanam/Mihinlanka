<?php
/* SiteSections Test cases generated on: 2011-05-11 22:01:21 : 1305140481*/
App::import('Controller', 'admin.SiteSections');

class TestSiteSectionsController extends SiteSectionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SiteSectionsControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->SiteSections =& new TestSiteSectionsController();
		$this->SiteSections->constructClasses();
	}

	function endTest() {
		unset($this->SiteSections);
		ClassRegistry::flush();
	}

}
?>