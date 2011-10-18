<?php  
class MailingListController extends AppController 
{ 
  var $uses = array(); 
  var $components = array('MailChimp');   

  function showLists() 
  { 
    $lists = $this->MailChimp->lists(); 
    $this->set('lists', $lists); 
  } 
} 
?>