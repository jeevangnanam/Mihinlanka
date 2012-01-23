<style>
#services .article > div ul {
    border-left: none;
    float: left;
    list-style: none outside none;
    margin: 0 0 0 10px;
    padding-left: 10px;
    width: auto;
}
</style>
<script>
$(function() {
     $("#promocode").val('MJPROM7');
});
</script>
<div id="contentInner" style="margin-top:90px; margin-left:90px; width:80%;">
    <h2>Mihin Lanka Special Fares to Sharjah</h2><br /><br />

    <div id="services">
       <div class="article">
           <h3>Book online with Mihin Lanka to Sharjah and save 10% of our regular fares!</h3>
           <div style="padding-bottom:50px;">
             <p>Book your flight to Amazing Sharjah with Mihin Lanka online and  save 10% off our standards rates. Sharjah which is the capital city of UAE is  only 30 minutes drive from Dubai city and make a&nbsp;convenient&nbsp;option  for people visiting Dubai as well. Book online with Mihin Lanka and enjoy low  rates to Sharjah right now! </p>
             <p></p>
             	<p>&nbsp;</p>
             <p></p>
             <p><strong>Conditions</strong></p>
             <ul>
               <li>Valid only on  bookings made before 29th February 2012</li>
               <li>Travel to be  completed before 30th April 2012</li>
               <li>The 10%  discount is applicable for online bookings only</li>
               <li>Valid only for Colombo to Sharjah or Sharjah to Colombo (One-way &amp; Return)</li>
               <li>Discount will be entitled only for the bookings made using below window. </li>
             </ul>
             <p style="display:block; width:800px; margin-left:30px; float:left;">
               <br />

               <?php echo $this->Html->link("Click here to view Sharjah flight schedule", array('controller' => 'pages', 'action' => 'flight-schedule',11), array('style'=>'color:#3B5998')); ?>
               
             </p>
             <div id="bookingEngine" style="display:block; margin-top:-20px; float:left; position:relative; clear:both; height:280px;">
	             <?= $this->element("side/shajaj_booking"); ?>
             </div>
         </div>
       </div>
    </div>

</div>