<?php

class SurveyQuestionsController extends AppController {

    var $name = 'SurveyQuestions';
    var $scaffold;

    function take() {

    $this->banner ="one";
        $this->set('surveyUserName',$this->Session->read('survey_user_name'));
        if(!$this->Session->check('survey_user_id')){
            $this->redirect('/survey_users/add');
        }else{
            $userId  = $this->Session->read('survey_user_id');
        }
        $answer = NULL;
        $allDone = NULL;
        if (!empty($_POST)) {

            //debug($_POST);die();

            for($a=1;$a<9;$a++){


                if($a == 1){
                   
                    if($_POST['how_did_you_know_mihin_web'] == '' and  !isset($_POST['1'])){

                        $error[] = "Please put, how did you get to know of Mihin Lanka.";
                    

                    }

                }


                if($a == 2){
                    
                    if(!isset($_POST['2'])){

                            $error[] = "Please put, your  main objective of visiting the Mihin Lanka Website.";
                    }

                }



                



                if($a == 6){
                
                    if($_POST['main_reason_of_your_travel'] == '' and !isset($_POST['6'])){

                        $error[] = "Please put, your  main reason of your travel.";
                    }
                    

                }


                if($a == 7){
                    if($_POST['what_made_to_choose_mihinlanka'] == '' and !isset($_POST['7'])){

                        $error[] = "Please put, what made you choose mihinlanka.";
                    }

                }

                
               
            
            }
         
                if(isset($error)){

                    $displayError = NULL;
                    foreach($error as $err){

                        $displayError .= "<li>".$err."</li>";
                    }

                    $this->set('error',$displayError);
                  $allDone = false;
                }else{
                   $allDone = true;
                }


            if($allDone)
            for($i=1;$i<9;$i++){


                if($i == 1){
                    if($_POST['how_did_you_know_mihin_web'] != ''){

                        $answer = $_POST['how_did_you_know_mihin_web'];
                    }else{
                        if(!isset($_POST['1'])){

                            $error[] = "Please put how did you get to know of Mihin Lanka.";
                        }else{
                            foreach($_POST['1'] as $answers){

                                $answer  .= $answers.",";
                            }
                        }

                    }

                }


                if($i == 2){

                    if(!isset($_POST['2'])){

                            $error[] = "Please put your  main objective of visiting the Mihin Lanka Website.";
                        }else{
                            foreach($_POST['2'] as $answers){

                                $answer  .= $answers.",";
                            }
                        }

                }


                if($i == 3){

                    $answer = $_POST['3'];
                }



                if($i == 4){

                    $answer = $_POST['4'];
                }

                if($i == 5){
                        
                        if(isset($_POST['5'])){
                            
                          $answer = $_POST['5'];  
                        }else{
                            $answer = NULL;
                        }
                    
                }






                if($i == 6){
                    if($_POST['main_reason_of_your_travel'] != ''){

                        $answer = $_POST['main_reason_of_your_travel'];
                    }else{

                        if(!isset($_POST['6'])){

                            $error[] = "Please put your  main reason of your travel.";
                        }else{
                            foreach($_POST['6'] as $answers){

                                $answer  .= $answers.",";
                            }
                        }
                    }

                }


                if($i == 7){
                    if($_POST['what_made_to_choose_mihinlanka'] != ''){

                        $answer = $_POST['what_made_to_choose_mihinlanka'];
                    }else{
                        if(!isset($_POST['7'])){

                            $error[] = "Please put what made you choose mihinlanka.";
                        }else{
                            foreach($_POST['7'] as $answers){

                                $answer  .= $answers.",";
                            }
                        }
                    }

                }

                if($i == 8){

                    $answer = $_POST['8'];
                }

                if($i == 9){
                     if(isset($_POST['9'])){
                    $answer = $_POST['9'];
                     }else{
                         $answer = NULL;
                     }
                }

                if(!isset($error)){
                $answer = mysql_real_escape_string(strip_tags($answer));
                $query = "insert into survey_answers values(NULL,$userId,$i,'$answer')";
                $answer = NULL;
                $answers  = NULL;
                $this->SurveyQuestion->query($query);
                $allDone = true;
                }else{
                    $this->set('error',$error[0]);
                  $allDone = false;
                }
            }

            if($allDone)
           $this->redirect('/survey_questions/thankyou');
        }
		
		
    }


    function thankyou(){

        $this->Session->delete('survey_user_id');

    }
}

?>