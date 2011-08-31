<?php

class PromotionsController extends AdminAppController {

    var $name = 'Promotions';
    var $uses = array('Promotion', 'Currency', 'Destination');

    function index() {
        $this->Promotion->recursive = 0;

        $this->set('promotions', $this->paginate());
    }

    function view($id = null) {
        $this->Promotion->recursive =0;

        if (!$id) {
            $this->Session->setFlash(__('Invalid promotion', true));
            $this->redirect(array('action' => 'index'));
        }

       $options['joins'] = array(

           array('table' => 'currencies',
                'alias' => 'Currency',
                'type' => 'inner',
               'foreignKey' => false,
               'conditions' => array('Currency.id = Promotion.currency_id'),
               
                
            ),
           array('table' => 'destinations',
                'alias' => 'From',
                'type' => 'inner',
               'foreignKey' => false,
               'conditions' => array('From.id = Promotion.from'),


            ),
           array('table' => 'destinations',
                'alias' => 'To',
                'type' => 'inner',
               'foreignKey' => false,
               'conditions' => array('To.id = Promotion.to'),


            )

       );
       $options['fields'] = array(
           'Currency.id','Currency.code',
           'From.code',
           'To.code',
           'Promotion.id','Promotion.from','Promotion.to','Promotion.fare','Promotion.fare_in_number','Promotion.currency_id','Promotion.conditions','Promotion.fare_details_short','Promotion.promote_to_home','Promotion.status'
       );

       $options['conditions'] = array('Promotion.id' => $id);
        $promotion = $this->Promotion->find('all', $options);
        $this->set('promotion', $promotion[0]);
    }

    function add() {
        if (!empty($this->data)) {
            $this->Promotion->create();
            if ($this->Promotion->save($this->data)) {
                $this->Session->setFlash(__('The promotion has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The promotion could not be saved. Please, try again.', true));
            }
        }
        $currencies = $this->Currency->find('list', array('fields' => array('id', 'code')));
        $from = $this->Destination->find('list', array('fields' => array('id', 'code')));
        $to = $this->Destination->find('list', array('fields' => array('id', 'code')));
        $this->set(compact('currencies'));
        $this->set(compact('from'));
        $this->set(compact('to'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid promotion', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Promotion->save($this->data)) {
                $this->Session->setFlash(__('The promotion has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The promotion could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Promotion->read(null, $id);
        }
        $currencies = $this->Currency->find('list', array('fields' => array('id', 'code')));
        $from = $this->Destination->find('list', array('fields' => array('id', 'code')));
        $to = $this->Destination->find('list', array('fields' => array('id', 'code')));
        $this->set(compact('currencies'));
        $this->set(compact('from'));
        $this->set(compact('to'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for promotion', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Promotion->delete($id)) {
            $this->Session->setFlash(__('Promotion deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Promotion was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}

?>