<div class="shoppingOrders form">
<?php echo $this->Form->create('ShoppingOrder');?>
	<fieldset>
 		<legend><?php __('Add Shopping Order'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('ticket_no');
		echo $this->Form->input('flight_date');
		echo $this->Form->input('order_date');
		echo $this->Form->input('quantity');
		echo $this->Form->input('message');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Shopping Orders', true), array('action' => 'index'));?></li>
	</ul>
</div>