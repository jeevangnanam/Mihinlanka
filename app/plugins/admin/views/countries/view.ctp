<div class="countries view">
<h2><?php  __('Country');?></h2>

<table class="tblStyle" border="0" cellpadding="0" cellspacing="1" >
    <tr></tr>
    <tr>
        <td>
            <?php __('Code'); ?>
        </td>
        <td>
            <?php echo $country['Country']['code']; ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php __('Name'); ?>
        </td>
        <td>
            <?php echo $country['Country']['name']; ?>
        </td>
    </tr>
</table>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Country', true), array('action' => 'edit', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Country', true), array('action' => 'delete', $country['Country']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Destinations', true), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination', true), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscriptions', true), array('controller' => 'subscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscription', true), array('controller' => 'subscriptions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Travel Agents', true), array('controller' => 'travel_agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Travel Agent', true), array('controller' => 'travel_agents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Destinations');?></h3>
	<?php if (!empty($country['Destination'])):?>
	<table cellpadding = "0" cellspacing = "0" class="tblStyle">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Code'); ?></th>
		<th><?php __('Place'); ?></th>
		<th><?php __('Country Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Order'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['Destination'] as $destination):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $destination['id'];?></td>
			<td><?php echo $destination['code'];?></td>
			<td><?php echo $destination['place'];?></td>
			<td><?php echo $destination['country_id'];?></td>
			<td><?php echo $destination['status'];?></td>
			<td><?php echo $destination['order'];?></td>
			<td class="actions">
			<?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View","title" => "View")), array('action' => 'view', $destination['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit","title" => "Edit")), array('action' => 'edit', $destination['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete","title" => "Delete")), array('action' => 'delete', $destination['id']), array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $destination['place'])); ?>
		</td
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Destination', true), array('controller' => 'destinations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<!--
<div class="related">
	<h3><?php __('Related Subscriptions');?></h3>
	<?php if (!empty($country['Subscription'])):?>
	<table cellpadding = "0" cellspacing = "0" class="tblStyle">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Fullname'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('Phone Resident'); ?></th>
		<th><?php __('Phone Office'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Country Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['Subscription'] as $subscription):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $subscription['id'];?></td>
			<td><?php echo $subscription['title'];?></td>
			<td><?php echo $subscription['fullname'];?></td>
			<td><?php echo $subscription['address'];?></td>
			<td><?php echo $subscription['phone_resident'];?></td>
			<td><?php echo $subscription['phone_office'];?></td>
			<td><?php echo $subscription['email'];?></td>
			<td><?php echo $subscription['country_id'];?></td>
			<td><?php echo $subscription['status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'subscriptions', 'action' => 'view', $subscription['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'subscriptions', 'action' => 'edit', $subscription['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'subscriptions', 'action' => 'delete', $subscription['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscription['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subscription', true), array('controller' => 'subscriptions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="related">
	<h3><?php __('Related Travel Agents');?></h3>
	<?php if (!empty($country['TravelAgent'])):?>
	<table cellpadding = "0" cellspacing = "0" class="tblStyle">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Country Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Email2'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Phone2'); ?></th>
		<th><?php __('Fax'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Order'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['TravelAgent'] as $travelAgent):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $travelAgent['id'];?></td>
			<td><?php echo $travelAgent['country_id'];?></td>
			<td><?php echo $travelAgent['name'];?></td>
			<td><?php echo $travelAgent['address'];?></td>
			<td><?php echo $travelAgent['email'];?></td>
			<td><?php echo $travelAgent['email2'];?></td>
			<td><?php echo $travelAgent['phone'];?></td>
			<td><?php echo $travelAgent['phone2'];?></td>
			<td><?php echo $travelAgent['fax'];?></td>
			<td><?php echo $travelAgent['status'];?></td>
			<td><?php echo $travelAgent['order'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'travel_agents', 'action' => 'view', $travelAgent['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'travel_agents', 'action' => 'edit', $travelAgent['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'travel_agents', 'action' => 'delete', $travelAgent['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $travelAgent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>

<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Travel Agent', true), array('controller' => 'travel_agents', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
-->