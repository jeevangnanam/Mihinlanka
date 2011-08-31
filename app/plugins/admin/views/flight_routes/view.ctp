<div class="flightRoutes view">
<h2><?php  __('Flight Route');?></h2>
<table class="tblStyle" cellspacing="1" cellpadding="0">
    <tr></tr>
    <tr>
        <td>
            Route
        </td>
        <td>
            <?php echo $flightRoute['FlightRoute']['route']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Status
        </td>
        <td>
            <?php echo $flightRoute['FlightRoute']['status']; ?>
        </td>
    </tr>
</table>

</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Flight Route', true), array('action' => 'edit', $flightRoute['FlightRoute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Flight Route', true), array('action' => 'delete', $flightRoute['FlightRoute']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $flightRoute['FlightRoute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Flight Routes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight Route', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
