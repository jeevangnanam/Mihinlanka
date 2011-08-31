<div class="subscriptions index">
	<h2><?php __('Subscriptions');?></h2>
	<table cellpadding="0" cellspacing="0" class ="tblStyle">
	<tr>
			
		
			<th><?php echo $this->Paginator->sort('fullname');?></th>
			
			<th><?php echo $this->Paginator->sort('phone_resident');?></th>
	
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('country_id');?></th>
			
			<th class="actions" style="width:100px;"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($subscriptions as $subscription):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		
		
                <td><?php echo $subscription['Subscription']['title']; ?>.<?php echo $subscription['Subscription']['fullname']; ?>&nbsp;</td>

		<td><?php echo $subscription['Subscription']['phone_resident']; ?>&nbsp;</td>
		
		<td><?php echo $subscription['Subscription']['email']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subscription['Country']['name'], array('controller' => 'countries', 'action' => 'view', $subscription['Country']['id'])); ?>
		</td>
		
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View","title" => "View")), array('action' => 'view', $subscription['Subscription']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link( $this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit","title" => "Edit")), array('action' => 'edit', $subscription['Subscription']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete","title" => "Delete")), array('action' => 'delete', $subscription['Subscription']['id']),array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $subscription['Subscription']['fullname'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subscription', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>