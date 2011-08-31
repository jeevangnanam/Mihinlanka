<?php
/* Promotions Test cases generated on: 2011-05-03 13:01:10 : 1304416870*/
App::import('Controller', 'admin.Promotions');

class TestPromotionsController extends PromotionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PromotionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('plugin.admin.promotion', 'app.currency', 'app.destination', 'app.shopping_order');

	function startTest() {
		$this->Promotions =& new TestPromotionsController();
		$this->Promotions->constructClasses();
	}

	function endTest() {
		unset($this->Promotions);
		ClassRegistry::flush();
	}

	function testDisplay() {

	}

	function testHsbcPromotionOne() {

	}

	function testJakartaPromotionOne() {

	}

}
?>