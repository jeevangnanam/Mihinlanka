<div class="payments view">
<h2><?php  __('Payment');?></h2>


<table class="tblStyle" cellpadding="0" cellspacing="1" >
    <tr></tr>

    <tr>
        <th>Name</th><td><?php echo $payment['Payment']['name']; ?></td>
    </tr>
    <tr>
        <th>Phone</th><td><?php echo $payment['Payment']['phone']; ?></td>
    </tr>
    <tr>
        <th>Email</th><td><?php echo $payment['Payment']['email']; ?></td>
    </tr>
    <tr>
        <th>Reference No</th><td><?php echo $payment['Payment']['reference_no']; ?></td>
    </tr>
    <tr>
        <th>Additional Info</th><td><?php echo $payment['Payment']['additional_info']; ?></td>
    </tr>
    <tr>
        <th>Amount</th><td><?php echo $payment['Payment']['amount']; ?></td>
    </tr>
    <tr>
        <th>Date</th><td><?php echo $payment['Payment']['date']; ?></td>
    </tr>
    <tr>
        <th>Merchent Reference</th><td><?php echo $payment['Payment']['merchent_reference']; ?></td>
    </tr>
    <tr>
        <th>Transection Status</th><td><?php echo $payment['Payment']['transection_status']; ?></td>
    </tr>


</table>

<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Payments', true), array('action' => 'index')); ?> </li>
	
</div>
</div>
