<div class="messages form">
<?php echo $this->Form->create('Message');?>
	<fieldset>
 		<legend><?php __('Edit Message'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subject');
		echo $this->Form->input('message');
		echo $this->Form->input('date');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Message.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Message.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Messages', true), array('action' => 'index'));?></li>
	</ul>
</div>