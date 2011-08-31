<?php
/* ShoppingOrders Test cases generated on: 2011-05-07 21:55:16 : 1304794516*/
App::import('Controller', 'admin.ShoppingOrders');

class TestShoppingOrdersController extends ShoppingOrdersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ShoppingOrdersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.shopping_product', 'plugin.admin.shopping_order', 'app.promotion');

	function startTest() {
		$this->ShoppingOrders =& new TestShoppingOrdersController();
		$this->ShoppingOrders->constructClasses();
	}

	function endTest() {
		unset($this->ShoppingOrders);
		ClassRegistry::flush();
	}

	function testCheckout() {

	}

}
?>