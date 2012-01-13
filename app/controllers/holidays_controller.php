<?php
class HolidaysController extends AppController {

	var $name = 'Holidays';
	var $uses = array(); 
	var $helpers = array('Html', 'Javascript','Lightbox','Ajax','Mailchimp');
	var $components = array('Auth');  
	 
	function beforeFilter(){
		$this->Auth->allow('*');
		$this->set('banner', 'holiday_logo.jpg');
	}
	
	function sri_lanka(){
		$this->set('banner', 'holiday_logo.jpg');
		$this->set('title_for_layout', 'HOLIDAYS - SRI LANKA');
	}	
	
	function indonesia(){
		$this->set('banner', 'holiday_logo.jpg');
		$this->set('title_for_layout', 'HOLIDAYS - INDONESIA');
	}
    
	function glimpse_of_sri_lanka(){
		$this->set('banner', 'mihinlanka_1.jpg');
		$this->set('title_for_layout', 'SRI LANKA AT A GLANCE (3 Nights /4 Days)');
		$this->layout = "holiday";
	
	}
		
	function srilanka_at_a_glance(){
		$this->set('banner', 'holiday_logo.jpg');
		$this->set('title_for_layout', 'GLIMPSE OF SRI LANKA (2 Nights /3 Days)');
		$this->layout = "holiday";
		
	}
	
	function jakarta_tour_2(){
		$this->set('banner', 'holiday_logo.jpg');
		$this->layout = "holiday";
		$this->set('title_for_layout', " HOLIDAYS - JAKARTA TOUR (2 NIGHTS / 3 DAYS)");
	}
 
	function jakarta_tour_3(){
		$this->set('banner', 'holiday_logo.jpg');
		$this->layout = "holiday";
		$this->set('title_for_layout', " HOLIDAYS - JAKARTA TOUR (3 NIGHTS / 4 DAYS)");
	}
} 
?>