<div class="promotions form">
<?php echo $this->Form->create('Promotion');?>
	<fieldset>
 		<legend><?php __('Edit Promotion'); ?></legend>
	<?=$this->Form->input('id');?>
                <table class="tblStyle" border="0" cellpadding="0" cellspacing="1">
                    <tr><th>From</th></tr>
                    <tr><td><?=$this->Form->input('from',array('options' => $from ,'label'=>false));?></td></tr>
                    <tr><th>To</th></tr>
                    <tr><td><?=$this->Form->input('to',array('options' => $to,'label'=>false));?></td></tr>
                    <tr><th>Fare</th></tr>
                    <tr><td><?=$this->Form->input('fare',array('label'=>false));?></td></tr>
                    <tr><th>Fare in number</th></tr>
                    <tr><td><?=$this->Form->input('fare_in_number',array('label'=>false));?></td></tr>
                    <tr><th>Currency</th></tr>
                    <tr><td><?=$this->Form->input('currency_id' , array('label'=>false ,'options' => $currencies));?></td></tr>
                    <tr><th>Conditions</th></tr>
                    <tr><td><?=$this->Form->input('conditions' , array('label'=>false));?></td></tr>
                    <tr><th>Short fare details</th></tr>
                    <tr><td><?=$this->Form->input('fare_details_short', array('label'=>false));?></td></tr>
                    <tr><th>Promote to home</th></tr>
                    <tr><td><?=$this->Form->input('promote_to_home',array('type' => 'select','options' => array('PROMOTED' => 'PROMOTED','NOT_PROMOTED' => 'NOT_PROMOTED'),'label'=>false));?></td></tr>
                    <tr><th>Status</th></tr>
                    <tr><td><?=$this->Form->input('status',array('type' => 'select','options' => array('APPROVED' => 'APPROVED','NOT_APPROVED' => 'NOT_APPROVED'),'label'=>false));?></td></tr>
                    
                </table>
	
	
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Promotion.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Promotion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Promotions', true), array('action' => 'index'));?></li>
	</ul>
</div>