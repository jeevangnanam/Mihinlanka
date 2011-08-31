<div class="fileTypes form">
<?php echo $this->Form->create('FileType');?>
	<fieldset>
 		<legend><?php __('Edit File Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('status',array('options' => array('APPROVED' => 'APPROVED' , 'NOT_APPROVED' => 'NOT_APPROVED')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('FileType.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('FileType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List File Types', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Downloads', true), array('controller' => 'downloads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Download', true), array('controller' => 'downloads', 'action' => 'add')); ?> </li>
	</ul>
</div>