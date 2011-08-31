<div class="flights form">
<?php echo $this->Form->create('Flight');?>
	<fieldset>
 		<legend><?php __('Edit Flight'); ?></legend>
	<?php
		echo $this->Form->input('id');
		
	?>
       <table cellpadding="0" cellspacing="1" class="tblStyle">
           <tr></tr>
	<tr>
            <td>Name</td><td><?=$this->Form->input('name');?></td>
        </tr>
       </table>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Flight.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Flight.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Flights', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Flight Schedules', true), array('controller' => 'flight_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight Schedule', true), array('controller' => 'flight_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>