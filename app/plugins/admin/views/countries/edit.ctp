<div class="countries form">
<?php echo $this->Form->create('Country');?>
	<fieldset>
 		<legend><?php __('Edit Country'); ?></legend>
                <table class="tblStyle" cellspacing="1" cellpadding="0">
                    <tr></tr>
                    <tr>
                        <td>Code</td>
                        <td><?php echo $this->Form->input('code',array('label'=> false)); ?></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?php echo $this->Form->input('name',array('label' => false)); ?></td>
                    </tr>
                </table>
	
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Country.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Country.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Destinations', true), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination', true), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscriptions', true), array('controller' => 'subscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscription', true), array('controller' => 'subscriptions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Travel Agents', true), array('controller' => 'travel_agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Travel Agent', true), array('controller' => 'travel_agents', 'action' => 'add')); ?> </li>
	</ul>
</div>