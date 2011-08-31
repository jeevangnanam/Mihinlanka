<?php
/* Banner Test cases generated on: 2011-05-02 09:52:52 : 1304319172*/
App::import('Model', 'admin.Banner');

class BannerTestCase extends CakeTestCase {
	function startTest() {
		$this->Banner =& ClassRegistry::init('Banner');
	}

	function endTest() {
		unset($this->Banner);
		ClassRegistry::flush();
	}

}
?>