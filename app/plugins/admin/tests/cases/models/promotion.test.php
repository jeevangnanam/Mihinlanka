<?php
/* Promotion Test cases generated on: 2011-05-03 12:59:57 : 1304416797*/
App::import('Model', 'admin.Promotion');

class PromotionTestCase extends CakeTestCase {
	var $fixtures = array('app.promotion');

	function startTest() {
		$this->Promotion =& ClassRegistry::init('Promotion');
	}

	function endTest() {
		unset($this->Promotion);
		ClassRegistry::flush();
	}

}
?>