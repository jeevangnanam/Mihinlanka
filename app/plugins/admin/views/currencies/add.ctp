<div class="currencies form">
<?php echo $this->Form->create('Currency');?>
	<fieldset>
 		<legend><?php __('Add Currency'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('symbol');
		echo $this->Form->input('country');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Currencies', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Promotions', true), array('controller' => 'promotions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promotion', true), array('controller' => 'promotions', 'action' => 'add')); ?> </li>
	</ul>
</div>