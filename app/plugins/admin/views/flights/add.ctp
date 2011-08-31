<div class="flights form">
<?php echo $this->Form->create('Flight');?>
	<fieldset>
 		<legend><?php __('Add Flight'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Flights', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Flight Schedules', true), array('controller' => 'flight_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight Schedule', true), array('controller' => 'flight_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>