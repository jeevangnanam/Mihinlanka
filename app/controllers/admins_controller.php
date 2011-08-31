<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_controller
 *
 * @author cherankrish
 */
class AdminsController extends AppController{
    //put your code here

 var $uses = array();
    function index(){
         $this->redirect('/admin/index/index');
    }
}
?>
