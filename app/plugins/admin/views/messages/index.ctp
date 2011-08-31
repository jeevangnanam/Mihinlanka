<div class="messages index">
	<h2><?php __('Messages');?></h2>
	<table cellpadding="0" cellspacing="0" class="tblStyle">
            <tr></tr>
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('subject');?></th>
			<th><?php echo $this->Paginator->sort('message');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($messages as $message):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $message['Message']['id']; ?>&nbsp;</td>
		<td><?php echo $message['Message']['subject']; ?>&nbsp;</td>
		<td><?php echo $message['Message']['message']; ?>&nbsp;</td>
		<td><?php echo $message['Message']['date']; ?>&nbsp;</td>
		<td><?php echo $message['Message']['status']; ?>&nbsp;</td>
		<td class="actions">
                <?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View", "title" => "View")), array('action' => 'view', $message['Message']['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit", "title" => "Edit")), array('action' => 'edit', $message['Message']['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete", "title" => "Delete")), array('action' => 'delete', $message['Message']['id']), array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $message['Message']['subject'])); ?>
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
