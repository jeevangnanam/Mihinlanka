<div class="flightRoutes form">
<?php echo $this->Form->create('FlightRoute');?>
	<fieldset>
 		<legend><?php __('Edit Flight Route'); ?></legend>
                <?= $this->Form->input('id'); ?>
                <table class="tblStyle" cellpadding="0" cellspacing="1">
                    <tr></tr>
                    <tr>
                        <td>Route</td>
                        <td><?=$this->Form->input('route',array('size' => 40,'label' => false));?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><?=$this->Form->input('status',array('label' => false,'options' => array('APPROVED' =>'APPROVED' ,'NOT_APPROVED' => 'NOT_APPROVED')));?></td>
                    </tr>
                </table>
	
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('FlightRoute.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('FlightRoute.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Flight Routes', true), array('action' => 'index'));?></li>
	</ul>
</div>