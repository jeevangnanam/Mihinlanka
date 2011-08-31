<script>
    $(document).ready(function() {
    $("#frm1").submit();

    $('#PaymentAddForm').ketchup();
    });
    </script>

<? if(!isset($content)): ?>
<?php echo $this->Form->create('Payment');?>
<h4>Please use the below form in order to make payments for any changes to your itineary with Mihin Lanka.</h3><br />
<p>Please only use this payment system, once you have made the request through our <a href="/pages/mihinlanka-call-centers">call centre</a></p><br />
<table class="tblStyle" border="0" cellpadding="0" cellspacing="1" style="width:700px;">
    <tr></tr>
    <tr>
        <th colspan="2">Payment form</th>
    </tr>
    <tr>
       <td>Full name</td> <td ><?=  $this->Form->input('name', array('label' => false,'size' => '50'));?></td>
    </tr>
    <tr>
        <td>Phone</td><td><?=  $this->Form->input('phone', array('label' => false));?></td>
    </tr>
    <tr>
        <td>Email</td><td><?=  $this->Form->input('email', array('label' => false,'data-validate' => "validate(email,required)"));?></td>
    </tr>
    <tr>
        <td>Reference No</td><td><?=  $this->Form->input('reference_no', array('label' => false , 'data-validate' => "validate(required)"));?></td>
    </tr>
   
    <tr>
         <td>Additional info</td><td ><?=  $this->Form->input('additional_info', array('label' => false));?></td>
    </tr>
    <tr>
        <td>Amount (LKR) </td><td><?=  $this->Form->input('amount', array('label' => false,'id' => 'amount', 'data-validate' => "validate(number,required)"));?><i>eg: 10.00</i></td>
    </tr>
    <tr>
        <td></td><td align="right"><?=  $this->Form->input('date', array('type' => 'hidden','id' => 'date','value' => date('Y-m-d h:i:s')));?>
            <input type="submit" value="Make the payment"  style="height:30px;background-color:   #009900 ; color: #ffffff;padding:5px;border: solid 1px black;"/></td>
    </tr>
</table>
<?php echo $this->Form->end();?>

<?else: ?>
 <?=$content;?>
<?endif;?>