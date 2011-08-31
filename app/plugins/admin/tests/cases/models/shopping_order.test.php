<?php
/* ShoppingOrder Test cases generated on: 2011-05-07 21:55:04 : 1304794504*/
App::import('Model', 'admin.ShoppingOrder');

class ShoppingOrderTestCase extends CakeTestCase {
	var $fixtures = array('app.shopping_order');

	function startTest() {
		$this->ShoppingOrder =& ClassRegistry::init('ShoppingOrder');
	}

	function endTest() {
		unset($this->ShoppingOrder);
		ClassRegistry::flush();
	}

}
?>