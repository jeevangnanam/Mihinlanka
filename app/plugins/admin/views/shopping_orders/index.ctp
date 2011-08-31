<div class="shoppingOrders index">
	<h2><?php __('Shopping Orders');?></h2>
	<table cellpadding="0" cellspacing="0" class="tblStyle">
            <tr></tr>
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			
			<th><?php echo $this->Paginator->sort('ticket_no');?></th>
			<th><?php echo $this->Paginator->sort('flight_date');?></th>
			<th><?php echo $this->Paginator->sort('order_date');?></th>
			<th><?php echo $this->Paginator->sort('quantity');?></th>
			<th><?php echo $this->Paginator->sort('message');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($shoppingOrders as $shoppingOrder):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $shoppingOrder['ShoppingOrder']['id']; ?>&nbsp;</td>
		<td><?php echo $shoppingOrder['ShoppingOrder']['name']; ?>&nbsp;</td>
		<td><?php echo $shoppingOrder['ShoppingOrder']['email']; ?>&nbsp;</td>
	
		<td><?php echo $shoppingOrder['ShoppingOrder']['ticket_no']; ?>&nbsp;</td>
		<td><?php echo $shoppingOrder['ShoppingOrder']['flight_date']; ?>&nbsp;</td>
		<td><?php echo $shoppingOrder['ShoppingOrder']['order_date']; ?>&nbsp;</td>
		<td><?php echo $shoppingOrder['ShoppingOrder']['quantity']; ?>&nbsp;</td>
		<td><?php echo $shoppingOrder['ShoppingOrder']['message']; ?>&nbsp;</td>
		<td><?php echo $shoppingOrder['ShoppingOrder']['status']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View","title" => "View")), array('action' => 'view', $shoppingOrder['ShoppingOrder']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link( $this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit","title" => "Edit")), array('action' => 'edit', $shoppingOrder['ShoppingOrder']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete","title" => "Delete")), array('action' => 'delete', $shoppingOrder['ShoppingOrder']['id']),array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $shoppingOrder['ShoppingOrder']['id'])); ?>
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
