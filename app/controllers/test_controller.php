<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class TestController extends AppController{

    var $name = 'Test';
    var $uses = array('LowfairSearch');
    var $components =  array('Session','Email');
    function index(){


var_dump($this->_sendContactMail());die();
    }


    function _sendContactMail() {

    $this->Email->to = "cherankrish@gmail.com";
    $this->Email->bcc = array('cherankrish@gmail.com');
    $this->Email->subject = 'Thank you for contacting us';
    $this->Email->replyTo = 'cherankrish@gmail.com';
    $this->Email->from = 'Phone a deal <cherankrish@gmail.com>';
    $this->Email->template = 'enquiry'; // note no '.ctp'
    //Send as 'html', 'text' or 'both' (default is 'text')
    $this->Email->sendAs = 'html'; // because we like to send pretty mail
    //Set view variables as normal

    $this->set('user','cheran');
    //Do not pass any args to send()
    $this->Email->send();
	var_dump(mail('cherankrish@gmail.com','test','test','from: cherankrish@gmail.com'));
 }


 function test(){

     $from = $this->LowfairSearch->query("select DISTINCT `from` from lowfair_searches order by `from` ");
     $to = $this->LowfairSearch->query("select DISTINCT `to` from lowfair_searches order by `to` ");
     var_dump($to);die();

 }
}
?>
