<div class="countries index">
	<h2><?php __('Countries');?></h2>
	<table cellpadding="0" cellspacing="0" class="tblStyle">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('code');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($countries as $country):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $country['Country']['id']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['code']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View","title" => "View")), array('action' => 'view', $country['Country']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit","title" => "Edit")), array('action' => 'edit', $country['Country']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete","title" => "Delete")), array('action' => 'delete', $country['Country']['id']), array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $country['Country']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p class="infomation">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'next'));?>
	  	<?php echo $this->Paginator->numbers();?>
 
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled') );?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Country', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Destinations', true), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination', true), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscriptions', true), array('controller' => 'subscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscription', true), array('controller' => 'subscriptions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Travel Agents', true), array('controller' => 'travel_agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Travel Agent', true), array('controller' => 'travel_agents', 'action' => 'add')); ?> </li>
	</ul>
</div>