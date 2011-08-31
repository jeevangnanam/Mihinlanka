<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class LowfairSearchesController extends AppController {

    var $uses = array('LowfairSearches');

    function search(){

  $this->layout = "ajax";


     $from = $this->params['form']['from'];
     $to = $this->params['form']['to'];
	 $returnTrip = $this->params['form']['returnTrip'];
	 


	if(isset($returnTrip) and $returnTrip == 'yes'){
		 $res = $this->LowfairSearches->find('all',array("conditions" => array("`from`" => $from, "`to`" => $to)));
                 if(empty($res)){
                     echo ( "<div class='messageBoxEng'>No results found.</div>");
                 }else{
                    echo ( "<div class='messageBoxEng'>$from to $to: ".$res[0]['LowfairSearches']['return_price']." + Taxes.</div>");
                 }
		
		}else{
			 $res = $this->LowfairSearches->find('all',array("conditions" => array("`from`" => $from, "`to`" => $to)));
                         if(empty($res)){
                              echo ( "<div class='messageBoxEng'>No results found.</div>");
                         }else{
			 echo ( "<div class='messageBoxEng'>$from to $to: ".$res[0]['LowfairSearches']['oneway_price']." + Taxes.</div>");
                         }
			
			}
    
     
    }

}
?>
