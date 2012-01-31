<div id="image_banners">
    <section>
        <div id="gallery">
            <div id="bookingEngine" style="margin-top:-3px;">
              <?= $this->element('side/booking'); ?>
            </div>
            <div class="fairs" id="fairs">
                    <table  width="50%" border="0" cellspacing="0" cellpadding="0" align="right">
        <tr>
            <? foreach ($promotions as $promotion): ?>
                <td style="color:white;"><?= $promotion['Promotion']['fare_details_short']; ?><br />

                    <h2 style="margin:3px 0 3px 0 ;padding:0px;"> <?= $promotion['Promotion']['fare_in_number']; ?> </h2>
                    <a href="/promotions" title="Promotions"><img src="/img/letsgo.png" border="0"/></a></td>
            <? endforeach; ?>
        </tr>
    </table>

            </div>
                    
            <div class="photos">
                
                <?foreach($banners as $banner): ?>
              
            	<img alt="<?=$banner['Banner']['name'];?>"  src="<?=$banner['Banner']['file_path'];?>"   href="<?=$banner['Banner']['url'];?>" />              
                <?endforeach;?>
            </div>
            <a class="previous" href="#" title="Previous Photo"></a> <a class="next" href="#" title="Next Photo"></a> </div>
    </section>
</div>

<div id="newsUpdate" >
   
    <div style="color:#FFF;font-weight:bold;padding:0px 0 0 5px;">

        <marquee  onmouseover="this.stop();" onmouseout="this.start();">

            <? foreach($alertMessages as $alertMessage): ?>
                <a href="<?=$alertMessage['AlertMessage']['link']; ?>"><span style="color:<?=$alertMessage['AlertMessage']['color']; ?>"><?=$alertMessage['AlertMessage']['message']; ?></span></a>
            <? endforeach; ?>
          <!--  <a href="/pages/flight-schedule/place:colombo-dhaka-colombo">New frequency to DAC on Saturday &nbsp;<img src="img/more.png" border="0" /></a>-->
        </marquee>
    </div>
</div>

<div id="preFooter" style="">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td  valign="top" style="border-right:dotted 1px #999;padding:5px;padding-left:20px;" WIDTH="33%">
            <div style="float:left;">
            <h4 style="margin-bottom:5px;margin-left:5px"><?= __("On-Board Service"); ?></h4>
                <img src="img/meal_small.jpg" hspace="0" vspace="10" align="left" style="" alt="Upgrade your Meal "/><? //=__("baggage allawance det..");?><!--With our generous baggage allawance , you can shop till you drop during your holiday--><br />
             </div>    
                 
                 <a href="/pages/on_board_service" title="Upgrade your Meal ">
                 	<img src="img/learnmore.png" width="82" height="19"  style="margin-top:7px;float:right;margin-right:10px;" border="0"/>
                 </a>
                 
                 
                 </td>
            <td  valign="top"  style="border-right:dotted 1px #999;padding:5px;" WIDTH="33%">
            
            <h4 style="margin-bottom:5px;"><?= __("Be the first to know");?></h4>
                <div style="float:left;">
                	<img src="img/special_offer.jpg" width="79" height="77" vspace="10" align="left" style="margin-right:5px;" /><?= __("Be the first to know det..");?><!-- Click Here to find out all the special offers and promotions to your favourite Mihin Lanka Destination--><br />
                </div>
                
                <a href="/subscriptions/add" title="Be the first to know"><img src="img/learnmore.png" width="82" height="19" style="margin-top:7px;float:right;margin-right:10px;" border="0"/></a>
                
                </td>
            <td style="padding:5px;" valign="top" align="" WIDTH="33%"><h4 style="margin-bottom:5px;color: #000000"><?= __("Quick price check on the lowest fares"); ?> </h4>



                
                <div>
                    <table width="100%" border="0">

                        <tr>
                            <td><i><?= __("From"); ?></i></td>
                            <td><i><?= __("To"); ?></i></td>
                             <td><i><?= __("Return trip"); ?><br />
</i></td>
                             <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><?=$this->Form->input('from',array('type' => 'select' ,'options' => $lowfairFrom ,'label' => false ,'id' => 'from'));?></td>
                            <td><?=$this->Form->input('to',array('type' => 'select' ,'options' => $lowfairTo , 'label' => false , 'id' => 'to'));?></td>
                            <td align="left">    <?= $this->Form->checkbox('returnTrip', array('value' => 'yes', 'id'=> 'returnTrip')); ?></td>
                            <td align="left"><img alt="Search" style="margin-top:2px;margin-bottom:1px;cursor:pointer" src="/img/gobtn.png" id="searchPrice" /></td>
                        </tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    </table>
                    
                 
          </div>
                
                <div id="res" ></div>
            </td>
        </tr>
    </table>
</div>

<div id="preFooter2" style="float:left; margin:20px; margin-top:10px;">


    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td  valign="top" style="border-right:dotted 1px #999;padding:5px;padding-left:20px; margin-top:20px" WIDTH="33%">

            <div class="home_bottom_banners" style="">
            
                <div style="float:left;">
                <h4 style="margin-bottom:5px;margin-left:5px"><?= __("Baggage allowance");?></h4>
                    <img src="img/banners/baggage.png" hspace="0" vspace="10" align="left" style="" alt="Baggege"/><? //=__("baggage allawance det..");?><!--With our generous baggage allawance , you can shop till you drop during your holiday--><br />
                 </div>    
                    
                     <?php echo $this->Html->image("learnmore.png", array(
                        "alt" => "", "style" => "margin-top:7px;float:right;margin-right:10px;","border"=>"0",
                        'url' => array('controller' => 'pages', 'action' => 'baggage_allowance')
                    )); ?>

              </div>   
                 
                 </td>
            <td  valign="top"  style="border-right:dotted 1px #999;padding:5px;" WIDTH="33%">
            <div class="home_bottom_banners" style="width:315px;" >
                <h4 style="margin-bottom:5px;"><?= __("Flight Destinations");?></h4>
                    <div style="float:left;">
                        <img src="img/banners/flight_destinations.png" align="left" style="margin-right:5px;" /><?php //__("Be the first to know det..");?><!-- Click Here to find out all the special offers and promotions to your favourite Mihin Lanka Destination--><br />
                    </div>
                    
                    <?php echo $this->Html->image("learnmore.png", array(
                        "alt" => "Be the first to know", "style" => "margin-top:7px;float:right;margin-right:10px;", "border"=>"0",
                        'url' => "/destinations"
                    )); ?>
               </div>
                </td>
            <td style="padding:5px;" valign="top" align="" WIDTH="33%">
            <div class="home_bottom_banners" style="<?php if($language == 'tam' ){ echo 'width:310px;'; } else { echo 'width:315px;'; } ?>">
            <h4 style="margin-bottom:5px;color: #000"><?= __("Feedback"); ?> </h4>
				<div style="float:left;">
                        <img src="img/banners/feedback.png" align="left" style="margin-right:5px;" /><?php //__("Be the first to know det..");?><!-- Click Here to find out all the special offers and promotions to your favourite Mihin Lanka Destination--><br />
                    </div>
                    
                    <!--<a href="/feedback" title="Be the first to know">
                    <img src="img/learnmore.png" width="82" height="19" style="margin-top:7px;float:right;margin-right:10px;" border="0"/></a>-->
					
                    <?php echo $this->Html->image("learnmore.png", array(
                        "alt" => "Be the first to know", "style" => "margin-top:7px;float:right;margin-right:10px;","border"=>"0",
                        'url' => array('controller' => 'feedback', 'action' => '')
                    )); ?>
                </div>
            </td>
        </tr>
    </table>
</div>
