<div class="travelAgents form">
<?php echo $this->Form->create('TravelAgent');?>
	<fieldset>
 		<legend><?php __('Add Travel Agent'); ?></legend>
	<?php
		echo $this->Form->input('country_id');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('email');
		echo $this->Form->input('email2');
		echo $this->Form->input('phone');
		echo $this->Form->input('phone2');
		echo $this->Form->input('fax');
		echo $this->Form->input('status');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Travel Agents', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>