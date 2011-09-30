<script type="text/javascript" src="<?php echo $this->webroot;?>js/ajaxtabs.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>js/shopping_molls.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/ajaxtabs.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/shopping_molls_popup.css" />

<div id="contentInner" style="background-image:url(/img/burj_dubai_hotel.jpg);background-repeat:no-repeat">
<br  /><br  /><br  /><br  /><br  /><br  />
<h2>Tiruchirapalli</h2>
<div class='formatme'>
  <img src="/img/dest_reviews/Dubai-Wallpapr.jpg" alt="burj dubai" width="432" height="345" align="left" />Dubai is one of the seven emirates of the United Arab Emirates (UAE). It is located south of the Persian Gulf on the Arabian Peninsula and has the largest population with the second-largest land territory by area of all the emirates, after Abu Dhabi. .<br>
  
  Climate<br>

Dubai weather is generally hot and humid with a high daily average of sun hours. The Dubai weather is of course determined by its climate. The Dubai climate is an arid subtropical climate due to Dubai being located within the Northern desert belt. The skies over Dubai are generally completely blue with little cloud cover. Due to the Dubai weather and its blue skies, Dubai has become a popular destination for astronomers. The weather in Dubai can bring short and irregular rainfall as is typical for the Middle East. Most of the rainfall in Dubai occurs between December and March. The period between December and March is when the Dubai weather conditions are considered to be the best as the temperature cools down to a more comfortable level. The period between December and March each year is considered by the Dubai hotel and travel industry to be the tourism high season of Dubai. The weather in Dubai during the tourist high season is pleasant with average temperatures of around 24 degrees Celsius during daytime. <br>
  <div class='shoppingPlaces'>
	  <a href="#dialog" name="modal" id="image_click" onclick="openPopUp();">
      	<img src='/img/dest_reviews/shopping_places.png' alt="Shopping places in tiruchirapalli" />
      </a>
	</div>
</div>
<!--Attractions-->
<h2>Dubai Mall </h2>
<p>
  <img src="/img/dest_reviews/Dubai-Mall-aquarium.jpg" alt="Dubai Aquarium"   align="left" /> Shopping in the biggest mall on earth can be quite amusing since they have one of the biggest aquariums in the world </p>
<p>&nbsp;</p>
<br>
</p>

<h2>Desert Safari </h2>
<p>
  <img src="/img/dest_reviews/desert-safari.jpg" alt="sigiriya" align="left" />Even though this attraction can seem to be very touristic it is still very interesting and fun. It is also a cheap way to do a tour in the desert and have a barbecue there. 
 </p>


<h2>Dubai creek</h2>
<p>
  <img src="/img/dest_reviews/creek.jpg" alt="Botanical gardens" align="left" width="432" height="345" />
  where you can have a drink while looking at an amazing panoramic view.
  </p>


<h2>Dubai National Museum </h2>
<p> 
  <img src="/img/dest_reviews/Dubai-Museum.jpg" alt="Dubai National Museum" align="left" width="432" height="345" />Houses a vast collection of artifacts. It gives you a glimpse into the lives of those in the region with beautiful depictions of everyday life.</p>

<h2>Dubai world Trade Center </h2>
<p>
  <img src="/img/dest_reviews/dwtc.jpg" alt="World trade center" align="left" width="432" height="345" />The complex comprises the original eight exhibition halls, the Dubai International Convention Centre, which can accommodate more than 6,500 delegates in its multipurpose hall when set in auditorium style, a business club, and residential apartments with a leisure club.
 </p>

<h2>Heritage Village</h2>
<p>
  <img src="/img/dest_reviews/Heritage-Village.jpg" alt="Heritage village" align="left" width="432" height="345" />
  The Heritage Village has been created where potters and weavers display their art. The village provides a glimpse of Dubai's traditional culture and lifestyle. Diving village is located near the mouth of the creek. This area is also popular in the evenings as a venue for its open-air cafeterias and live entertainment. Several shops also sell handicrafts.
  </p>
  
  <h2>Camel racing</h2>
<p>
  <img src="/img/dest_reviews/Camel-Racing-in-Dubai.jpg" alt="Camel racing" align="left" width="432" height="345" />
   This traditional sport is extremely popular among the tourists. 
   From the timeless tranquility of the desert to the lively bustle, Dubai does not only boast the best contemporary sightings but has also preserved some of the most intriguing historical attractions.
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