<?php
/* SurveyQuestion Test cases generated on: 2011-05-23 09:18:15 : 1306131495*/
App::import('Model', 'SurveyQuestion');

class SurveyQuestionTestCase extends CakeTestCase {
	var $fixtures = array('app.survey_question');

	function startTest() {
		$this->SurveyQuestion =& ClassRegistry::init('SurveyQuestion');
	}

	function endTest() {
		unset($this->SurveyQuestion);
		ClassRegistry::flush();
	}

}
?>