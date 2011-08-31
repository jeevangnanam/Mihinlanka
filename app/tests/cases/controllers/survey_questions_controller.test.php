<?php
/* SurveyQuestions Test cases generated on: 2011-05-23 09:19:09 : 1306131549*/
App::import('Controller', 'SurveyQuestions');

class TestSurveyQuestionsController extends SurveyQuestionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SurveyQuestionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.survey_question', 'app.promotion', 'app.shopping_order');

	function startTest() {
		$this->SurveyQuestions =& new TestSurveyQuestionsController();
		$this->SurveyQuestions->constructClasses();
	}

	function endTest() {
		unset($this->SurveyQuestions);
		ClassRegistry::flush();
	}

}
?>