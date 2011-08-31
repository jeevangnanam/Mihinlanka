<?php

class AppController extends Controller {

    var $uses = array('Promotion', 'ShoppingOrder');
    var $helpers = array('Number', 'Html', 'Form');
    var $components = array('Acl', 'Auth', 'Session','Cookie');


 


function _setLanguage() {

    if ($this->Cookie->read('lang') && !$this->Session->check('Config.language')) {
        $this->Session->write('Config.language', $this->Cookie->read('lang'));
       //Configure::write('Config.language',$this->params['language']);
        
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
//    die();
}
    function beforeFilter() {
       
        $this->_setLanguage();
     
        
        //Configure AuthComponent
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'notes', 'action' => 'index');
        $this->Auth->allow("*");
        $this->Auth->actionPath = 'controllers/';
    }

    function __construct() {
        parent::__construct();
        App::import('Helper', 'Number');
        $number = new NumberHelper();
        $this->loadModel('Promotion');

        $options = array();
        $options['joins'] = array(
            array('table' => 'currencies',
                'alias' => 'Currency',
                'type' => 'inner',
                'foreignKey' => false,
                'conditions' => array('Promotion.currency_id = Currency.id')
                ),



            );
			
        $options['conditions'] = array("Promotion.status='APPROVED'", "promote_to_home = 'PROMOTED'");
        $options['fields'] = array('fare_details_short', 'fare_in_number', 'Currency.code', 'Currency.symbol');
        $promotions = $this->Promotion->find('all', $options);

        $a = null;
        foreach ($promotions as $promotion) {
            ++$a;
            $promo[$a]['Promotion']['fare_details_short'] = $promotion['Promotion']['fare_details_short'];
            $promo[$a]['Promotion']['fare_in_number'] = $number->format($promotion['Promotion']['fare_in_number'], array('places' => 0, 'before' => "<small>[".$promotion['Currency']['code']."] </small>".$promotion['Currency']['symbol']." ", 'escape' => false, 'decimals' => '.', 'thousands' => ','));
        }
        $this->set('promotions', $promo);
    }

    function index() {
        
    }

}

?>