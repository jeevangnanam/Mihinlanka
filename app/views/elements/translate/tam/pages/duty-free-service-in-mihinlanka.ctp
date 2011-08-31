 
<div id="contentInner">
    <h2>தீர்வையற்ற பொருட்கள் பகுதி</h2><br /><br />
    <b>தீர்வையற்ற பொருட்களை முன்பதிவு செய்யும் வசதி</b><br /><br />
மிஹின் லங்கா பயணிகள் சுங்கத்தீர்வையற்ற பொருட்களை முன்பதிவு செய்து கொள்முதல் செய்யமுடியும். அதற்காக, விமானத்தினுள் விபரங்கள் அடங்கிய கையேடுகளை பெற்றுக்கொள்ள முடிவதுடன், விமான நிலையத்திலுள்ள அலுவலகத்தில் ஆலோசனைகளையும் பெறமுடியும்<br /><br /><br />


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
    <div class="flightList">
        <ol>
            <li>சுங்கத்தீர்வையற்ற பொருட்கள் பெற்றுக்கொள்ளல் மற்றும் சிறிய மதுபான சாலை வசதிகள் GAY/VNS விமானங்களில் இல்லை.</li>
            <li>சிறிய மதுபான சாலை மற்றும் மென் பாணங்களை TRZ&MLE பயணங்களில் பெற்றுக்கொள்ள முடியாது.</li>
            <li>ரெட் லேபல் 100சீஎல், பிளக் லேபல் 75சீஎல் பானங்களை கடனட்டையில் கொள்வனவு செய்யும் போது 2 அமெரிக்க டொலர்கள் தள்ளுபடி வசதியுண்டு.</li>
            <li>நிரல்படுத்தப்பட்ட தீர்வையற்ற பொருட்கள் எல்லா நேரங்களிலும் விமானத்தில் கிடைக்காது.</li>
            <li>விமானத்தில் பொருட்களை கொள்வனவு செய்யும் போது அமெரிக்க டொலர், பஹ்ரெய்ன் டினால், ஐக்கிய அரசு எமிரேட்ஸ் திர்ஹாம், குவைத் தினார், ஓமான் றியால், கட்டார் றியால் மற்றும் சவுதி றியால் ஆகியவற்றை செலுத்த முடியும.</li>
            <li>நீங்கள் செலுத்தும் பணத்தின் (அதாவது மேற்குறிப்பிட்டவை) மீதிகளை உடனடியாக பெறமுடியாதநிலை சில வேளைகளில் ஏற்படலாம.</li>
            <li>நிகழ்கால பணப் பரிமாற்ற விபரங்களைப் பெற்றுக்கொள்ள விமானத்தின் பயணிகள் ஆலோசனை பகுதியை அணுகவும.</li>
        </ol>
    </div>
    </section>

</div>


