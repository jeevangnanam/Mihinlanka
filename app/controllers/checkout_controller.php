<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class checkoutController extends AppController{

   var $uses = array('ShoppingProduct','ShoppingOrder');

   function  __construct() {
        parent::__construct();
       // Router::connect('/pages/checkout/*', array('controller' => 'pages', 'action' => 'duty_free'));
    }
    function index(){
   

    $this->set('banner', 'destinations.jpg');

    }

    function duty_free(){

       if(count($this->Session->read('product'))!= 0){

          $productsInList = implode(",",array_keys($this->Session->read('product')));

          $products  = $this->ShoppingProduct->find('all',array("fields" => array("name","price") ,"conditions" => array("id in ($productsInList)"),"group" => array("ShoppingProduct.name","ShoppingProduct.price") ));
          $total  = $this->ShoppingProduct->find('all',array("fields" => array("SUM(ShoppingProduct.price) as total") ,"conditions" => array("id in ($productsInList)") ));
          
          $this->set('total',$total[0][0]['total']);
          $this->set('products',$products);

      }else{
          //$this->set('total','0.00');
      }
    }
    
    function checkout(){
        
        if(!empty($this->data)){        
        echo "<div style='color:white'>";
        debug($this->data);
        echo "</div>";
        $this->ShoppingOrder->save($this->data);
        echo "<div style='color:white'>";
      //  debug($this);
        echo "</div>";
        }
    }


}
?>