<div id="contentInner">
    <h2 ><font face="sans-serif">Duty Free</font></h2><br /><br />
    
    <font face="sans-serif">An extensive range of Duty Free goods are available on- board for Mihin Lanka passengers, with the option of pre-ordering goods required and collecting them on the return trip.
Please speak to member of the Cabin Crew for further details or to obtain a copy of the Duty Free catalogue available on board.</font>

<br /><br /><br />


<section id="services" >


    <div id="shoppingItems">
       <table width="100%" border="0" cellspacing="10" cellpadding="5" class="">
           <?$counter =1; ?>
        <?foreach($products as $product):?>
            <?if($counter==1) echo "<tr>"; $counter++;?>
           <td>
               <div style="float:left;" > <img src='/img/shopping/<?=$product['ShoppingProduct']['primary_image'];?>' /></div>
               <div class="heading"><?=$product['ShoppingProduct']['name']; ?></div>
               <div class="price">$<?=$product['ShoppingProduct']['price']; ?></div>
              
               <div class="cart">
                    <!--   
                     
                            <?if(isset($selectedProducts) and key_exists($product['ShoppingProduct']['id'], $selectedProducts)): ?>
                            <img src="/img/already_added.jpg" alt="<?=$product['ShoppingProduct']['name']; ?> is already in your bag." />
                            <?else:?>
<a href="/pages/duty-free/buy/<?=$product['ShoppingProduct']['name']; ?>/product/id:<?=$product['ShoppingProduct']['id'];?>/name:<?=$product['ShoppingProduct']['name']; ?>"><img src="/img/add_to_bag.jpg" alt="Add to cart" /></a>
                     
                       <?endif;?>
                       -->
                   </div>

           </td>
            <?if($counter == 3){ echo "</tr>"; $counter=1;}?>
        <?endforeach;?>
       </table>
<!--
        <div class="graybox">
           <?//debug($selectedProducts);?>
            <div id="selectedItems">
                <?if(isset($selectedProducts) and 0< count($selectedProducts)): ?>
                    <?foreach($selectedProducts as $key=>$selectedProduct): ?>
                <span class="message"><?=$selectedProduct['name'];?>&nbsp;&nbsp;<a href="/pages/duty-free/action:delete/item/id:<?=$key; ?>" title="Delete <?=$selectedProduct['name'];?> from the basket"><img src="/img/ico_close_blue.gif" border="0" alt="Delete <?=$selectedProduct['name'];?> from the basket" title="Delete <?=$selectedProduct['name'];?> from the basket"/></a></span>
                    <?endforeach;?>
                <?else:?>
                 <i>No items are in the bag..add some :) </i>
                <?endif;?>
            </div>
            <div id="checkout"><i>$<?=$total;?></i>
                <a href="/checkout/duty_free" title="Check Out the purchased items" alt="Check Out the purchased items"><img src="/img/checkout.jpg" border="0" /></a>
            </div>
        </div>
    </div>
    
    -->
    <div class="flightList1">
        <ol style="font-family: sans-serif">
            <li>Exclusive $2.00 discount for Privilege Cardholders on JW Red Label 100 cl, JW Black Label 75 cl & JW Gold Label 75 cl.</li>
            <li>The following currencies are accepted on-board – American Dollar, Bahraini Dinar, UAE Dirham, Kuwaiti Dinar, Omani Riyal, Qatari Riyal and Saudi Arabian Riyal (Please speak to a member of the Cabin Crew regarding current official conversion rates).</li>
            <li>Duty Free items or mini bar will not be available on Gaya / Varanasi flights.</li>
            <li>Mini bar and soft drinks will not be available on Tiruchirapalli/ Maldives flights.</li>
            <li>Due to space restriction on-board, products listed may not always be available.</li>
            <li>Balance monies due after purchases may not always be available in the same currency paid.</li>
     
        </ol>
    </div>
    </section>

</div>
</div>


