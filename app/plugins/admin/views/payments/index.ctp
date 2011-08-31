<div class="payments index">
	<h2><?php __('Payments');?></h2>
	<table cellpadding="0" cellspacing="0" class="tblStyle">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			
			<th><?php echo $this->Paginator->sort('reference_no');?></th>
			
			<th><?php echo $this->Paginator->sort('amount');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('merchent_reference');?></th>
			<th><?php echo $this->Paginator->sort('transection_status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($payments as $payment):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $payment['Payment']['id']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['name']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['phone']; ?>&nbsp;</td>
		
		<td><?php echo $payment['Payment']['reference_no']; ?>&nbsp;</td>
		
		<td><?php echo $payment['Payment']['amount']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['date']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['merchent_reference']; ?>&nbsp;</td>
		<td><?php echo $payment['Payment']['transection_status']; ?>&nbsp;</td>
		

                <td class="actions">
			<?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View","title" => "View")), array('action' => 'view', $payment['Payment']['id']),array('escape' => false)); ?>
			<?php //echo $this->Html->link( $this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit","title" => "Edit")), array('action' => 'edit', $payment['Payment']['id']),array('escape' => false)); ?>
			<?php //echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete","title" => "Delete")), array('action' => 'delete', $payment['Payment']['id']),array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $payment['Payment']['name'])); ?>
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
