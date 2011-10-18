<script type="text/javascript" src="<?php echo $this->webroot;?>js/ajaxtabs.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>js/shopping_molls.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/ajaxtabs.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/shopping_molls_popup.css" />

<div id="contentInner" style="background-image:url(/img/burj_dubai_hotel.jpg);background-repeat:no-repeat">
<br  /><br  /><br  /><br  /><br  /><br  />
<h2>Gaya</h2>
<div class='formatme'>
  <img src="/img/dest_reviews/Dubai-Wallpapr.jpg" alt="burj dubai" width="432" height="345" align="left" />
  Gaya is 100 kilometers south of Patna, the capital city of Bihar. Situated on the banks of Falgu River, it is a place sanctified by both the Hindu and the Buddhist religions. It is surrounded by small rocky hills by three sides and the river flowing on the eastern side. The city has a mix of natural surroundings, age old buildings and narrow by lanes .It is also the headquarters of Gaya District. 
  <br>
  
  Climate<br>

 <br>
  <div class='shoppingPlaces'>
      <a href="#dialog" name="modal" id="image_click" onclick="openPopUp();">
      	<img src='/img/dest_reviews/shopping_places.png' alt="Shopping places in gaya" />
      </a>
  </div>
  <?php //echo $html->link($html->image("/img/dest_reviews/shopping_places.png"), "/home/", array('rel' => 'lightbox'), null, false); ?> 
  
  <?php //echo $html->link(__("text", true), "url", array('rel' => 'lightbox')); ?> 
</div>
<!--Attractions-->
<h2>How to reach Gaya</h2>
<p>
  <img src="/img/dest_reviews/Dubai-Mall-aquarium.jpg" alt="Dubai Aquarium"   align="left" /> 
   </p>
<p>By Air : Gaya has an international airport which is also the only international airport in Bihar. Gaya airport is connected to Colombo, Singapore, Bangkok and many other destinations. Lok Nayak Jayaprakash Airport in Patna (120 kms) is another airport close to Gaya, which has flights for major cities.</p>
<p>
By Train : Gaya has its own railhead which is the second most important railway station after Patna Junction. Gaya is a junction and it is connected to New Delhi, Kolkata and Mumbai through a number of mail and express trains. From New Delhi, the Mahabodhi Express a direct non-stop train runs daily to Gaya. A number of other trains also fly to Gaya from Delhi and the journey duration is 16 hrs. 
</p>
<p>
By Road : National Highway and State Highways connect Gaya with rest of Bihar and other parts of the country. Gaya is well-connected by roads with Patna, Kolkata, Allahabad, Varanasi, Kanpur, Delhi etc. A number of buses fly between Patna and Gaya at regular intervals.
</p>
<br>
</p>

<h2>Places to stay in Gaya </h2>
<p>
  <img src="/img/dest_reviews/desert-safari.jpg" alt="sigiriya" align="left" />
 </p>
Gaya is dotted with a number of hotels and tourists lodge which offer comfortable accommodation at reasonable rates. Some of the popular hotels of Gaya include Hotel Lotus NICCO, Hotel Buddha, Hotel Surya, Ajatshatru Hotel, Buddha International Guest House, Vasundhara Hotel, The Royal Residency, Hotel Siddhartha Bihar, Amrapali Guest House, Anamika Hotel, Shashi International, Hotel Tokyo, Hotel Samrat, Hotel Sarkar, Vishnu International, Delta International etc.

<h2>Mahabodhi Temple </h2>
<p>
  <img src="/img/dest_reviews/creek.jpg" alt="Botanical gardens" align="left" width="432" height="345" />
  
  </p>
<p>
Mahabodhi Temple is the main attraction of Gaya and it is also an architectural masterpiece. Of course, the temple is like is other most popular temples in India, but as you enter inside the temple complex you find an atmosphere of peace and tranquility. Extensively renovated during the 19th century, the temple is supposed to be a replica of the 17th century structure that was standing on the site of Mauryan Emperor Ashoka's original 3rd century shrine. The imposing single spire of the temple rising to the lofty height of 55mts and is visible from all over the surrounding countryside. Atop the temple there are Chhatras which symbolise sovereignty of Buddhism.

</p>

<h2>Bodhi Tree </h2>
<p> 
  <img src="/img/dest_reviews/Dubai-Museum.jpg" alt="Dubai National Museum" align="left" width="432" height="345" />
  </p>
<p>
At the rear side of the temple in the west direction, the huge Bodhi tree grows out of an expansive base. A historic tree, the Bodhi tree nowadays attracts the scholars and mediators. It is believed that Shakyamuni Buddha or Gautama, attained enlightenment some 2500 years ago by sitting under this tree. Original tree was destroyed by Ashoka before his conversion to the faith, later its offshoots were nurtured at Anuradhapura in Sri Lanka, and a sapling was brought back and replanted here. Buddhist pilgrims tie coloured thread to its branches, decorated by prayer flags, while the Tibetans fulfill their rituals by making long lines of butter lamps.
</p>
<h2>Animesh Lochana Temple </h2>
<p>
  <img src="/img/dest_reviews/dwtc.jpg" alt="World trade center" align="left" width="432" height="345" />
 </p>
<p>
Animesh Locahana Temple is a small white temple located to the right of the compound entrance. A miniature version of the main temple, Animesh Temple marks the spot where Lord Buddha stood and gazed upon the Bodhi Tree in gratitude for sheltering Lord Buddha in the time period of enlightenment. 

</p>
<h2>Archaeological Museum </h2>
<p>
  <img src="/img/dest_reviews/Heritage-Village.jpg" alt="Heritage village" align="left" width="432" height="345" />
  </p>
  <p>
  Bodhgaya's Archaeological Museum has a huge collection of stone sculptures and other valuable artifacts. The museum is maintained by Arhaeological survey of India and holds a collection of locally discovered sculpture and also the 19th century Pala bronzes of Hindu and Buddhist deities. The museum is open daily from 10 am to 5 pm, closed on Fridays, entrance is free.
  </p>
  <h2>Gelupa Monastery</h2>
  <p>
  <img src="/img/dest_reviews/Camel-Racing-in-Dubai.jpg" alt="Camel racing" align="left" width="432" height="345" />
  </p>
  <p>
  The Tibetan monastery is situated within the Tibetan quarter northwest of the main shrine. Built around four decades back, the complex has a central prayer hall, a huge prayer wheel and residential buildings. Every winter, the Tibetans visit Bodhgaya in large number and set up a small market with restaurants and cafes.
  </p>



<div id="boxes">

<div id="dialog" class="window">
<a href="#" class="close" /><?php echo $this->Html->image('close_button.png',array('width'=>'20'));?></a>

<script type="text/javascript">
   
	$(function() {
		$( "#tabs" ).tabs();
	});
	
	function openPopUp(){
		 $('#tabs-1').load('/pages/gaya_shopping_popup/gaya_shopping_popup');
	}
	
	function tabNavigation(tab,rPage){
		$('#'+tab).load('/pages/gaya_shopping_popup/'+rPage);
	}
</script>



<div class="demo">

<div id="tabs">
	<ul>
		<li><a href="#tabs-1" id="tab_1" onclick="tabNavigation('tabs-1','gaya_shopping_popup')">Gaya</a></li>
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

