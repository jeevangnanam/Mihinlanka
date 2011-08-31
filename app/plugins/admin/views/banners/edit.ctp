<div class="form">
    <h2><?php  __('Banners');?></h2>
<?php echo $this->Form->create('Banner',array('enctype' => 'multipart/form-data'));?>
	<fieldset>
 		<legend><?php __('Edit Banner'); ?></legend>
                <table width="100%" border="0" class="tblStyle" >
	
		<tr><td></td><td> <?=$this->Form->input('id');?></td></tr>
		<tr><td>Name</td><td> <?= $this->Form->input('name',array('label'=>false));?></td></tr>
		<tr><td>Description</td><td> <?= $this->Form->input('description',array('type'=>'textarea','label' => false));?></td></tr>
		<tr><td>File path</td><td> <?= $this->Form->input('banner.file_path',array('label'=>false,'type' => 'file'));?></td></tr>
		<tr><td>Url</td><td> <?= $this->Form->input('url',array('label'=>false));?></td></tr>
		<tr><td>Status</td><td> <?= $this->Form->input('status',array('type' => 'select','options' => array('APPROVED' => 'Approved' , 'NOT_APPROVED' => 'Not Approved'),'label' => false));?></td></tr>

        </table>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Banner.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Banner.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Banners', true), array('action' => 'index'));?></li>
	</ul>
</div>