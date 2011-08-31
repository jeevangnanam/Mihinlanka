<?php
/* Banners Test cases generated on: 2011-05-02 10:10:10 : 1304320210*/
App::import('Controller', 'admin.Banners');

class TestBannersController extends BannersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BannersControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->Banners =& new TestBannersController();
		$this->Banners->constructClasses();
	}

	function endTest() {
		unset($this->Banners);
		ClassRegistry::flush();
	}

}
?>