<div class="flights index">
	<h2><?php __('Flights');?></h2>
            <div class="message">Search the flights by Flight name(eg: MJ 301)  : <input type="text" style="background: url(&quot;/img/icons/search.png&quot;) no-repeat scroll 0% 0% white; padding-left: 15px;" class="agents showFilter1"></div>

	<table cellpadding="0" cellspacing="0" class="tblStyle">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($flights as $flight):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $flight['Flight']['id']; ?>&nbsp;</td>
		<td class="agents showFilter1"><?php echo $flight['Flight']['name']; ?>&nbsp;</td>
		 <td class="actions">
                <?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View", "title" => "View")), array('action' => 'view', $flight['Flight']['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit", "title" => "Edit")), array('action' => 'edit', $flight['Flight']['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete", "title" => "Delete")), array('action' => 'delete', $flight['Flight']['id']), array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $flight['Flight']['name'])); ?>
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
		<li><?php echo $this->Html->link(__('New Flight', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Flight Schedules', true), array('controller' => 'flight_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight Schedule', true), array('controller' => 'flight_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script>

    $($(".agents")).showFilter("table tbody tr", { criteria: function(e) { return [e.children(".agents").text()]; } });
</script>