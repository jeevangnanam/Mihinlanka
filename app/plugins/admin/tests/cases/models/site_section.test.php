<?php
/* SiteSection Test cases generated on: 2011-05-11 21:50:52 : 1305139852*/
App::import('Model', 'admin.SiteSection');

class SiteSectionTestCase extends CakeTestCase {
	function startTest() {
		$this->SiteSection =& ClassRegistry::init('SiteSection');
	}

	function endTest() {
		unset($this->SiteSection);
		ClassRegistry::flush();
	}

}
?>