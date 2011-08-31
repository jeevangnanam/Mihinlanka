<div class="flightSchedules index">
    <h2><?php __('Flight Schedules'); ?></h2>
    <div class="message">Search the flights by Flight name(eg: MJ 301)  : <input type="text" style="background: url(&quot;/img/icons/search.png&quot;) no-repeat scroll 0% 0% white; padding-left: 15px;" class="agents showFilter1"></div>
    <table cellpadding="0" cellspacing="0" class="tblStyle">
        <tr>

            <th><?php echo $this->Paginator->sort('flight_id'); ?></th>
            <th><?php echo $this->Paginator->sort('departure_destination_id'); ?></th>

            <th><?php echo $this->Paginator->sort('departure_time'); ?></th>
            <th><?php echo $this->Paginator->sort('arrival_destination_id'); ?></th>

            <th><?php echo $this->Paginator->sort('arrival_time'); ?></th>
            <th><?php echo $this->Paginator->sort('frequency'); ?></th>
            <th><?php echo $this->Paginator->sort('period'); ?></th>
            <th><?php echo $this->Paginator->sort('stops'); ?></th>
            <th><?php echo $this->Paginator->sort('route_id'); ?></th>
            <th><?php __('Actions'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($flightSchedules as $flightSchedule):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
        ?>
            <tr<?php echo $class; ?>>

                <td class="agents showFilter1">
                <?php echo $this->Html->link($flightSchedule['Flight']['name'], array('controller' => 'flights', 'action' => 'view', $flightSchedule['Flight']['id'])); ?>
            </td>
            <td class="agents showFilter1">
                <?php echo $this->Html->link($flightSchedule['DepartureDestination']['code'], array('controller' => 'destinations', 'action' => 'view', $flightSchedule['DepartureDestination']['id'])); ?>
            </td>

            <td><?php echo $flightSchedule['FlightSchedule']['departure_time']; ?>&nbsp;</td>
            <td>
                <?php echo $this->Html->link($flightSchedule['ArrivalDestination']['code'], array('controller' => 'destinations', 'action' => 'view', $flightSchedule['ArrivalDestination']['id'])); ?>
            </td>

            <td><?php echo $flightSchedule['FlightSchedule']['arrival_time']; ?>&nbsp;</td>
            <td><?php echo $flightSchedule['FlightSchedule']['frequency']; ?>&nbsp;</td>
            <td><?php echo $flightSchedule['FlightSchedule']['period']; ?>&nbsp;</td>
            <td><?php echo $flightSchedule['FlightSchedule']['stops']; ?>&nbsp;</td>
            <td>
                <?php echo $this->Html->link($flightSchedule['FlightRoute']['route'], array('controller' => 'flight_routes', 'action' => 'view', $flightSchedule['FlightRoute']['id'])); ?>
            </td>
            <td class="actions">
                <?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View", "title" => "View")), array('action' => 'view', $flightSchedule['FlightSchedule']['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit", "title" => "Edit")), array('action' => 'edit', $flightSchedule['FlightSchedule']['id']), array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete", "title" => "Delete")), array('action' => 'delete', $flightSchedule['FlightSchedule']['id']), array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $flightSchedule['FlightSchedule']['id'])); ?>
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
        <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class' => 'disabled')); ?>
        	 | 	<?php echo $this->Paginator->numbers(); ?>
                |
        <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled')); ?>
            </div>
        </div>
        <div class="actions">
            <h3><?php __('Actions'); ?></h3>
            <ul>
                <li><?php echo $this->Html->link(__('New Flight Schedule', true), array('action' => 'add')); ?></li>
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
<script>

    $($(".agents")).showFilter("table tbody tr", { criteria: function(e) { return [e.children(".agents").text()]; } });
</script>