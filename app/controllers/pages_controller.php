<?php

/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @link http://book.cakephp.org/view/958/The-Pages-Controller
 */
class PagesController extends AppController {

    /**
     * Controller name
     *
     * @var string
     * @access public
     */
    var $name = 'Pages';
	//----------
	/*
	*component for mailchimp
	*Added by lasantha
	*/
		var $components = array('MailchimpApi'); 
		//var $helpers = array('Mailchimp'); 
    /**
     * Default helper
     *
     * @var array
     * @access public
     */
	 
    var $helpers = array('Html', 'Javascript','Lightbox','Ajax','Mailchimp');
    /**
     * This controller does not use a model
     *
     * @var array
     * @access public
     */
    var $uses = array('Country', 'TravelAgent', 'FlightSchedule', 'Promotion', 'ShoppingProduct', 'Banner', 'FlightRoute', 'AlertMessage','LowfairSearch');

    /**
     * Displays a view
     *
     * @param mixed What page to display
     * @access public
     */
    function display() {


        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            $this->redirect('/');
        }
        $page = $subpage = $title_for_layout = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        if (!empty($path[$count - 1])) {
            $title_for_layout = Inflector::humanize($path[$count - 1]);
        }

        $this->set(compact('page', 'subpage', 'title_for_layout'));
        $this->render(implode('/', $path));
    }

    function home() {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            $this->redirect('/');
        }
        $page = $subpage = $title_for_layout = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        if (!empty($path[$count - 1])) {
            $title_for_layout = Inflector::humanize($path[$count - 1]);
        }

        // $this->set('promotions',($this->Promotion->find('all',array('fields' => array('fare_details_short'), 'conditions' => array("status='APPROVED'" ,"promote_to_home = 'PROMOTED'")))));
        $this->layout = 'home';
        //$this->set(compact('page', 'subpage', 'title_for_layout'));
        $this->set('title_for_layout', ' A low-cost srilankan airline based in Colombo, Sri Lanka.Fly to colombo,srilankan holidays , flights to colombo | flights to srilanka | fly to srilanka,Colombo,Dubai ,Gaya ,Tiruchirapalli ,Varanasi ,Kuwait ,Maldives ,Dhaka ,Jakarta');
        $this->set('banners', ($this->Banner->find('all', array('conditions' => array('Banner.status' => 'APPROVED')))));
        $this->set('alertMessages', $this->AlertMessage->find('all', array('conditions' => array('AlertMessage.status' => 'APPROVED'))));

        $from = $this->LowfairSearch->find('list',array('fields' => array('from', 'from')));
        $to = $this->LowfairSearch->find('list',array( 'fields' => array('to','to')));

        $this->set('lowfairFrom', $from);
        $this->set('lowfairTo', $to);


        $this->render(implode('/', $path));
    }

    function flight_schedule($id=NULL) {

        if (!isset($id) or $id == NULL) {
            $id = 1;
        }
        $this->set('title_for_layout', " Flight schedule");

        if (isset($this->passedArgs['place'])) {


            $this->set('selectedCountry', $this->passedArgs['place']);
        } else {

            $this->set('selectedCountry', 'colombo-dubai-colombo');
        }
        $this->set('banner', 'flight_schedule.jpg');
        $this->FlightSchedule->recursive = 0;
        $this->set('flightSchedulesNormal', $this->FlightSchedule->find('all', array('conditions' => array('route_id' => $id, 'schedule_type' => 'NORMAL'))));
        $this->set('flightSchedulesChange', $this->FlightSchedule->find('all', array('conditions' => array('route_id' => $id, 'schedule_type' => 'SCHEDULE_CHANGE'))));
        $this->set('flightSchedulesCancel', $this->FlightSchedule->find('all', array('conditions' => array('route_id' => $id, 'schedule_type' => 'FLIGHT_CANCEL'))));
        $this->set('routes', $this->FlightRoute->find('list', array('fields' => array('id', 'route'))));
        $this->set('selectedRoute', $id);
        $this->render('flight-schedule');
    }

    function baggage_allowance() {
        $this->set('title_for_layout', " Baggage allowance");

        $this->set('banner', 'baggage.jpg');
        $this->render('baggage-allowance');
    }

    function on_board_service() {
        $this->set('title_for_layout', " On board service");

        $this->set('banner', 'on_board_service.jpg');
        $this->render('on-board-service');
    }

    function arrivals_and_departures() {

        $this->set('title_for_layout', " Arrivals and departures");

        $this->set('banner', 'departure_arrival.jpg');
        $this->render('arrivals-and-departures');
    }

    function faq() {
        $this->set('title_for_layout', " Faq");

        $this->set('banner', 'faq_1.jpg');
        $this->render('mihinlanka-faq');
    }

    function duty_free() {
        $this->set('title_for_layout', " Duty free products purchase and PRE-ORDER facility");
        $this->set('banner', 'dutyfree.jpg');

        $this->set('products', ($this->ShoppingProduct->find('all', array('conditions' => array("status = 'APPROVED'")))));

        if (isset($this->passedArgs['id']) and (!isset($this->passedArgs['action']))) {
            $this->Session->write('product.' . $this->passedArgs['id'] . ".id", $this->passedArgs['id']);
            $this->Session->write('product.' . $this->passedArgs['id'] . ".name", $this->passedArgs['name']);
        }
        if (isset($this->passedArgs['action']) and !empty($this->passedArgs['id'])) {

            $this->Session->delete('product.' . $this->passedArgs['id']);
            // $this->Session->delete('product',$this->passedArgs['id']);
        }

        if (count($this->Session->read('product')) != 0) {

            $productsInList = implode(",", array_keys($this->Session->read('product')));

            $price = $this->ShoppingProduct->find('all', array("fields" => array("SUM(ShoppingProduct.price) AS total"), "conditions" => array("id in ($productsInList)")));
            $this->set('total', $price[0][0]['total']);
        } else {
            $this->set('total', '0.00');
        }
        // var_dump($this->Session->read('product'));
        //  $this->Session->delete('product');
        $this->set('selectedProducts', $this->Session->read('product'));
        $this->render('duty-free-service-in-mihinlanka');
    }

    function how_to_book() {
        $this->set('title_for_layout', " How to book online on " . Configure::read('app.company.name'));
        $this->set('banner', 'howtobook.jpg');
        $this->render('how-to-book-in-mihinlanka');
    }

    function payment_options() {
        $this->set('title_for_layout', " Payment options");
        $this->set('banner', 'payment_options.jpg');
        $this->render('payment-options');
    }

    function travelagents() {
        $this->set('title_for_layout', " Travel agents");
        $this->set('banner', 'travel_agents.jpg');
        $this->set('countries', $this->Country->find('list'));
        // $this->addScript($this->Javascript->link('jquery.tabs.pack'));
        if (isset($this->passedArgs['country'])) {

            $selectedCountry = $this->passedArgs['country'];
        } else {
            $selectedCountry = 'Sri Lanka';
        }


        $options['joins'] = array(
            array('table' => 'countries',
                'alias' => 'Country',
                'type' => 'inner',
                'foreignKey' => false,
                'conditions' => array('Country.id = TravelAgent.country_id', "Country.name = '" . $selectedCountry . "'")
            )
        );
        $options['order'] = array('TravelAgent.id DESC');
        $travelAgents = $this->TravelAgent->find('all', $options);
        $this->set('travelAgents', $travelAgents);
        $this->set('selectedCountry', $selectedCountry);
    }

    function fares() {
        $this->set('title_for_layout', " Fares");
        $this->set('banner', 'our_fares.jpg');
        $this->render('mihinlanka-fares');
    }

    function travel_regulations() {
        $this->set('title_for_layout', " Travel regulations");
        $this->set('banner', 'travel_regulations.jpg');
        $this->render('travel-regulation');
    }

    function packages() {
        $this->set('title_for_layout', " Packages");
        $this->set('banner', 'packages.jpg');
    }

    function offices() {
        $this->set('title_for_layout', " Offices and contact points");
        $this->set('banner', 'our_offices.jpg');
        $this->render('mihinlanka-offices');
    }

    function callcenters() {
        $this->set('title_for_layout', " Call centers");
        $this->set('banner', 'callcenter.jpg');
        $this->render('mihinlanka-call-centers');
    }

    function feedback_centers() {
        $this->set('title_for_layout', " Feedback centers");
        $this->set('banner', 'feedback_centers.jpg');
        $this->render('feedback-centers');
    }

    function location_map() {
        $this->set('title_for_layout', " Location map");
        $this->set('banner', 'locations.jpg');
        $this->render('location-map');
    }

    function about() {
        $this->set('title_for_layout', " About " . Configure::read('app.company.name'));
        $this->set('banner', 'mihinlanka_1.jpg');
        $this->render('about-mihinlanka');
    }

    function careers() {
        $this->set('title_for_layout', " Career information");
        $this->set('banner', 'careers.jpg');
        $this->render('airline-careers-in-srilanka');
    }

    function how_to_book_guide() {
        $this->set('title_for_layout', " Guid of how to book on line on mihinlanka");
        $this->layout = 'simple';
        $this->render('how-to-book-guide');
    }

    function packages_to_maldives() {
        $this->set('title_for_layout', " Exciting Packages to Maldives from Mihin Lanka");
        $this->set('banner', 'mihin_lanka_maldives.jpg');
        $this->set('leftSpecialOffers', true);
        $this->render('packages-to-maldives');
    }

	function srilanka_travel_review(){
		
		$this->layout = 'destination_reviews';
		$this->render('srilanka-travel-review');
		
	}
		
		
	function dubai_travel_review(){
		
	$this->layout = 'destination_reviews';
	$this->render('dubai-travel-review');
	
	}
	
	function gaya_travel_review(){
		
	$this->layout = 'destination_reviews';
	$this->render('gaya-travel-review');
	
	}
	
	function varanasi_travel_review(){
		
	$this->layout = 'destination_reviews';
	$this->render('varanasi-travel-review');
	
	}
	
	function holidays(){
		
		$this->set('banner', 'mihin_holidays.jpg');
		
		}
		
		function glimpse_of_sri_lanka(){
		
		$this->layout = NULL;
		
		}
		
function srilanka_at_a_glance(){
		
		$this->layout = NULL;
		
		}
		
		
	function kuwait_travel_review(){
		
	$this->layout = 'destination_reviews';
	$this->render('kuwait-travel-review');
	
	}
	
	function Tiruchirapalli_travel_review(){
		
	$this->layout = 'destination_reviews';
	$this->render('tiruchirapalli-travel-review');
	
	}
	
	function maldives_travel_review(){
		
	$this->layout = 'destination_reviews';
	$this->render('maldives-travel-review');
	
	} 
	
	function dhaka_travel_review(){
		
	$this->layout = 'destination_reviews';
	$this->render('dhaka-travel-review');
	
	}
	
	function jakarta_travel_review(){
		
	$this->layout = 'destination_reviews';
	$this->render('jakarta-travel-review');
	
	}
	
	function shajah_travel_review(){
		
		$this->layout = 'destination_reviews';
		$this->render('shajah-travel-review');
	
	}
	
	public function gaya_shopping_popup($rPage = null, $tab = null){
		//$this->autoRender = false;
		$this->layout = 'popup';
		
		$this->render($rPage);
	}
	
	public function trichy(){
		//$this->autoRender = false;
		
	}
	public function mihin_buyone_getone_maldives(){
		
		
		}
	
	
	/*----------------------------------
	*
	*----------------------------------*/
	function mc() { 
    $lists = $this->MailchimpApi->lists(); 
    $this->set('lists', $lists);  
} 

function mclist_view($id) { 
    $lists = $this->MailchimpApi->listMembers($id); 
    $this->set('id',$id); 
    $this->set('lists', $lists);  
} 

function mc_remove($id="") { 
	$user_email = $this->data['email']; 
	//$id = $this->data['id'];
	 $list_id = "35c3d713bc";
    $remove = $this->MailchimpApi->remove($id,$user_email); 
	
    if($remove) { 
        $this->Session->setFlash('Email successfully removed from your list.'); 
    } else { 
        $this->Session->setFlash('Oops, something went wrong.  Email was not removed from the list.'); 
    } 
    //   $this->redirect(array('action'=>'mclist_view', 'id'=> $id)); 
} 


	function mc_add($id="") { 
	
		if(!empty($this->data)) 
			{ 
			$first = $this->data['first']; 
			$last = $this->data['last']; 
			$email = $this->data['email']; 
			//$id = $this->data['id']; 
			$id = "73f23d0155";
			$add = $this->MailchimpApi->addMembers($id, $email, $first, $last); 
			if($add) { 
				$this->Session->setFlash('Successfully added user to your list.  They will not be reflected in your list until the user confirms their subscription.');
			} else { 
				$this->Session->setFlash('Oops, something went wrong.  Email was not added to your user.'); 
			} 
		   // $this->redirect(array('action'=>'mclist_view', 'id'=> $id)); 
		} else { 
	   // $this->set('id',$id); 
		} 
	} 
	
	function dubai_shopping_festival(){
		$this->set('banner', 'dubai_shopping.jpg');
		$this->set('title_for_layout', "Dubai Shopping Festival");
	}
	
	function how_to_book_video() {
        $this->set('title_for_layout', " How to book online on " . Configure::read('app.company.name'));
        $this->set('banner', 'howtobook.jpg');
        //$this->render('how-to-book-in-mihinlanka');
    }
    
	function sharjah10() {
		
		$this->layout = 'home';
		$this->set('title_for_layout', " Mihin Lanka Special Fares to Sharjah");
		$this->set('banner', 'empty.jpg');
		
		$from = $this->LowfairSearch->find('list',array('fields' => array('from', 'from')));
        $to = $this->LowfairSearch->find('list',array( 'fields' => array('to','to')));

        $this->set('lowfairFrom', $from);
        $this->set('lowfairTo', $to);
	}
	
	function paybycash(){
		$this->set('title_for_layout', "PayByCash");
		$this->set('banner', 'boc.jpg');
	}
	

}
