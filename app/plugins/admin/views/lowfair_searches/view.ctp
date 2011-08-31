<div class="lowfairSearches view">
<h2><?php  __('Lowfare Search');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lowfairSearch['LowfairSearch']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('From'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lowfairSearch['LowfairSearch']['from']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('To'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lowfairSearch['LowfairSearch']['to']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Oneway Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lowfairSearch['LowfairSearch']['oneway_price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Return Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lowfairSearch['LowfairSearch']['return_price']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lowfare Search', true), array('action' => 'edit', $lowfairSearch['LowfairSearch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Lowfare Search', true), array('action' => 'delete', $lowfairSearch['LowfairSearch']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lowfairSearch['LowfairSearch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lowfare Searches', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lowfare Search', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
