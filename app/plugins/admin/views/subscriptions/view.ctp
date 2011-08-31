<div class="subscriptions view">
<h2><?php  __('Subscription');?></h2>

<table class="tblStyle" cellpadding="0" cellspacing="1">
<tr>
</tr>
    <tr>
        <td>
            Title
        </td>
        <td>
            <?php echo $subscription['Subscription']['title']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Full name
        </td>
        <td>
            <?php echo $subscription['Subscription']['fullname']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Address
        </td>
        <td>
            <?php echo $subscription['Subscription']['address']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Phone resident
        </td>
        <td>
            <?php echo $subscription['Subscription']['phone_resident']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Phone office
        </td>
        <td>
            <?php echo $subscription['Subscription']['phone_office']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Email
        </td>
        <td>
            <?php echo $subscription['Subscription']['email']; ?>
        </td>
    </tr>
    <tr>
        <td>
            Country
        </td>
        <td>
            <?php echo $this->Html->link($subscription['Country']['name'], array('controller' => 'countries', 'action' => 'view', $subscription['Country']['id'])); ?>
        </td>
    </tr>
    <tr>
        <td>
            Status
        </td>
        <td>
            <?php echo $subscription['Subscription']['status']; ?>
        </td>
    </tr>
</table>

</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subscription', true), array('action' => 'edit', $subscription['Subscription']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Subscription', true), array('action' => 'delete', $subscription['Subscription']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscription['Subscription']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscriptions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscription', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
