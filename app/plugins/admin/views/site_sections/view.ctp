<div class="siteSections view">
<h2><?php  __('Site Section');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $siteSection['SiteSection']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Section Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $siteSection['SiteSection']['section_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Section Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $siteSection['SiteSection']['section_status']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Site Section', true), array('action' => 'edit', $siteSection['SiteSection']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Site Section', true), array('action' => 'delete', $siteSection['SiteSection']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $siteSection['SiteSection']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Site Sections', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Section', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
