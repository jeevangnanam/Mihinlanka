<div class="travelAgents view">
<h2><?php  __('Travel Agent');?></h2>

<table class="tblStyle" border="0" cellpadding="0" cellspacing="1">
    <tr></tr>
    <tr>
        <td>
            <?php __('Country'); ?>
        </td>
        <td>
            			<?= $this->Html->link($travelAgent['Country']['name'], array('controller' => 'countries', 'action' => 'view', $travelAgent['Country']['id'])); ?>

        </td>
    </tr>
    <tr>
        <td>
<?php __('Name'); ?>
        </td>
        <td>
<?php echo $travelAgent['TravelAgent']['name']; ?>
        </td>
    </tr>
    <tr>
        <td>
<?php __('Address'); ?>
        </td>
        <td>
<?php echo $travelAgent['TravelAgent']['address']; ?>
        </td>
    </tr>
    <tr>
        <td>
<?php __('Email'); ?>
        </td>
        <td>
<?php echo $travelAgent['TravelAgent']['email']; ?>
        </td>
    </tr>
    <tr>
        <td>
<?php __('Email2'); ?>
        </td>
        <td>
<?php echo $travelAgent['TravelAgent']['email2']; ?>
        </td>
    </tr>
    <tr>
        <td>
<?php __('Phone'); ?>
        </td>
        <td>
<?php echo $travelAgent['TravelAgent']['phone']; ?>
        </td>
    </tr>
    <tr>
        <td>
<?php __('Phone2'); ?>
        </td>
        <td>
<?php echo $travelAgent['TravelAgent']['phone2']; ?>
        </td>
    </tr>
    <tr>
        <td>
<?php __('Fax'); ?>
        </td>
        <td>
<?php echo $travelAgent['TravelAgent']['fax']; ?>
        </td>
    </tr>
    <tr>
        <td>
<?php __('Status'); ?>
        </td>
        <td>
<?php echo $travelAgent['TravelAgent']['status']; ?>
        </td>
    </tr>
    <tr>
        <td>
<?php __('Order'); ?>
        </td>
        <td>
<?php echo $travelAgent['TravelAgent']['order']; ?>
        </td>
    </tr>


</table>
	
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Travel Agent', true), array('action' => 'edit', $travelAgent['TravelAgent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Travel Agent', true), array('action' => 'delete', $travelAgent['TravelAgent']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $travelAgent['TravelAgent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Travel Agents', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Travel Agent', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
