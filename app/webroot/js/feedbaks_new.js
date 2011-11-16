// JavaScript Document

function changeBackgroundChecked(obj,controller,nCon){
	for(var i=1;i<nCon+1;i++){
		var id=controller+i;
		var cls =$('#'+obj.id).is('.check');
		if((obj.id == id) && cls==false ){
			/*$('#'+id).css({background:"url('../img/rigth.jpg')"});*/
			$('#'+id).addClass("check");
		}
		else{			
			if($('#'+id).is('.check')){
				$('#'+id).removeClass("check");
			}
		}
	}
}

function enableFields(obj,arrCon,nC){
	var arr=arrCon.split(',');
	if($('#'+obj.id).is('.check')){
		for(var i=0;i<arr.length;i++){
			document.getElementById(arr[i]).disabled=false;
		}
	}
	else{
		for(var i=0;i<arr.length;i++){
			document.getElementById(arr[i]).disabled=true;
			document.getElementById(arr[i]).value="";
			$('#'+arr[i]).removeClass("check");
		}
	}
}
//====================Function save======

function savefeedback(){
	if(validateForm()){
		
		var data='feedback_salutation_a='+setTitle();
			data+='&feedback_aboutyou_firstname='+document.getElementById('feedback_aboutyou_firstname').value;
			data+='&feedback_aboutyou_surname='+document.getElementById('feedback_aboutyou_surname').value;
			data+='&feedback_gender_a='+setGender();
			data+='&feedback_status_a='+setMStatus();
			data+='&feedback_nationality='+document.getElementById('feedback_nationality').value;
			data+='&feedback_live='+document.getElementById('feedback_live').value;
			data+='&feedback_age_a='+setAge(); 
			data+='&feedback_address='+document.getElementById('feedback_address1').value+" "+document.getElementById('feedback_address2').value;
			data+='&feedback_tp_home='+document.getElementById('feedback_tp_home').value;
			data+='&feedback_tp_work='+document.getElementById('feedback_tp_work').value;
			data+='&feedback_tp_mobile='+document.getElementById('feedback_tp_mobile').value;
			data+='&feedback_email='+document.getElementById('feedback_email').value;
			data+='&feedback_flight_a1='+document.getElementById('feedback_flight_a1').value;
			data+='&feedback_flight_a2='+document.getElementById('feedback_flight_a2').value;
			data+='&feedback_flight_a3='+document.getElementById('feedback_flight_a3').value;
			data+='&feedback_flight_a4='+document.getElementById('feedback_flight_a4').value;
			
			
			if($('#feedback_purpose_a1').is('.check')){//document.getElementById('feedback_purpose_a1').style.background!=""
				data+='&feedback_purpose_a=Work';}
			 else if($('#feedback_purpose_a2').is('.check')){//document.getElementById('feedback_purpose_a2').style.background!=""
					data+='&feedback_purpose_a=Work';
					}
			 else { data+='&feedback_purpose_a=NoAnswer';}
			
			//=============page two
			if($('#feedback_price_a1').is('.check')){data+='&feedback_price_a1=Yes';}//document.getElementById('feedback_price_a1').style.background!=""
			else { data+='&feedback_price_a1=NoAnswer';}
			
			if($('#feedback_spoffers_a1').is('.check')){data+='&feedback_spoffers_a1=Yes';}//document.getElementById('feedback_spoffers_a1').style.background!=""
			else{ data+='&feedback_spoffers_a1=NoAnswer';	}
			
			data+='&feedback_spoffers_reason='+document.getElementById('feedback_spoffers_reason').value; 
			
			if($('#feedback_bagallowance_a1').is('.check')){data+='&feedback_bagallowance_a1=Yes';}//document.getElementById('feedback_bagallowance_a1').style.background!=""
			else {data+='&feedback_bagallowance_a1=NoAnswer';}
			
			if($('#feedback_srv_a1').is('.check')){data+='&feedback_srv_a1=Yes';}//document.getElementById('feedback_srv_a1').style.background!=""
			else{data+='&feedback_srv_a1=NoAnswer';}
			
			
			if($('#feedback_exp_a1').is('.check')){//document.getElementById('feedback_exp_a1').style.background!=""
				data+='&feedback_exp_a=Experience';}
			 else if($('#feedback_exp_a2').is('.check')){//document.getElementById('feedback_exp_a2').style.background!=""
					data+='&feedback_exp_a=Heard';
					}
			 else { data+='&feedback_exp_a=NoAnswer';}
			
			if($('#feedback_schedule_a1').is('.check')){data+='&feedback_schedule_a1=Yes';}//document.getElementById('feedback_schedule_a1').style.background!=""
			else {data+='&feedback_schedule_a1=NoAnswer';}
			
			if($('#feedback_fdbtimes_a1').is('.check')){//document.getElementById('feedback_fdbtimes_a1').style.background!=""
				data+='&feedback_chose=FlightTime';}
			else if($('#feedback_fdbtimes_a2').is('.check')){//document.getElementById('feedback_fdbtimes_a2').style.background!="" 
				data+='&feedback_chose=Destination';
				}
			else if($('#feedback_fdbtimes_a3').is('.check')){//document.getElementById('feedback_fdbtimes_a3').style.background!=""
				data+='&feedback_chose=Both';
			}
			else { data+='&feedback_chose=NoAnswer';}
			
			if($('#feedback_recommendation_a1').is('.check')){data+='&feedback_recommendation_a1=Yes';} //document.getElementById('feedback_recommendation_a1').style.background!=""
			else{data+='&feedback_recommendation_a1=NoAnswer';}
			
			if($('#feedback_recommend_a1').is('.check')){//document.getElementById('feedback_recommend_a1').style.background!="" 
				data+='&feedback_recommend=FlightTime';}
			else if($('#feedback_recommend_a2').is('.check')){//document.getElementById('feedback_recommend_a2').style.background!=""
				data+='&feedback_recommend=Destination';
				}
			else if($('#feedback_recommend_a3').is('.check')){
				data+='&feedback_recommend=Both';
			}
			else { data+='&feedback_recommend=NoAnswer';}
			
			//=================
			data+='&feedback_toffer_a='+setPurchaseAgent('feedback_toffer_a',8);
			data+='&feedback_tagent='+document.getElementById('feedback_tagent').value;
			
			//=============end page two===============
			//==============start Page three ===============
			 data+="&feedback_accessibility_a="+commonSelectValue('feedback_accessibility_a',6) ;
			 data+="&feedback_service_a="+commonSelectValue('feedback_service_a',6) ;
			 data+="&feedback_courtesy_a="+commonSelectValue('feedback_courtesy_a',6) ;
			 data+="&feedback_otime_a="+commonSelectValue('feedback_otime_a',6) ;
			//=============end page three ===============
			//==============start Page four ===============
			 data+="&feedback_navigation_a="+commonSelectValue('feedback_navigation_a',6) ;
			 data+="&feedback_booking_a="+commonSelectValue('feedback_booking_a',6) ;
			 data+="&feedback_information_a="+commonSelectValue('feedback_information_a',6) ;
			 data+="&feedback_feel_a="+commonSelectValue('feedback_feel_a',6) ;
			//=============end page four ===============
			//==============start Page five ===============
			 data+="&feedback_friendliness_a="+commonSelectValue('feedback_friendliness_a',6) ;
			 data+="&feedback_ttakentoanswer_a="+commonSelectValue('feedback_ttakentoanswer_a',6) ;
			 data+="&feedback_attoyourquery_a="+commonSelectValue('feedback_attoyourquery_a',6) ;
			 data+="&feedback_callcentre_a="+commonSelectValue('feedback_callcentre_a',6) ;
			//=============end page five ===============
			//==============start Page six ===============
			 data+="&feedback_oexppurmihinticket_a="+commonSelectValue('feedback_oexppurmihinticket_a',6) ;
			 //=============end page six ===============
			 //==============start Page seven ===============
			 data+="&feedback_queuingtime_a="+commonSelectValue('feedback_queuingtime_a',6) ;
			 data+="&feedback_processingtime_a="+commonSelectValue('feedback_processingtime_a',6) ;
			 data+="&feedback_staffefficiency_a="+commonSelectValue('feedback_staffefficiency_a',6) ;
			 data+="&feedback_staffch_a="+commonSelectValue('feedback_staffch_a',6) ;
			 data+="&feedback_claritystaffcom_a="+commonSelectValue('feedback_claritystaffcom_a',6) ;
			//=============end page seven ===============
			//==============start Page eight ===============
			 data+="&feedback_gtqueuingtime_a="+commonSelectValue('feedback_gtqueuingtime_a',6) ;
			 data+="&feedback_sboardinggate_a="+commonSelectValue('feedback_sboardinggate_a',6) ;
			 data+="&feedback_staffeff_a="+commonSelectValue('feedback_staffeff_a',6) ;
			 data+="&feedback_cofstaffcom_a="+commonSelectValue('feedback_cofstaffcom_a',6) ;
			 data+="&feedback_cofstannouncement_a="+commonSelectValue('feedback_cofstannouncement_a',6) ;
			//=============end page eight ===============
			//==============start Page nine ===============
			 data+="&feedback_punctuality_a="+commonSelectValue('feedback_punctuality_a',6) ;
			 //=============end page nine ===============
			 //==============start Page ten ===============
			 data+="&feedback_receiptofbaggage_a="+commonSelectValue('feedback_receiptofbaggage_a',6) ;
			 data+="&feedback_onboardstaffefficiency_a="+commonSelectValue('feedback_onboardstaffefficiency_a',6) ;
			//=============end page ten ===============
			 //==============start Page 11 ===============
			 data+="&feedback_oexpatairport_a="+commonSelectValue('feedback_oexpatairport_a',6) ;
			 //=============end page 11 ===============
			 //==============start Page 12 ===============
			 data+="&feedback_obabtcabinamb_a="+commonSelectValue('feedback_obabtcabinamb_a',6) ;
			 data+="&feedback_obabttemp_a="+commonSelectValue('feedback_obabttemp_a',6) ;
			 data+="&feedback_obabtlighting_a="+commonSelectValue('feedback_obabtlighting_a',6) ;
			 data+="&feedback_obabtwcs_a="+commonSelectValue('feedback_obabtwcs_a',6) ;
			 data+="&feedback_obabtlc_a="+commonSelectValue('feedback_obabtlc_a',6) ;
			//=============end page 12 ===============
			//==============start Page 13 ===============
			 data+="&feedback_obabtgreetwel_a="+commonSelectValue('feedback_obabtgreetwel_a',6) ;
			 data+="&feedback_obabtcofan_a="+commonSelectValue('feedback_obabtcofan_a',6) ;
			 data+="&feedback_obabtapg_a="+commonSelectValue('feedback_obabtapg_a',6) ;
			 data+="&feedback_obabtcourtesyhelpfull_a="+commonSelectValue('feedback_obabtcourtesyhelpfull_a',6) ;
			//=============end page 13 ===============
			//==============start Page 14 ===============
			 data+="&feedback_ofmealquality_a="+commonSelectValue('feedback_ofmealquality_a',6) ;
			 data+="&feedback_ofmealsection_a="+commonSelectValue('feedback_ofmealsection_a',6) ;
			 data+="&feedback_ofbeverage_a="+commonSelectValue('feedback_ofbeverage_a',6) ;
			 data+="&feedback_ofpbeverage_a="+commonSelectValue('feedback_ofpbeverage_a',6) ;
			//=============end page 14 ===============
			//==============start Page 15 ===============
			 data+="&feedback_dfsection_a="+commonSelectValue('feedback_dfsection_a',6) ;
			 data+="&feedback_dfpofitem_a="+commonSelectValue('feedback_dfpofitem_a',6) ;
			//=============end page 15 ===============
			//==============start Page 16 ===============
			 data+="&feedback_ahasalf_a="+commonSelectValue('feedback_ahasalf_a',6) ;
			 data+="&feedback_ahasaeditorial_a="+commonSelectValue('feedback_ahasaeditorial_a',6) ;
			 data+="&feedback_ahasainfopages_a="+commonSelectValue('feedback_ahasainfopages_a',6) ;
			//=============end page 16 ===============
			//==============start Page 17 ===============
			 data+="&feedback_ovronboardexp_a="+commonSelectValue('feedback_ovronboardexp_a',6) ;
			//=============end page 17 ===============
			//==============start Page 18 ===============
			 if($('#feedback_flyagain_a1').is('.check')){ //document.getElementById('feedback_flyagain_a1').style.background!="" 
				data+='&feedback_recommend=Yes';}
			 else if($('#feedback_flyagain_a2').is('.check')){//document.getElementById('feedback_flyagain_a2').style.background!=""
					data+='&feedback_recommend=No';
					}
			 else { data+='&feedback_recommend=NoAnswer';}
			//=============end page 18 ===============
			//==============start Page 19 ===============
			 if($('#feedback_rec_a1').is('.check')){ //document.getElementById('feedback_rec_a1').style.background!="" 
				data+='&feedback_rec=Yes';}
			 else if($('#feedback_rec_a2').is('.check')){//document.getElementById('feedback_rec_a2').style.background!="" 
					data+='&feedback_rec=No';
					}
			 else { data+='&feedback_rec=NoAnswer';}
			//=============end page 19 ===============
			 
		htmlobj=$.ajax({
		  type: 'POST',
		  url: '/feedback/add',
		  data: data,
		  success: function(){
			$('#errmsg').addClass("successmsg");
			document.getElementById('errmsg').innerHTML="Thanks for your Feedback. <a href='/' style='color:blue'>Go back to home </a>";
			document.getElementById('errmsg').focus();
		  }
		});
	}
}


//=============Functon for form validation=========================================================
function validateForm(){
	var c=0;
	for(var i=1;i<8;i++){
		//alert($('#feedback_salutation_a'+i).is('.check'));
		if($('#feedback_salutation_a'+i).is('.check')){ // document.getElementById('feedback_salutation_a'+i).style.background !=""
			c=1;
		}
		else{
			if(i==7 && c != 1){
				c=0;
			}
		}
	}
	if(c==0){
		//alert("Please select your 'Title'.");
		document.getElementById('errmsg').innerHTML="* Please select your 'Title'.";
		$('#errmsg').addClass("errmsg");
		document.getElementById('errmsg').focus();
		return false;
	}
	if(document.getElementById('feedback_aboutyou_firstname').value==""){
		document.getElementById('errmsg').innerHTML="* Please fill your 'First Name'.";
		$('#errmsg').addClass("errmsg");
		document.getElementById('errmsg').focus();
		return false;
	}
	if(document.getElementById('feedback_aboutyou_surname').value==""){
		document.getElementById('errmsg').innerHTML="* Please fill your 'Surname'.";
		$('#errmsg').addClass("errmsg");
		document.getElementById('errmsg').focus();
		return false;
	}
	if(document.getElementById('feedback_email').value==""){
		document.getElementById('errmsg').innerHTML="* Please fill your 'Email'.";
		$('#errmsg').addClass("errmsg");
		document.getElementById('errmsg').focus();
		return false;
	}
	if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById('feedback_email').value)){
		/*return (true)*/
	}
	else{
		document.getElementById('errmsg').innerHTML="* Invalid E-mail Address! Please re-enter.";
		$('#errmsg').addClass("errmsg");
		document.getElementById('errmsg').focus();
		return (false)
	}
	
	return true;
}

//=========================check title=============================================================
function setTitle(){	
	var res='';
	for(var i=1;i<8;i++){
		if($('#feedback_salutation_a'+i).is('.check')){
			switch(i){
				case 1:res='Mr';
				break;
				case 2:res='Miss';
				break;
				case 3:res='Mrs';
				break;
				case 4:res='Dr';
				break;
				case 5:res='Prof';
				break;
				case 6:res='Hon';
				break;	
				case 7:res='Other';
				break;	
			}
			return res; 
		}	
		else{
			if(i==7)
				return "NoAnswer";
		}
	}
}
//=========================Set Gender===============================================================
function setGender(){
	var res='';
	for(var i=1;i<3;i++){
		if($('#feedback_gender_a'+i).is('.check')){
			switch(i){
				case 1:res='Male';
				break;
				case 2:res='Female';
				break;
			}
			return res; 
		}	
		else{
			if(i==2)
				return "NoAnswer";
		}
	}
}
//=========================Set Gender===============================================================
function setMStatus(){
	var res='';
	for(var i=1;i<3;i++){
		if($('#feedback_status_a'+i).is('.check')){
			switch(i){
				case 1:res='Married';
				break;
				case 2:res='Single';
				break;
			}
			return res; 
		}	
		else{
			if(i==2)
				return "NoAnswer";
		}
	}
}
//===================================Set Age=====================================================
function setAge(){
	var res='';
	for(var i=1;i<6;i++){
		if($('#feedback_age_a'+i).is('.check')){
			switch(i){
				case 1:res='u21';
				break;
				case 2:res='21-35';
				break;
				case 3:res='36-40';
				break;
				case 4:res='51-65';
				break;
				case 5:res='o65';
				break;
			}
			return res; 
		}
		else{
			if(i==5)
				return "NoAnswer";
		}
	}
	
} 
//=========================Common function for check selected feilds================================
function commonSelectValue(fName,nFeild){
	var res='';
	for(var i=1;i<nFeild+1;i++){
		var f=fName+i;
		if($('#'+f).is('.check')){ //document.getElementById(f).style.background !="" 
			switch(i){
				case 1:res='ExtremelySatisfied';
				break;
				case 2:res='MostlySatisfied';
				break;
				case 3:res='Satisfied';
				break;
				case 4:res='Dissatisfied';
				break;
				case 5:res='ExtremelyDissatisfied';
				break;
				case 6:res='NotApplicable';
				break;	
			}
			return res; 
		}
		else{
			if(i==nFeild)
				return "NoAnswer";
		}
	}
	
} 

function setPurchaseAgent(fName,nFeild){
	var res='';
	for(var i=1;i<nFeild+1;i++){
		var f=fName+i;
		if( $('#'+f).is('.check')){//document.getElementById(f).style.background !=""
			switch(i){ 
				case 1:res='Web';
				break;
				case 2:res='CallCenter';
				break;
				case 3:res='Agent';
				break;
				case 4:res='EML';
				break;
				case 5:res='WTC';
				break;
				case 6:res='PSAKurunagala';
				break;	
				case 7:res='PSAJaffna';
				break;
				case 8:res='MihinOverseas';
				break;	
			}
			return res; 
		}
		else{
			if(i==nFeild)
				return "NoAnswer";
		}
	}
}

// calculate the ASCII code of the given character
function CalcKeyCode(aChar) {
  var character = aChar.substring(0,1);
  var code = aChar.charCodeAt(0);
  return code;
}

function checkNumber(val) {
  var strPass = val.value;
  var strLength = strPass.length;
  var lchar = val.value.charAt((strLength) - 1);
  var cCode = CalcKeyCode(lchar);

  /* Check if the keyed in character is a number
     do you want alphabetic UPPERCASE only ?
     or lower case only just check their respective
     codes and replace the 48 and 57 */

  if (cCode < 48 || cCode > 57 ) {
    var myNumber = val.value.substring(0, (strLength) - 1);
    val.value = myNumber;
  }
  return false;
}