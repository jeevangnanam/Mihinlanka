<div class="destinations view">
<h2><?php  __('Destination');?></h2>
	
<table class="tblStyle" cellpadding="0" cellspacing="1">
    <tr></tr>
    <tr>
        <td><?php __('Code'); ?></td>
        <td><?php echo $destination['Destination']['code']; ?></td>
    </tr>
    <tr>
        <td><?php __('Place'); ?></td>
        <td><?php echo $destination['Destination']['place']; ?></td>
    </tr>
    <tr>
        <td><?php __('Country'); ?></td>
        <td><?php echo $this->Html->link($destination['Country']['name'], array('controller' => 'countries', 'action' => 'view', $destination['Country']['id'])); ?></td>
    </tr>
    <tr>
        <td><?php __('Status'); ?></td>
        <td><?php echo $destination['Destination']['status']; ?></td>
    </tr>
    <tr>
        <td><?php __('order'); ?></td>
        <td><?php echo $destination['Destination']['order']; ?></td>
    </tr>
</table>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Destination', true), array('action' => 'edit', $destination['Destination']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Destination', true), array('action' => 'delete', $destination['Destination']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $destination['Destination']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Destinations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terminals', true), array('controller' => 'terminals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal', true), array('controller' => 'terminals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Terminals');?></h3>
	<?php if (!empty($destination['Terminal'])):?>
	<table cellpadding = "0" cellspacing = "0" class="tblStyle">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Destination Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($destination['Terminal'] as $terminal):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $terminal['id'];?></td>
			<td><?php echo $terminal['destination_id'];?></td>
			<td><?php echo $terminal['name'];?></td>
			<td class="actions">
			<?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View","title" => "View")), array('action' => 'view', $terminal['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link( $this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit","title" => "Edit")), array('action' => 'edit', $terminal['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete","title" => "Delete")), array('action' => 'delete', $terminal['id']),array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $terminal['id'])); ?>
		</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Terminal', true), array('controller' => 'terminals', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
