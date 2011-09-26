<? if(!isset($bookingSmallDisabled) or ($bookingSmallDisabled != true)): ?> 
<div id="leftBlock">
    <div id="leftOpenClose">
        <img  src="/img/flight_forward.png" id="leftOpenCloseIcon"/>
    </div>
    
    <div id="leftBlockContent">
    
    
        <?= $this->element('side/booking_small'); ?>
      
    </div>
 

</div>
 <? endif; ?>

<? if(!isset($leftSpecialOffers) or ($leftSpecialOffers == true)): ?>
<div id="leftSpecialOffers">
    <div id="leftSpecialOffersOpenClose">
        <img  src="/img/specialOffers_forward.png" id="leftSpecialOffersOpenCloseIcon"/>
    </div>
    <div id="leftSpecialOffersContent">
   
    <?= $this->element('body/fairs'); ?>
    </div>


</div>

<? endif; ?>
<div>
    &nbsp;

</div>