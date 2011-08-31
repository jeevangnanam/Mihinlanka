<?php
class SurveyUsersController extends AppController {

	var $name = 'SurveyUsers';

	function index() {
		$this->SurveyUser->recursive = 0;
		$this->redirect(array('action' => 'add'));
		
	}



	function add() {
            $this->set('banner', 'survey.gif');
		if (!empty($this->data)) {
			$this->SurveyUser->create();
			if ($this->SurveyUser->save($this->data)) {
				$this->Session->setFlash(__('The survey user has been saved', true));
				
				$this->Session->write('survey_user_id',$this->SurveyUser->getLastInsertID());
				$this->Session->write('survey_user_name',$this->data['SurveyUser']['name']);
				$this->redirect(array('controller' => 'survey_questions','action' => 'take'));
			} else {
				$this->Session->setFlash(__('The survey user could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->SurveyUser->Country->find('list');
		$this->set(compact('countries'));
	}

	

	
}
?>