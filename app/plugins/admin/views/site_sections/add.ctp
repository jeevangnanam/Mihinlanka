<div class="siteSections form">
<?php echo $this->Form->create('SiteSection');?>
	<fieldset>
 		<legend><?php __('Add Site Section'); ?></legend>
	<?php
		echo $this->Form->input('section_name');
		echo $this->Form->input('section_status',array('options' => array('APPROVED' => 'APPROVED' , 'NOT_APPROVED' => 'NOT_APPROVED')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Site Sections', true), array('action' => 'index'));?></li>
	</ul>
</div>