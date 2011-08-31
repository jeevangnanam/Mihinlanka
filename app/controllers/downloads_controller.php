<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class DownloadsController extends AppController{

    var $name = 'Downloads';
  
    var $helpers = array('Html');
    
    
    function forms(){
        $this->Download->recursive = 0;
		$this->set('downloads', $this->Download->find('all',array('conditions' => array('status' => 'APPROVED'))));
    }
   
}
?>
