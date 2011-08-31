<div class="siteSections index">
	<h2><?php __('Site Sections');?></h2>
	<table cellpadding="0" cellspacing="0" class="tblStyle">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('section_name');?></th>
			<th><?php echo $this->Paginator->sort('section_status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($siteSections as $siteSection):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $siteSection['SiteSection']['id']; ?>&nbsp;</td>
		<td><?php echo $siteSection['SiteSection']['section_name']; ?>&nbsp;</td>
		<td><?php echo $siteSection['SiteSection']['section_status']; ?>&nbsp;</td>
		<td class="actions">
                <?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View", "title" => "View")), array('action' => 'view', $siteSection['SiteSection']['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit", "title" => "Edit")), array('action' => 'edit',$siteSection['SiteSection']['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete", "title" => "Delete")), array('action' => 'delete', $siteSection['SiteSection']['id']), array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $siteSection['SiteSection']['section_name'])); ?>
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
		<li><?php echo $this->Html->link(__('New Site Section', true), array('action' => 'add')); ?></li>
	</ul>
</div>