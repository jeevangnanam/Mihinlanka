<div id="image_banners">
    <section>
        <div id="gallery">
            <div id="bookingEngine">
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
<div id="preFooter">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td  valign="top" style="border-right:dotted 1px #999;padding:5px;padding-left:20px;" WIDTH="33%"><h4 style="margin-bottom:5px;margin-left:5px"><?= __("30 kilos baggage");?></h4>
                <img src="img/bag.jpg" hspace="0" vspace="10" align="left" style="margin-right:5px;"/><?=__("baggage allawance det..");?><!--With our generous baggage allawance , you can shop till you drop during your holiday--><br />
                 <a href="/pages/baggage-allowance" title="Baggage allowance"><img src="img/learnmore.png" width="82" height="19"  style="margin-top:8px;float:right;margin-right:10px;" border="0"/></a></td>
            <td  valign="top"  style="border-right:dotted 1px #999;padding:5px;" WIDTH="33%"><h4 style="margin-bottom:5px;"><?= __("Be the first to know");?></h4>
                <img src="img/special_offer.jpg" width="79" height="77" vspace="10" align="left" style="margin-right:5px;" /><?= __("Be the first to know det..");?><!-- Click Here to find out all the special offers and promotions to your favourite Mihin Lanka Destination--><br />
                <a href="/subscriptions/add" title="Be the first to know"><img src="img/learnmore.png" width="82" height="19" style="margin-top:8px;float:right;margin-right:10px;" border="0"/></a></td>
            <td style="padding:5px;background-image:url(/img/cloud.jpg);" valign="top" align="" WIDTH="33%"><h4 style="margin-bottom:5px;color: #069"><?= __("Quick price check on the lowest fares"); ?> </h4>



                
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
