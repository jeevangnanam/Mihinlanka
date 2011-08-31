<div id="specialFairs">
<h2>Special Offers</h2>
    <table border="0" cellspacing="2" cellpadding="0" align="right">

        <tr>
            <? foreach ($promotions as $promotion): ?>
                <td><?= $promotion['Promotion']['fare_details_short']; ?><br />
<br />
<h2><?= $promotion['Promotion']['fare_in_number']; ?></h2>
                    <br />
                    <a href="/promotions" title="Promotions"><img src="/img/letsgo.gif" border="0"/></a></td>
            <? endforeach; ?>
        </tr>
    </table>
</div>