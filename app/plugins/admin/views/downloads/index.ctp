<div class="downloads index">
	<h2><?php __('Downloads');?></h2>
	<table cellpadding="0" cellspacing="0" class="tblStyle">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('section_name');?></th>

			<th><?php echo $this->Paginator->sort('file_type_id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($downloads as $download):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $download['Download']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($download['SiteSection']['section_name'], array('controller' => 'site_sections', 'action' => 'view', $download['SiteSection']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($download['FileType']['name'], array('controller' => 'file_types', 'action' => 'view', $download['FileType']['id'])); ?>
		</td>
		<td><?php echo $download['Download']['title']; ?>&nbsp;</td>
		
		<td><?php echo $download['Download']['date']; ?>&nbsp;</td>
		<td><?php echo $download['Download']['status']; ?>&nbsp;</td>
		<td class="actions">
                <a href="<?=$download['Download']['path'];?>" target="_blank"><img src="/img/icons/download.png" /></a>
                <?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View", "title" => "View")), array('action' => 'view', $download['Download']['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit", "title" => "Edit")), array('action' => 'edit', $download['Download']['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete", "title" => "Delete")), array('action' => 'delete', $download['Download']['id']), array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true),$download['Download']['title'])); ?>
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
		<li><?php echo $this->Html->link(__('New Download', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Site Sections', true), array('controller' => 'site_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Section', true), array('controller' => 'site_sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Types', true), array('controller' => 'file_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Type', true), array('controller' => 'file_types', 'action' => 'add')); ?> </li>
	</ul>
</div>