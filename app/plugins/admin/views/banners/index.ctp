<div class="banners index">
	<h2><?php __('Banners');?></h2>
	<table cellpadding="0" cellspacing="0" class="tblStyle">
	<tr>
			
			<th><?php echo $this->Paginator->sort('name');?></th>
			
			
			<th><?php echo $this->Paginator->sort('url');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th ><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($banners as $banner):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		
		<td><b><?php echo $banner['Banner']['name']; ?></b>&nbsp;</td>
		
		
		<td><?php echo $banner['Banner']['url']; ?>&nbsp;</td>
		<td><?php echo $banner['Banner']['status']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View","title" => "View")), array('action' => 'view', $banner['Banner']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link( $this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit","title" => "Edit")), array('action' => 'edit', $banner['Banner']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete","title" => "Delete")), array('action' => 'delete', $banner['Banner']['id']),array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $banner['Banner']['name'])); ?>
			<?if($banner['Banner']['status'] == 'APPROVED'): ?>
                           <?php echo $this->Html->link($this->Html->image("/img/icons/control_play.png", array("alt" => "Banner is active, click to pause","title" => "Banner is active, click to pause")), array('action' => 'startstop', $banner['Banner']['id']),array('escape' => false), sprintf(__('Are you sure you want to stop  %s?', true), $banner['Banner']['name'])); ?>
                        <?else: ?>
                           <?php echo $this->Html->link($this->Html->image("/img/icons/control_stop.png", array("alt" => "Banner is not active, click to activate","title" => "Banner is not active, click to activate")), array('action' => 'startstop', $banner['Banner']['id']),array('escape' => false), sprintf(__('Are you sure you want to start  %s?', true), $banner['Banner']['name'])); ?>
                        <?endif;?>
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
		<li><?php echo $this->Html->link(__('New Banner', true), array('action' => 'add')); ?></li>
	</ul>
</div>