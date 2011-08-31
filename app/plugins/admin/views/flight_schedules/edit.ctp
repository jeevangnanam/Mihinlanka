<div class="flightSchedules form">
<?php echo $this->Form->create('FlightSchedule');?>
	<fieldset>
 		<legend><?php __('Edit Flight Schedule'); ?></legend>

<?= $this->Form->input('id');?>
	<table class="tblStyle" cellpadding="0" cellspacing="1">
                    <tr></tr>
                    <tr>
                        <td>Flight</td>
                        <td><?=$this->Form->input('flight_id' ,array('label' => false));?></td></tr>
                    <tr>
                        <td>Departure Destination</td><td><?=$this->Form->input('departure_destination_id',array('label' => false));?></td>
                    </tr>
                    <tr>
                        <td>Departure Terminal</td><td><?=$this->Form->input('departure_terminal_id',array('label' => false));?></td>
                    </tr>
                    <tr>
                        <td>Departure Time</td><td><?=$this->Form->input('departure_time',array('label' => false));?></td>
                    </tr>
                    <tr>
                        <td>Arrival Destination</td><td><?=$this->Form->input('arrival_destination_id',array('label' => false));?></td>
                    </tr>
                    <tr>
                        <td>Arrival Terminal</td><td><?=$this->Form->input('arrival_terminal_id',array('label' => false));?></td>
                    </tr>
                    <tr>
                        <td>Arrival Time</td><td><?=$this->Form->input('arrival_time',array('label' => false));?></td>
                    </tr>
                    <tr>
                        <td>Frequency</td><td><?=$this->Form->input('frequency',array('label' => false));?></td>
                    </tr>
                    <tr>
                        <td>Period</td><td><?=$this->Form->input('period',array('label' => false,'size' => 40));?></td>
                    </tr>
                    <tr>
                        <td>Stops</td><td><?=$this->Form->input('stops',array('label' => false));?></td>
                    </tr>
                    <tr>
                        <td>Route</td><td><?=$this->Form->input('route_id',array('label' => false));?></td>
                    </tr>
                    <tr>
                        <td>Schedule type</td><td><?=$this->Form->input('schedule_type',array('label' => false,'type' => 'select' , 'options' => array('NORMAL' => 'NORMAL','FLIGHT_CANCEL' => 'FLIGHT_CANCEL','SCHEDULE_CHANGE' => 'SCHEDULE_CHANGE')));?></td>
                    </tr>
                </table>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('FlightSchedule.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('FlightSchedule.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Flight Schedules', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Flights', true), array('controller' => 'flights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight', true), array('controller' => 'flights', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Destinations', true), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departure Destination', true), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terminals', true), array('controller' => 'terminals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departure Terminal', true), array('controller' => 'terminals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flight Routes', true), array('controller' => 'flight_routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route', true), array('controller' => 'flight_routes', 'action' => 'add')); ?> </li>
	</ul>
</div>