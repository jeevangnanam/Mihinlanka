<div class="lowfairSearches index">
	<h2><?php __('Lowfare Searches');?></h2>
	<table cellpadding="0" cellspacing="0" class="tblStyle">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('from');?></th>
			<th><?php echo $this->Paginator->sort('to');?></th>
			<th><?php echo $this->Paginator->sort('oneway_price');?></th>
			<th><?php echo $this->Paginator->sort('return_price');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($lowfairSearches as $lowfairSearch):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $lowfairSearch['LowfairSearch']['id']; ?>&nbsp;</td>
		<td><?php echo $lowfairSearch['LowfairSearch']['from']; ?>&nbsp;</td>
		<td><?php echo $lowfairSearch['LowfairSearch']['to']; ?>&nbsp;</td>
		<td><?php echo $lowfairSearch['LowfairSearch']['oneway_price']; ?>&nbsp;</td>
		<td><?php echo $lowfairSearch['LowfairSearch']['return_price']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View", "title" => "View")), array('action' => 'view', $lowfairSearch['LowfairSearch']['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit", "title" => "Edit")), array('action' => 'edit', $lowfairSearch['LowfairSearch']['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete", "title" => "Delete")), array('action' => 'delete', $lowfairSearch['LowfairSearch']['id']), array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $lowfairSearch['LowfairSearch']['from'] ." to ". $lowfairSearch['LowfairSearch']['to'])); ?>
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
		<li><?php echo $this->Html->link(__('New Lowfare Search', true), array('action' => 'add')); ?></li>
	</ul>
</div>