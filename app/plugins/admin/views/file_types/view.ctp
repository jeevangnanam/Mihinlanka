<div class="fileTypes view">
<h2><?php  __('File Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fileType['FileType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fileType['FileType']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $fileType['FileType']['status']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit File Type', true), array('action' => 'edit', $fileType['FileType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete File Type', true), array('action' => 'delete', $fileType['FileType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $fileType['FileType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List File Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Type', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Downloads', true), array('controller' => 'downloads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Download', true), array('controller' => 'downloads', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Downloads');?></h3>
	<?php if (!empty($fileType['Download'])):?>
	<table cellpadding = "0" cellspacing = "1" class="tblStyle">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Section Id'); ?></th>
		<th><?php __('File Type Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Path'); ?></th>
		<th><?php __('Date'); ?></th>
		<th><?php __('Status'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($fileType['Download'] as $download):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $download['id'];?></td>
			<td><?php echo $download['section_id'];?></td>
			<td><?php echo $download['file_type_id'];?></td>
			<td><?php echo $download['title'];?></td>
			<td><?php echo $download['path'];?></td>
			<td><?php echo $download['date'];?></td>
			<td><?php echo $download['status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'downloads', 'action' => 'view', $download['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'downloads', 'action' => 'edit', $download['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'downloads', 'action' => 'delete', $download['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $download['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Download', true), array('controller' => 'downloads', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
