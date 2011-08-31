<div class="wrapper flightSchedules view">
<h2><?php  __('Flight Schedule');?></h2>

<table class="tblStyle" border="0" cellpadding="0" cellspacing="1">
    <tr></tr>
    <tr>
        <td><?php __('Flight'); ?></td><td><?= $this->Html->link($flightSchedule['Flight']['name'], array('controller' => 'flights', 'action' => 'view', $flightSchedule['Flight']['id'])); ?>
    </td>
    </tr>

    <tr>
        <td><?php __('Departure Destination'); ?></td>
        <td><?= $this->Html->link($flightSchedule['DepartureDestination']['code'], array('controller' => 'destinations', 'action' => 'view', $flightSchedule['DepartureDestination']['id'])); ?></td>
    </tr>
    <tr>
        <td><?php __('Departure Terminal'); ?></td>
        <td><?php echo $this->Html->link($flightSchedule['DepartureTerminal']['name'], array('controller' => 'terminals', 'action' => 'view', $flightSchedule['DepartureTerminal']['id'])); ?>
</td>
    </tr>
    <tr>
        <td><?php __('Departure Time'); ?></td>
        <td><?php echo $flightSchedule['FlightSchedule']['departure_time']; ?></td>
    </tr>
    <tr>
        <td><?php __('Arrival Destination'); ?></td>
        <td><?php echo $this->Html->link($flightSchedule['ArrivalDestination']['code'], array('controller' => 'destinations', 'action' => 'view', $flightSchedule['ArrivalDestination']['id'])); ?></td>
    </tr>
    <tr>
        <td><?php __('Arrival Terminal'); ?></td>
        <td><?php echo $this->Html->link($flightSchedule['ArrivalTerminal']['name'], array('controller' => 'terminals', 'action' => 'view', $flightSchedule['ArrivalTerminal']['id'])); ?></td>
    </tr>
    <tr>
        <td><?php __('Arrival Time'); ?></td>
        <td><?php echo $flightSchedule['FlightSchedule']['arrival_time']; ?></td>
    </tr>
    <tr>
        <td><?php __('Frequency'); ?></td>
        <td><?php echo $flightSchedule['FlightSchedule']['frequency']; ?></td>
    </tr>
    <tr>
        <td><?php __('Period'); ?></td>
        <td><?php echo $flightSchedule['FlightSchedule']['period']; ?></td>
    </tr>
    <tr>
        <td><?php __('Stops'); ?></td>
        <td><?php echo $flightSchedule['FlightSchedule']['stops']; ?></td>
    </tr>
    <tr>
        <td><?php __('Route'); ?></td>
        <td>			<?php echo $this->Html->link($flightSchedule['FlightRoute']['route'], array('controller' => 'flight_routes', 'action' => 'view', $flightSchedule['FlightRoute']['id'])); ?>
</td>
    </tr>
    <tr>
        <td><?php __('Schedule type'); ?></td>
        <td><?php echo $flightSchedule['FlightSchedule']['schedule_type']; ?></td>
    </tr>
    
</table>
	
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Flight Schedule', true), array('action' => 'edit', $flightSchedule['FlightSchedule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Flight Schedule', true), array('action' => 'delete', $flightSchedule['FlightSchedule']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $flightSchedule['FlightSchedule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Flight Schedules', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight Schedule', true), array('action' => 'add')); ?> </li>
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
