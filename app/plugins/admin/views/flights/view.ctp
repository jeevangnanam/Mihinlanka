<div class="flights view">
<h2><?php  __('Flight');?></h2>


<table cellpadding="0" cellspacing="0" class="tblStyle">
    <tr></tr>
    <tr>
        <td>Flight ID</td>
        <td><?php echo $flight['Flight']['id']; ?></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $flight['Flight']['name']; ?></td>
    </tr>
</table>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Flight', true), array('action' => 'edit', $flight['Flight']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Flight', true), array('action' => 'delete', $flight['Flight']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $flight['Flight']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Flights', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flight Schedules', true), array('controller' => 'flight_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight Schedule', true), array('controller' => 'flight_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Flight Schedules');?></h3>
	<?php if (!empty($flight['FlightSchedule'])):?>
	<table cellpadding = "0" cellspacing = "1" class="tblStyle">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Flight Id'); ?></th>
		<th><?php __('Departure Destination Id'); ?></th>
		<th><?php __('Departure Terminal Id'); ?></th>
		<th><?php __('Departure Time'); ?></th>
		<th><?php __('Arrival Destination Id'); ?></th>
		<th><?php __('Arrival Terminal Id'); ?></th>
		<th><?php __('Arrival Time'); ?></th>
		<th><?php __('Frequency'); ?></th>
		<th><?php __('Period'); ?></th>
		<th><?php __('Stops'); ?></th>
		<th><?php __('Route Id'); ?></th>
		<th><?php __('Schedule Type'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($flight['FlightSchedule'] as $flightSchedule):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $flightSchedule['id'];?></td>
			<td><?php echo $flightSchedule['flight_id'];?></td>
			<td><?php echo $flightSchedule['departure_destination_id'];?></td>
			<td><?php echo $flightSchedule['departure_terminal_id'];?></td>
			<td><?php echo $flightSchedule['departure_time'];?></td>
			<td><?php echo $flightSchedule['arrival_destination_id'];?></td>
			<td><?php echo $flightSchedule['arrival_terminal_id'];?></td>
			<td><?php echo $flightSchedule['arrival_time'];?></td>
			<td><?php echo $flightSchedule['frequency'];?></td>
			<td><?php echo $flightSchedule['period'];?></td>
			<td><?php echo $flightSchedule['stops'];?></td>
			<td><?php echo $flightSchedule['route_id'];?></td>
			<td><?php echo $flightSchedule['schedule_type'];?></td>
			<td class="actions">
                <?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View", "title" => "View")), array('action' => 'view', $flightSchedule['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit", "title" => "Edit")), array('action' => 'edit', $flightSchedule['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete", "title" => "Delete")), array('action' => 'delete', $flightSchedule['id']), array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $flightSchedule['id'])); ?>
            </td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
