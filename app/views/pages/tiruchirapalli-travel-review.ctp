<script type="text/javascript" src="<?php echo $this->webroot;?>js/ajaxtabs.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>js/shopping_molls.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/ajaxtabs.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/shopping_molls_popup.css" />

<div id="contentInner" style="background-image:url(/img/burj_dubai_hotel.jpg);background-repeat:no-repeat">
<br  /><br  /><br  /><br  /><br  /><br  />
<h2>Tiruchirapalli</h2>
<div class='formatme'>
  <img src="/img/dest_reviews/Dubai-Wallpapr.jpg" alt="burj dubai" width="432" height="345" align="left" /><br>
  
  Climate<br>

<br>
  <div class='shoppingPlaces'>
	  <a href="#dialog" name="modal" id="image_click" onclick="openPopUp();">
      	<img src='/img/dest_reviews/shopping_places.png' alt="Shopping places in tiruchirapalli" />
      </a>
	</div>
</div>
<!--Attractions-->
<h2>Dubai Mall </h2>
<p>
  <img src="/img/dest_reviews/Dubai-Mall-aquarium.jpg" alt="Dubai Aquarium"   align="left" />  </p>
<p>&nbsp;</p>
<br>
</p>

<h2>Desert Safari </h2>
<p>
  <img src="/img/dest_reviews/desert-safari.jpg" alt="sigiriya" align="left" />
 </p>


<h2>Dubai creek</h2>
<p>
  <img src="/img/dest_reviews/creek.jpg" alt="Botanical gardens" align="left" width="432" height="345" />
  
  </p>


<h2>Dubai National Museum </h2>
<p> 
  <img src="/img/dest_reviews/Dubai-Museum.jpg" alt="Dubai National Museum" align="left" width="432" height="345" /></p>

<h2>Dubai world Trade Center </h2>
<p>
  <img src="/img/dest_reviews/dwtc.jpg" alt="World trade center" align="left" width="432" height="345" />The complex 
 </p>

<h2>Heritage Village</h2>
<p>
  <img src="/img/dest_reviews/Heritage-Village.jpg" alt="Heritage village" align="left" width="432" height="345" />

  </p>
  
  <h2>Camel racing</h2>
<p>
  <img src="/img/dest_reviews/Camel-Racing-in-Dubai.jpg" alt="Camel racing" align="left" width="432" height="345" />

  </p>
  
  
  <div id="boxes">

<div id="dialog" class="window">
<a href="#" class="close" /><?php echo $this->Html->image('close_button.png',array('width'=>'20'));?></a>

<script type="text/javascript">
   
	$(function() {
		$( "#tabs" ).tabs();
	});
	
	function openPopUp(){
		 $('#tabs-1').load('/pages/gaya_shopping_popup/');
	}
	
	function tabNavigation(tab,rPage){
		$('#'+tab).load('/pages/gaya_shopping_popup/'+rPage);
	}
</script>



<div class="demo">

<div id="tabs">
	<ul>
		<li><a href="#tabs-1" id="tab_1" onclick="tabNavigation('tabs-1','tiruchirapalli_shopping_popup')">Tiruchirapalli</a></li>
<!--		<li><a href="#tabs-2" id="tab_2" onclick="tabNavigation('tabs-2','dubai_shopping_popup')">TabTwo</a></li>
		<li><a href="#tabs-3" id="tab_3" onclick="tabNavigation('tabs-3','dubai_shopping_popup')">TabThree</a></li>-->
	</ul>
	<div id="tabs-1">
    
	</div>
	<div id="tabs-2">
    
    </div>
	<div id="tabs-3">
		
	</div>
</div>

</div>



<div class="demo-description" style="display: none; ">

</div><!-- End demo-description -->

</div>
  
<!-- Mask to cover the whole screen -->
  <div id="mask"></div>
</div>

</div>