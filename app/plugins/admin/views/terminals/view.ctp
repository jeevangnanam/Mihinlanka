<div class="terminals view">
<h2><?php  __('Terminal');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $terminal['Terminal']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Destination'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($terminal['Destination']['id'], array('controller' => 'destinations', 'action' => 'view', $terminal['Destination']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $terminal['Terminal']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Terminal', true), array('action' => 'edit', $terminal['Terminal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Terminal', true), array('action' => 'delete', $terminal['Terminal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $terminal['Terminal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Terminals', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Destinations', true), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination', true), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
	</ul>
</div>
