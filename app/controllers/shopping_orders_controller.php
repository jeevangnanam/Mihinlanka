<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ShoppingOrdersController extends AppController {

    var $components = array('Session', 'Email');
    var $uses = array('ShoppingProduct', 'ShoppingOrder');

    function index() {

    }

    function checkout() {
        App::import('Sanitize');
        if (!empty($this->data)) {



            $this->ShoppingOrder->set($this->data);

            if ($this->ShoppingOrder->validates()) {
                if ($this->ShoppingOrder->save($this->data)) {


                    if (count($this->Session->read('product')) != 0) {

                        $productsInList = implode(",", array_keys($this->Session->read('product')));

                        $products = $this->ShoppingProduct->find('all', array("fields" => array("name", "price"), "conditions" => array("id in ($productsInList)"), "group" => array("ShoppingProduct.name", "ShoppingProduct.price")));
                        $total = $this->ShoppingProduct->find('all', array("fields" => array("SUM(ShoppingProduct.price) as total"), "conditions" => array("id in ($productsInList)")));

                        $this->set('total', $total[0][0]['total']);
                        $this->set('products', $products);

                        //  debug($this->Session->read('product'));

                        $this->_sendContactMail($this->data);
                        $this->Session->delete('product');
                        $this->set('msg', '<h2>Order is received</h2><br /> Order is received.Thank you.Have a nice flight');
                    }
                }
            } else {
                //@todo:   handle the error on validation
                $errors = $this->ShoppingOrder->invalidFields();
                $this->set('errors', $errors);
                $this->render("/checkout/checkout");
            }
        }
    }

    function _sendContactMail($data=NULL) {

        //@todo: uncomment this line on live and remove the below $this->Email->to = "Amila <amila@mihinlanka.com>";
        $this->Email->to = $data['ShoppingOrder']['name']." <".$data['ShoppingOrder']['email'].">";
        $this->Email->bcc = array("Cherankrish <cherankrish@gmail.com>","Amila <amila@mihinlanka.com>");
        $this->Email->subject = 'Mihinlanka Pre-Order confirmation';
        $this->Email->replyTo = 'info@mihinlanka.com';
        $this->Email->from = 'Mihinlanka <info@mihinlanka.com>';
        $this->Email->template = 'preorder'; // note no '.ctp'
        $this->Email->layout = 'default';
        //Send as 'html', 'text' or 'both' (default is 'text')
        $this->Email->sendAs = 'html'; // because we like to send pretty mail
        //Set view variables as normal

        $this->set('name', $data['ShoppingOrder']['name']);
        $this->set('email', $data['ShoppingOrder']['email']);
        $this->set('phone', $data['ShoppingOrder']['phone']);
        $this->set('ticket', $data['ShoppingOrder']['ticket_no']);
        $this->set('flightDate', $data['ShoppingOrder']['flight_date']['day']."-".$data['ShoppingOrder']['flight_date']['month']."-".$data['ShoppingOrder']['flight_date']['year']);
        $this->set('orderDate', $data['ShoppingOrder']['order_date']);
        $this->set('message', $data['ShoppingOrder']['message']);
        //Do not pass any args to send()
        $this->Email->send();
    }

}

?>
