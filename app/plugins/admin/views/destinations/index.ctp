
<div class="destinations index">
	<h2><?php __('Destinations');?></h2>
	<table cellpadding="0" cellspacing="1" class="tblStyle">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('code');?></th>
			<th><?php echo $this->Paginator->sort('place');?></th>
			<th><?php echo $this->Paginator->sort('country_id');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('order');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($destinations as $destination):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $destination['Destination']['id']; ?>&nbsp;</td>
		<td><?php echo $destination['Destination']['code']; ?>&nbsp;</td>
		<td><?php echo $destination['Destination']['place']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($destination['Country']['name'], array('controller' => 'countries', 'action' => 'view', $destination['Country']['id'])); ?>
		</td>
		<td><?php echo $destination['Destination']['status']; ?>&nbsp;</td>
		<td><?php echo $destination['Destination']['order']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View","title" => "View")), array('action' => 'view', $destination['Destination']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link( $this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit","title" => "Edit")), array('action' => 'edit', $destination['Destination']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete","title" => "Delete")), array('action' => 'delete', $destination['Destination']['id']),array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $destination['Destination']['code'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Destination', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terminals', true), array('controller' => 'terminals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal', true), array('controller' => 'terminals', 'action' => 'add')); ?> </li>
	</ul>
</div>