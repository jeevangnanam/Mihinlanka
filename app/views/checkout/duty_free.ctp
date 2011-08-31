<div id="contentInner">
    <h2>Check out..</h2><br />

    <div id="services">
            <div id="shoppingItems">
       <table width="100%" border="0" cellspacing="1" cellpadding="5" class="tblStyle">
           <tr></tr>
           
            <?foreach($products as $product): ?>
<tr>
              
               <td> <?= $product['ShoppingProduct']['name']; ?></td>
               <td> $<?= $product['ShoppingProduct']['price']; ?></td>
</tr>

            <?endforeach;?>
<tr>
    <th style="text-align:right">TOTAL &nbsp;&nbsp;</td>
    <th >&nbsp;$<?=$total;?>&nbsp;</td>
</tr>

    </table>
                <div id="buttons">
        <p>
            <a href="/pages/duty-free" title="Existing CSV file details"><< Go back to cart</a>
            <a href="/checkout/checkout/" title="Checkout">Confirm Order :) </a>


    </p></div>
            </div>

                </div
</div>