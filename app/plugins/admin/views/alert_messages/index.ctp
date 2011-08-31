<div class="alertMessages index">
	<h2><?php __('Alert Messages');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('message');?></th>
			<th><?php echo $this->Paginator->sort('link');?></th>
			<th><?php echo $this->Paginator->sort('color');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($alertMessages as $alertMessage):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $alertMessage['AlertMessage']['id']; ?>&nbsp;</td>
		<td><?php echo $alertMessage['AlertMessage']['message']; ?>&nbsp;</td>
		<td><?php echo $alertMessage['AlertMessage']['link']; ?>&nbsp;</td>
		<td><span style="width:50px;height:50px;background-color: <?php echo $alertMessage['AlertMessage']['color']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
		<td><?php echo $alertMessage['AlertMessage']['status']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View", "title" => "View")), array('action' => 'view', $alertMessage['AlertMessage']['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit", "title" => "Edit")), array('action' => 'edit', $alertMessage['AlertMessage']['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete", "title" => "Delete")), array('action' => 'delete', $alertMessage['AlertMessage']['id']), array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true),$alertMessage['AlertMessage']['message'])); ?>
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
		<li><?php echo $this->Html->link(__('New Alert Message', true), array('action' => 'add')); ?></li>
	</ul>
</div>