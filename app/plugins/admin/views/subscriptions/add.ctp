<div class="subscriptions form">
<?php echo $this->Form->create('Subscription');?>
	<fieldset>
 		<legend><?php __('Add Subscription'); ?></legend>
	<table class="tblStyle" cellpadding="0" cellspacing="1">
                    <tr></tr>
                    <tr>
                        <td>Title</td>
                        <td><?=$this->Form->input('title',array('label'=>false));?></td>
                    </tr>
                    <tr>
                        <td>Full name</td>
                        <td><?=$this->Form->input('fullname',array('label'=>false));?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><?=$this->Form->input('address',array('label'=>false));?></td>
                    </tr>
                    <tr>
                        <td>Phone resident</td>
                        <td><?=$this->Form->input('phone_resident',array('label'=>false));?></td>
                    </tr>
                    <tr>
                        <td>Phone office</td>
                        <td><?=$this->Form->input('phone_office',array('label'=>false));?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?=$this->Form->input('email',array('label'=>false));?></td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td><?=$this->Form->input('country_id',array('label'=>false));?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><?=$this->Form->input('status',array('label'=>false,'options' => array('APPROVED' => 'APPROVED' ,'NOT_APPROVED' => 'NOT_APPROVED')));?></td>
                    </tr>
                </table>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subscriptions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>