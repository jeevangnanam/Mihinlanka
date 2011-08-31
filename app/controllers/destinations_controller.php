<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DestinationsController extends AppController {

    var $name = 'Destinations';


    function index() {
        
        $this->set('banner', 'destinations.jpg');
        $this->Destination->recursive = 0;
		$this->set('destinations', $this->paginate());
    }

}

?>