<p style="font-size: 12px; line-height: 20px; font-weight: normal; color: #56667d; margin: 0; margin-bottom: 10px;">
    <strong><em>Order details</em></strong><em></em></p>
<p>&nbsp;</p>

<div id="shoppingItems">
    <table width="100%" border="0" cellspacing="5" cellpadding="5" >
        <tr></tr>

        <? foreach ($products as $product): ?>
            <tr>

                <td> <?= $product['ShoppingProduct']['name']; ?></td>
                <td> $<?= $product['ShoppingProduct']['price']; ?></td>
            </tr>

        <? endforeach; ?>
            <tr>
                <th style="text-align:right">TOTAL &nbsp;&nbsp;</th>
                <th align="left" >&nbsp;$<?= $total; ?>&nbsp;</th>
        </tr>

    </table>
   
</div>
<strong><em>Ordered by</em></strong><em></em></p>
<div id="orderedBy">
    <table width="100%" border="0" cellspacing="5" cellpadding="5" >
        <tr></tr>

        
            <tr>

                <td> Name : </td>
                <td> <?=$name; ?></td>
            </tr>
            <tr>

                <td> Email : </td>
                <td> <?=$email; ?></td>
            </tr>
            <tr>

                <td> Phone : </td>
                <td> <?=$phone; ?></td>
            </tr>
            <tr>

                <td> Ticket : </td>
                <td> <?=$ticket; ?></td>
            </tr>
            <tr>

                <td> Flight date : </td>
                <td> <?=$flightDate; ?></td>
            </tr>
            <tr>

                <td> Order Date : </td>
                <td> <?=$orderDate; ?></td>
            </tr>
            <tr>

                <td> Message : </td>
                <td> <?=$message; ?></td>
            </tr>

    </table>

</div>