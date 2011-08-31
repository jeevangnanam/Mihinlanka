<?php

class IndexController extends QuickpricecheckAppController {

    var $uses = array('LowfairSearch');


    function __construct() {
        parent::__construct();
    }

    function beforeFilter() {
		$this->Auth->allow("index");
      
        
    }
        function index() {

$this->layout = 'ajax';
  $from = $this->LowfairSearch->find('list',array('fields' => array('from', 'from')));
        $to = $this->LowfairSearch->find('list',array( 'fields' => array('to','to')));

        $this->set('lowfairFrom', $from);
        $this->set('lowfairTo', $to);
          
        
            
        }




        

        

}

?>