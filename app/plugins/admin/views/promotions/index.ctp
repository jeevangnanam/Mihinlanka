<div class="promotions index">
	<h2><?php __('Promotions');?></h2>
	<table cellpadding="0" cellspacing="0" class="tblStyle">
	<tr>
			
			<th><?php echo $this->Paginator->sort('fare');?></th>
			<th><?php echo $this->Paginator->sort('fare_in_number');?></th>
		
			<th><?php echo $this->Paginator->sort('conditions');?></th>
			<th><?php echo $this->Paginator->sort('fare_details_short');?></th>
			<th><?php echo $this->Paginator->sort('promote_to_home');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($promotions as $promotion):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		
		<td><?php echo $promotion['Promotion']['fare']; ?>&nbsp;</td>
		<td><?php echo $promotion['Promotion']['fare_in_number']; ?>&nbsp;</td>
		
		<td><?php echo $promotion['Promotion']['conditions']; ?>&nbsp;</td>
		<td><?php echo $promotion['Promotion']['fare_details_short']; ?>&nbsp;</td>
		<td><?php echo $promotion['Promotion']['promote_to_home']; ?>&nbsp;</td>
		<td><?php echo $promotion['Promotion']['status']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View","title" => "View")), array('action' => 'view', $promotion['Promotion']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link( $this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit","title" => "Edit")), array('action' => 'edit', $promotion['Promotion']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete","title" => "Delete")), array('action' => 'delete', $promotion['Promotion']['id']),array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $promotion['Promotion']['fare'])); ?>
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
		<li><?php echo $this->Html->link(__('New Promotion', true), array('action' => 'add')); ?></li>
	</ul>
</div>