<?php
class FeedbackController  extends AppController{

    var $name = 'Feedback';
	var $uses = 'Feedback';
	public $helpers = array('Html', 'Form','Javascript', 'Ajax');
	
	function beforeFilter(){
		$this->Auth->allow("*");
		$this->layout =  "simple";
		}
    function index(){

    }
	
	function display(){
	}
	
	function _myfilter($string=''){
		
		return htmlentities(strip_tags(mysql_real_escape_string($string)));
		
		}
	public function add(){
		$this->layout = 'ajax';
		$feilds="abt_you_title,";
		$feilds.="abt_you_first_name,";
		$feilds.="abt_you_surname,";
		$feilds.="abt_you_gender,";
		$feilds.="abt_you_mstatus,";
		$feilds.="abt_you_nationality,";
		$feilds.="abt_you_live,";
		$feilds.="abt_you_age,";
		$feilds.="abt_you_address,";
		$feilds.="abt_you_tp_home,";
		$feilds.="abt_you_tp_work,";
		$feilds.="abt_you_tp_mobile,"; 
		$feilds.="abt_you_email,";
		
		$feilds.="abt_you_flight_no,"; 
		$feilds.="abt_you_flight_date,"; 
		$feilds.="abt_you_flight_month, ";
		$feilds.="abt_you_flight_year,"; 
		
		$feilds.="abt_you_flight_purpose, ";
		
		$feilds.="abt_ur_choice_one_price,"; 
		$feilds.="abt_ur_choice_one_spoffers,"; 
		$feilds.="abt_ur_choice_one_spoffer_name,"; 
		
		$feilds.="abt_ur_choice_one_baggage_allowance,"; 
		$feilds.="abt_ur_choice_one_service,"; 
		$feilds.="abt_ur_choice_one_service_basedon,"; 
		$feilds.="abt_ur_choice_one_schedule,";
		$feilds.="abt_ur_choice_one_schedule_basedon,"; 
		$feilds.="abt_ur_choice_one_recommondation,"; 
		$feilds.="abt_ur_choice_one_recommondation_basedon,"; 
		
		$feilds.="abt_ur_choice_two_ticket_purchasing,"; 
		$feilds.="abt_ur_choice_two_ticket_purchasing_agent,"; 
		
		$feilds.="abt_ur_choice_three_accessibility,"; 
		$feilds.="abt_ur_choice_three_service, ";
		$feilds.="abt_ur_choice_three_staff, ";
		$feilds.="abt_ur_choice_three_opening_time,"; 
		
		$feilds.="abt_ur_choice_four_navigation,"; 
		$feilds.="abt_ur_choice_four_booking, ";
		$feilds.="abt_ur_choice_four_information,"; 
		$feilds.="abt_ur_choice_four_feel,"; 
		
		$feilds.="abt_ur_choice_five_courtesy, ";
		$feilds.="abt_ur_choice_five_answer, ";
		$feilds.="abt_ur_choice_five_attending, ";
		$feilds.="abt_ur_choice_five_country,"; 
		
		$feilds.="abt_ur_choice_six_ovrexp, ";
		
		$feilds.="at_ariport_seven_queuing_time,"; 
		$feilds.="at_ariport_seven_processing_time, ";
		$feilds.="at_ariport_seven_staff_efficiency, ";
		$feilds.="at_ariport_seven_staff_courtesy, ";
		$feilds.="at_ariport_seven_staff_communication,"; 
		
		$feilds.="at_ariport_eight_queuing_time, ";
		$feilds.="at_ariport_eight_seating, ";
		$feilds.="at_ariport_eight_staff_efficiency, ";
		$feilds.="at_ariport_eight_staff_communication, ";
		$feilds.="at_ariport_eight_staff_announcement, ";
		
		$feilds.="at_ariport_nine_punctuality, ";
		
		$feilds.="at_ariport_ten_baggage, ";
		$feilds.="at_ariport_ten_staff_efficiency,";
		
		$feilds.="at_ariport_eleven_ovrexp_airport, ";
		
		$feilds.="onboard_twelve_ambience,"; 
		$feilds.="onboard_twelve_temperature, ";
		$feilds.="onboard_twelve_lighting, ";
		$feilds.="onboard_twelve_washroom,"; 
		$feilds.="onboard_twelve_seats,";
		
		$feilds.="onboard_thirteen_greeting,"; 
		$feilds.="onboard_thirteen_announcement,"; 
		$feilds.="onboard_thirteen_appearance,"; 
		$feilds.="onboard_thirteen_courtesy,"; 
		
		$feilds.="onboard_fourteen_meal_quality, ";
		$feilds.="onboard_fourteen_meal_selection,"; 
		$feilds.="onboard_fourteen_beverage,"; 
		$feilds.="onboard_fourteen_purchased_beverage,"; 
		
		$feilds.="onboard_fifteen_selection,"; 
		$feilds.="onboard_fifteen_price, ";
		
		$feilds.="onboard_sixteen_feel,";
		$feilds.="onboard_sixteen_editorial,"; 
		$feilds.="onboard_sixteen_pages,";
		
		$feilds.="onboard_seventeen_rateovrep,"; 
		$feilds.="onboard_eighteen_flyagain,";
		$feilds.="onboard_nineteen_recommend,";
		$feilds.="submitted_date"; /**/
		
		$data="";
		
		$data.="'".$this->_myfilter($_POST['feedback_salutation_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_aboutyou_firstname'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_aboutyou_surname'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_gender_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_status_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_nationality'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_live'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_age_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_address'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_tp_home'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_tp_work'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_tp_mobile'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_email'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_flight_a1'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_flight_a2'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_flight_a3'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_flight_a4'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_purpose_a'])."',";
		
		
		$data.="'".$this->_myfilter($_POST['feedback_price_a1'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_spoffers_a1'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_spoffers_reason'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_bagallowance_a1'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_srv_a1'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_exp_a'])."',"; 		
		$data.="'".$this->_myfilter($_POST['feedback_schedule_a1'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_chose'])."',";		
		$data.="'".$this->_myfilter($_POST['feedback_recommendation_a1'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_recommend'])."',";
		
		
		
		$data.="'".$this->_myfilter($_POST['feedback_toffer_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_tagent'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_accessibility_a'])."',";		
		$data.="'".$this->_myfilter($_POST['feedback_service_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_courtesy_a'])."',";		
		$data.="'".$this->_myfilter($_POST['feedback_otime_a'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_navigation_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_booking_a'])."',";		
		$data.="'".$this->_myfilter($_POST['feedback_information_a'])."',";		
		$data.="'".$this->_myfilter($_POST['feedback_feel_a'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_friendliness_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_ttakentoanswer_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_attoyourquery_a'])."',";		
		$data.="'".$this->_myfilter($_POST['feedback_callcentre_a'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_oexppurmihinticket_a'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_queuingtime_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_processingtime_a'])."',";		
		$data.="'".$this->_myfilter($_POST['feedback_staffefficiency_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_staffch_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_claritystaffcom_a'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_gtqueuingtime_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_sboardinggate_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_staffeff_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_cofstaffcom_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_cofstannouncement_a'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_punctuality_a'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_receiptofbaggage_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_onboardstaffefficiency_a'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_oexpatairport_a'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_obabtcabinamb_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_obabttemp_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_obabtlighting_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_obabtwcs_a'])."',";		
		$data.="'".$this->_myfilter($_POST['feedback_obabtlc_a'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_obabtgreetwel_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_obabtcofan_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_obabtapg_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_obabtcourtesyhelpfull_a'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_ofmealquality_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_ofmealsection_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_ofbeverage_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_ofpbeverage_a'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_dfsection_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_dfpofitem_a'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_ahasalf_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_ahasaeditorial_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_ahasainfopages_a'])."',";
		
		$data.="'".$this->_myfilter($_POST['feedback_ovronboardexp_a'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_recommend'])."',";
		$data.="'".$this->_myfilter($_POST['feedback_rec'])."'";/**/
		
		$queryString="insert into feedbacks($feilds) values($data,now())";
		if($this->Feedback->query($queryString)){
			$this->Session->write('done',$this->_myfilter($_POST['feedback_email']));
			echo "1";
		}
		else{
			echo "0";
		}	
	}
}

?>