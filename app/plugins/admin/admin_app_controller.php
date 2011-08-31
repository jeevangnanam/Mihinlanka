<?php

class AdminAppController extends AppController{

 var $components = array('Acl', 'Auth','Session');
 var $helpers = array('Paginator');

    
  function  __construct() {
        parent::__construct();
       $this->layout= 'admin';
   
    }


function index(){

    
}

    function beforeFilter() {

         $this->_setLanguage();
        //Configure AuthComponent
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'logout');
        $this->Auth->loginRedirect = array('controller' => 'FlightSchedules', 'action' => 'index','plugin' => 'admin');
        $this->Auth->actionPath = 'controllers/';
		
         // debug("Session: ".$this->Session->read('Auth.User'));
       // $this->redirect('/admin/users/');
        
    }

function _setLanguage() {

       
    if ($this->Cookie->read('lang') && !$this->Session->check('Config.language')) {
        $this->Session->write('Config.language', $this->Cookie->read('lang'));
        Configure::write('Config.language',$this->params['language']);

    }
    else if (isset($this->params['language']) && ($this->params['language']
             !=  $this->Session->read('Config.language'))) {
        
        $this->Session->write('Config.language', $this->params['language']);
        $this->Cookie->write('lang', $this->params['language'], false, '20 days');
         Configure::write('Config.language',$this->params['language']);
    }

    if($this->Cookie->read('lang')){
        $this->set('language',$this->Cookie->read('lang'));
    }else{
        $this->set('language',Configure::read('Config.language'));
    }

//    echo $this->Cookie->read('lang');
//    echo "<br />";
//    echo $this->Session->read('Config.language');
}

}


?>