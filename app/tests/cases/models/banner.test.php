<?php
/* Banner Test cases generated on: 2011-05-03 12:47:38 : 1304416058*/
App::import('Model', 'Banner');

class BannerTestCase extends CakeTestCase {
	var $fixtures = array('app.banner');

	function startTest() {
		$this->Banner =& ClassRegistry::init('Banner');
	}

	function endTest() {
		unset($this->Banner);
		ClassRegistry::flush();
	}

}
?>