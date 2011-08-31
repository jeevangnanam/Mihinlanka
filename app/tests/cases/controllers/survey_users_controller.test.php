<?php
/* SurveyUsers Test cases generated on: 2011-05-23 13:54:57 : 1306148097*/
App::import('Controller', 'SurveyUsers');

class TestSurveyUsersController extends SurveyUsersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SurveyUsersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.survey_user', 'app.country', 'app.promotion', 'app.shopping_order');

	function startTest() {
		$this->SurveyUsers =& new TestSurveyUsersController();
		$this->SurveyUsers->constructClasses();
	}

	function endTest() {
		unset($this->SurveyUsers);
		ClassRegistry::flush();
	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>