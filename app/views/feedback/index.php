<link href="../css/feedback.css" rel="stylesheet">
<script src="../js/feedback.js"></script>
<style>
#container{
	float:left;
	width:80%;
	height:auto;
}
.clearFbDiv{
	clear:both;
	height:20px;
}
#fb_page1{
	float:left;
	width:100%;
	background-image:url(../img/feedback_index.jpg);
	background-repeat:	no-repeat;
	height:647px;
}
#fb_page2{
	float:left;
	width:100%;
	background:#FFF;
	height:auto;
}
.fb_topic{
	background-color:#B5BDC0;
	height:60px;
}
.imgContainer{
	float:left;
	width:15%;
	height:58px;
	background-color:#B5BDC0;
}
.imgContainer img{ 
	width:50px;
	height:51px;
	margin:5px 10px;
	
}
.topic{
	float:left;
	width:45%;
	background-color:#B5BDC0;
	/*height:58px;*/
	font-size:22px;
	color:#F00;
	padding-top:20px;
	
}
.topic div{
	margin:10px 10px;
}
.token{
	float:left;
	width:40%;
	background-color:#FFF;
	height:60px;
	padding-top:40px;
	font-size:13px;
	color:#B5BDC0;
}

.sub-topic{
	float:left;
	width:40%;
	background-color:#BFE2FE;
	height:25px;
	font-size:16px;
	color:#084678;
	padding-left:40px;
}
.clearSub{
	clear:both;
}
.conent-text{
	background-color:#FFF;
	font-size:13px;
	color:#B5BDC0;
	padding-left:55px;
}
.subForm{
	float:left;
	width:100%;

}	
.subForm_left{
	padding-left:18px;
}
.page1_left{
	width:40%;
}
.page1_right{
	width:60%;
}
.page1_left_cap{
	float:left;
	width:60%;
	color:#084678;
}
.page1_left_input-field{
	float:left;
	width:40%;
}
input{
	border:#BFE2FE 1px solid;
}
#txtPrice{
	width:50px;
}
</style>
<div id="container">
	<div id="fb_page1"></div>
	<div class="clearFbDiv"></div>
	<div id="fb_page2">
		<div class="fb_topic">
			<div class="imgContainer" align="right"><img src="../img/thumbsup.jpg"  /></div>
			<div class="topic">ABOUT YOUR CHOICE</div>
			<div class="token"><em>We want to know more about your decision</em></div>
			
		</div>
		<div class="sub-topic">1. Why did you chose Mihin Lanka?</div>
		<div class="clearSub"></div>
		<div class="conent-text"><em>We are thrilled that you chose to fly with us and would love to know why? Please select the main reason,
but if more than one then please feel free to tick others as well.</em></div>
		<div class="clearSub"></div>
		<div class="subForm">
			<div class="clearSub"></div>
			<div class="subForm_left"> 
				<div style="width:40%;float:left;">
					<div class="page1_left_cap">Baggage allowance</div>
					<div class="page1_left_input-field"><input type="text" id="txtPrice"/></div>
				</div>
				<div style="width:60%;float:left;">
					<div class="cap"></div>
					<div></div>
				</div>
			</div>
			
		</div>
	</div>
</div>