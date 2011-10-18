<script>
$(function() {
    // $('#selddate1').datePicker().val(date.asString()).trigger('change');

    $( "#selddate2" ).datepicker({
        dateFormat: 'd M y',
         minDate: new Date(2012, 2 - 1, 1), 
		 maxDate: new Date(2012, 3 - 1, 31) 
    });
    $( "#seladate2" ).datepicker({
        dateFormat: 'd M y',
        minDate: new Date(2012, 2 - 1, 1)
    });
    $( "#flight_date" ).datepicker({
        dateFormat: 'd M y'
    });


});



    $(document).ready(function() {


$('#promocode').val('MJPROM6');
    $('#ui-datepicker-div').hide();

    

    $("#tidbox").click(function(){

        if(!$("#tidbox").attr('checked')){

            $("#retSpan").hide();


            $("#seladate2").hide(500).attr('disabled', 'disabled');
            $("#tid").val("OW");

            $("#rByPriceFlex").attr('disabled','disabled');
            $("#rByPrice").attr('checked', 'checked');

        }else{
            $("#tid").val("SB");
            $("#retSpan").show();
            $("#seladate2").show(500).attr('disabled', '');
            $("#rByPriceFlex").attr('disabled','').attr('checked', 'checked');



        }
    });

   });


</script>
<div id="contentInner">
<div id="services">
<div class="articlesin">
    <h3 style="font-size:18px">Book your flight in advance and get 50% off</h3>  
    <div> 
<div class="message" style="font-family:'sans';font-size:20px;padding:12px;">
Explore the world with amazing offers from Mihin Lanka only for bookings made online at www.mihinlanka.com, where you can save 50% off the already low fares with Mihin Lanka. HURRY as this offer expires on 15th October 2011!
In order to enjoy the promotion enter the promotional code MJPROM6 when booking online and watch the savings start to roll in!
</div>
<div>
<br /><br />
<p><b>Why wait ??</b>  visit <a href="http://fly.mihinlanka.com" style="color: #06C">http://fly.mihinlanka.com</a> and book your  ticket today! <strong>OR</strong>  <u>use the below form</u><img src="/img/arrow_promotion.png"  style="float:right;margin-right:30%;"/></p><br />
<div style="text-align:center;padding-left: 20%;overflow:visible;">
    	<div id="bookingEngine" style="position:relative;border:solid 5px #C33;">
<?= $this->element('side/booking_custom'); ?>
		</div>

</div>
<p><br />
  </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br />
  <em>Offer is valid only for online purchases made using the above form or visit <a href="http://fly.mihinlanka.com/" target="_blank">http://fly.mihinlanka.com</a> use promotional code MJPROM6 get the discount. </em><br /><br />
</p>
<div class="section"><br>
 
  <ol>
    <li>Offer is valid only for online purchases made using the  promotional code MJPROM6.</li>
    <li>Valid only for bookings made before 15th October  2011.</li>
    <li>Travel commencement should fall within 1st  February 2012 and 31st March 2012 with no restriction for the return  date.</li>
    <li>Offer is valid only between Colombo, Dubai, Jakarta and  Trichy (Eligible for One Way, Return and Connection tickets).</li>
    <li>Non-refundable.</li>
    <li>Date change fare conditions not applicable and date changes not permitted. </li>
    <li>The general credit card terms and conditions will continue to  apply.</li>
  </ol>
</div>
</div>

</div>
</div>
</div>
</div>
