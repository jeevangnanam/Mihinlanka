<?= $html->meta('description', 'View the latest promotional offers and deals from Mihin Lanka. Yours to Fly!', array('type' => 'description', 'inline' => false)); ?>

<div id="contentInner">
    <h2><?= __("Promotions"); ?></h2><br /><br />

<?
$a = null;
?>
<? foreach($promotionsAll as $promotion): ?>

<h2 style="margin-bottom:3px;font: 16px 'Calibri'"> <?= $promotion['promotionTo']?></h2>

<table width="100%" class="tblStyle"   cellpadding="0" cellspacing="1">
    <tr></tr>
<tr>
    <th>From</td>
    <th>To</td>
    <th>Fare</td>
    <th>Conditions</td>
</tr>

          <?  foreach($promotion as $doc): ?>

              <?
               ++$a;
               if($a==1)continue;
              ?>

<tr>
    <td><?=$doc['from'];?></td>
    <td><?=$doc['to'];?></td>
    <td><?=$doc['fare'];?></td>
    <td><?=$doc['conditions'];?></td>

</tr>

            <?endforeach;   $a = null;?>
</table>
            <br />
<?endforeach;?>



</div>