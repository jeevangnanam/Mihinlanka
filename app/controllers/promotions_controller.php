<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class PromotionsController extends AppController {

    var $name = 'Promotions';
    var $uses = array('Promotion', 'Destination');
    var $helpers = array('Html');

    function index() {
     $this->Destination->recursive = 0;

     
        $options['joins'] = array(
            array('table' => 'destinations',
                'alias' => 'From',
                'type' => 'inner',
                'foreignKey' => false,
                'conditions' => array('From.id=Promotion.from'),
            ),
            array('table' => 'destinations',
                'alias' => 'To',
                'type' => 'inner',
                'foreignKey' => false,
                'conditions' => array('To.id=Promotion.to')
            )
        );
        $options['fields'] = array(
            'From.id', 'From.place', 'To.id', 'To.place', 'Promotion.fare', 'Promotion.fare_in_number', 'Promotion.conditions', 'Promotion.status', 'Promotion.fare_details_short', 'Promotion.promote_to_home'
        );
        $destinationsOptions['fields'] = array('id');
        $destinations = $this->Destination->find('list', $destinationsOptions);

        $promotions = ($this->Promotion->find('all', $options));
        //debug($promotions);


        $counter =0;
        $tt=null;
        for ($a = 0; $a < count($destinations); $a++) {

            foreach ($promotions as $promation) {

                if (isset($destinations[$a])) {
                   
                    if (array_key_exists($promation['From']['id'],$destinations)) {
$tt++;
                        $holder[$promation['From']['place']]['promotionTo'] = $promation['From']['place'];
                        $holder[$promation['From']['place']][$tt]['from'] = $promation['From']['place'];
                        $holder[$promation['From']['place']][$tt]['to'] = $promation['To']['place'];
                        $holder[$promation['From']['place']][$tt]['fare'] = $promation['Promotion']['fare'];
                        $holder[$promation['From']['place']][$tt]['fare_in_number'] = $promation['Promotion']['fare_in_number'];
                        $holder[$promation['From']['place']][$tt]['conditions'] = $promation['Promotion']['conditions'];
                        $holder[$promation['From']['place']][$tt]['status'] = $promation['Promotion']['status'];
                        $holder[$promation['From']['place']][$tt]['fare_details_short'] = $promation['Promotion']['fare_details_short'];
                        $holder[$promation['From']['place']][$tt]['promote_to_home'] = $promation['Promotion']['promote_to_home'];
                    }
                }
            }
            $tt = null;
        }

        $this->set('promotionsAll',$holder);
        $this->set('banner', 'promotions.jpg');
        $this->set('destinations', $this->Destination->find('all', array('fields'=> array('id','place'))));



 
                    
            }
    
    /**
     * Displays a view
     *
     * @param mixed What page to display
     * @access public
     */
    function display() {


        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            $this->redirect('/promotions/index');
        }
        $page = $subpage = $title_for_layout = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        if (!empty($path[$count - 1])) {
            $title_for_layout = Inflector::humanize($path[$count - 1]);
        }

        $this->set(compact('page', 'subpage', 'title_for_layout'));
        $this->render(implode('/', $path));
    }



    function hsbc_promotion_one(){
         $this->set('banner', 'hsbc_promotion-mini.jpg');
         $this->render('mihinlanka-hsbc-promotion-one');
      
    }
    function jakarta_promotion_one(){
         $this->set('banner', 'jakarta-mini.jpg');
         $this->render('jakarta-one');

    }
	
	function fifty(){
		$this->set('bookingSmallDisabled' , true);
		$this->set('banner', 'fifty.jpg');
         $this->render('fifty-one');
		
		}
}



?>