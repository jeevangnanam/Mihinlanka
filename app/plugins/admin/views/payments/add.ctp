<div class="payments form">
<?php echo $this->Form->create('Payment');?>
	<fieldset>
 		<legend><?php __('Add Payment'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Payments', true), array('action' => 'index'));?></li>
	</ul>
</div>