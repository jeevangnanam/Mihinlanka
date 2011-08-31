<div class="shoppingOrders view">
<h2><?php  __('Shopping Order');?></h2>

<table class="tblStyle" cellspacing="1" cellpadding="1">
    <tr></tr>
    <tr>
        <td>
            ID
        </td>
        <td>
            <?php echo $shoppingOrder['ShoppingOrder']['id']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Name
        </td>
        <td>
            <?php echo $shoppingOrder['ShoppingOrder']['name']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Email
        </td>
        <td>
            <?php echo $shoppingOrder['ShoppingOrder']['email']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Phone
        </td>
        <td>
            <?php echo $shoppingOrder['ShoppingOrder']['phone']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Ticket
        </td>
        <td>
            <?php echo $shoppingOrder['ShoppingOrder']['ticket_no']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Flight date
        </td>
        <td>
            <?php echo $shoppingOrder['ShoppingOrder']['flight_date']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Order date
        </td>
        <td>
            <?php echo $shoppingOrder['ShoppingOrder']['order_date']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Quantity
        </td>
        <td>
            <?php echo $shoppingOrder['ShoppingOrder']['quantity']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Message
        </td>
        <td>
            <?php echo $shoppingOrder['ShoppingOrder']['message']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Status
        </td>
        <td>
            <?php echo $shoppingOrder['ShoppingOrder']['status']; ?>
        </td>
    </tr>
</table>
	
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shopping Order', true), array('action' => 'edit', $shoppingOrder['ShoppingOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Shopping Order', true), array('action' => 'delete', $shoppingOrder['ShoppingOrder']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $shoppingOrder['ShoppingOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shopping Orders', true), array('action' => 'index')); ?> </li>
		 
	</ul>
</div>
