<div class="payments form">
<?php echo $this->Form->create('Payment');?>
	<fieldset>
 		<legend><?php __('Edit Payment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('reference_no');
		echo $this->Form->input('additional_info');
		echo $this->Form->input('amount');
		echo $this->Form->input('date');
		echo $this->Form->input('merchent_reference');
		echo $this->Form->input('transection_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Payment.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Payment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Payments', true), array('action' => 'index'));?></li>
	</ul>
</div>