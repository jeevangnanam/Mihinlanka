<?php
/* SurveyUser Test cases generated on: 2011-05-23 11:45:45 : 1306140345*/
App::import('Model', 'SurveyUser');

class SurveyUserTestCase extends CakeTestCase {
	var $fixtures = array('app.survey_user', 'app.country');

	function startTest() {
		$this->SurveyUser =& ClassRegistry::init('SurveyUser');
	}

	function endTest() {
		unset($this->SurveyUser);
		ClassRegistry::flush();
	}

}
?>