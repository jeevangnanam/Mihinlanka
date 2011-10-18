<?php
class UnsubscriptionsController extends AppController {

	var $name = 'Unsubscriptions';


		var $components = array('MailchimpApi'); 
		//var $helpers = array('Mailchimp'); 
		 var $helpers = array('Html','Mailchimp');

	
	
	function remove($id="") { 
	
		$user_email = $this->data['Unsubscription']['email']; 
		//$id = $this->data['id'];
		$list_id = "22668373e5";
	
		$remove = $this->MailchimpApi->remove($id,$user_email); 
		if($remove) { 
			$this->Session->setFlash('Email successfully removed from your list.'); 
		} else { 
			$this->Session->setFlash('Oops, something went wrong.  Email was not removed from the list.'); 
		} 
		
	} 
}