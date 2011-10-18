<?php  

/* 
CakePHP Component for mailchimp.   
This component is not complete.  Much more you can do with the mailchimp API; 
For full documentation check: http://www.mailchimp.com/api/rtfm/ 
* 
* By Scott T. Murphy (hapascott) 2008 
*/ 

App::import('Vendor', 'mailchimp'); 

class MailchimpApiComponent extends Object { 

// Configuration 
//the Username & Password you use to login to your MailChimp account 
  //var $_username = 'ssk8323'; 
  //var $_password = 'lionking'; 
     
//Other vars 
  // var $apiUrl = 'http://api.mailchimp.com/1.1/'; 
   var $_apiKey = 'ac0e2ebb9d47ab404e0e1390ec973866-us1';   


///*************LISTS********************************************************/ 
/***returns an array of all lists you have under your mailchimp account. * 
* 
*EXAMPLE: 
* 
Controller 
    function mc() { 
        $lists = $this->MCAPI->lists(); 
        $this->set('lists', $lists);  
    }  
* 
View (mc.ctp) 
  var_dump($lists); //to view the full array. 
* 
*/ 

function lists() { 
    $api = $this->_credentials(); 
    $retval = $api->lists(); 
    if (!$retval){ 
                $retval = $api->errorMessage; 
        }  
    return $retval; 
} 

///*************LIST ALL MEMBERS IN A LIST*****************************************************/ 
/***returns an array of all members you have under the specified mailchimp list * 
Example 
Controller 
    function mclist_view($id) { 
        $lists = $this->MailchimpApi->listMembers($id); 
        $this->set('id',$id); 
        $this->set('lists', $lists);  
    } 
* 
View (mclist_view.ctp) 
  var_dump($lists); //to view the full array. 
*/ 

function listMembers($id) { 
     
    $api = $this->_credentials(); 
     
    $retval = $api->listMembers( $id , 'subscribed', 0, 5000 ); 
    if (!$retval){ 
                $retval = $api->errorMessage; 
        }  
    return $retval; 
} 

///*****ADD MEMBER TO A LIST*******************************// 
//Used to save the user's info to your subscription list. 
/* 
Example: 
  $add = $this->MailchimpApi->addMembers($user_email, $id); 
    if($add) { 
        $this->Session->setFlash('Successfully added user to your list.'); 
    } else { 
        $this->Session->setFlash('Oops, something went wrong.  Email was not added to your user.'); 
    } 
  $this->redirect(array('action'=>'mclist_view', 'id'=> $id)); 
    */ 
//$list_id,
function addMembers($list_id,$title,$fullname,$address,$phone_resident,$phone_office, $email,$country_id) { 
        $api = $this->_credentials(); 
      //  $merge_vars = array('FIRST'=> $first, 'LAST'=> $last); 
		//$merge_vars = array('FTITLE'=>$title,'FNAME'=> $fullname, 'ADDRESS'=> $address,'PHONE'=>$phone_resident,'POFFICE'=>$phone_office,'COUNTRY'=>$country_id); 
		$fullname=split(" ",$fullname);
		$merge_vars = array('FNAME'=> $fullname[0],'LNAME'=> $fullname[1]); 
        if(empty($merge_vars)) { 
            $merge_vars = array(''); 
        } 
        //$list_id = "22668373e5";
       
        $retval = $api->listSubscribe($list_id,$email,$merge_vars ); 
        if (!$retval){ 
                $retval = $api->errorMessage; 
        }  
        return $retval; 
} 


//****UNSUBSCRIBE OR REMOVE MEMBER FROM A LIST********************// 
//Use to remove a particular user from a list.   
//returns true if success else return false. 
/*Example usage: 
*function mc_remove($user_email,$id) { 
    $remove = $this->MailchimpApi->remove($user_email, $id); 
    if($remove) { 
        $this->Session->setFlash('Email successfully removed from your list.'); 
    } else { 
        $this->Session->setFlash('Oops, something went wrong.  Email was not removed from the list.'); 
    } 
       $this->redirect(array('action'=>'mclist_view', 'id'=> $id)); 
} 
*/ 

function remove($id,$user_email) { 

$api = $this->_credentials(); 

$retval = $api->listUnsubscribe($id,$user_email); 

if (!$retval){ 
   return false; 
   exit(); 
} else { 
    return true; 
    exit(); 
} 

} 


//***MailChimp Auth**/ 
function _credentials() { 
    $api = new MCAPI($this->_apiKey); //$api = new MCAPI($this->_username); 
    if ($api->errorCode!=''){ 
        $retval = $api->errorMessage; 
        echo $retval; die; 
        exit(); 
    } 
    return $api; 
}   

}
?>