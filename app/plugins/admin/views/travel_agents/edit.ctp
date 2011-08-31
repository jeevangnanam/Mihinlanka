<div class="travelAgents form">
<?php echo $this->Form->create('TravelAgent');?>
	<fieldset>
 		<legend><?php __('Edit Travel Agent'); ?></legend>

                <table class="tblStyle" cellpadding="0" cellspacing="1">
                    <tr><?=$this->Form->input('id');?></tr>
                    <tr>
                        <td>Country</td>
                        <td><?=$this->Form->input('country_id',array('label' =>false));?></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?=$this->Form->input('name',array('label' =>false ,'size' => 60));?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><?=$this->Form->input('address',array('label' =>false));?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?=$this->Form->input('email',array('label' =>false));?></td>
                    </tr>
                    <tr>
                        <td>Email2</td>
                        <td><?=$this->Form->input('email2',array('label' =>false));?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><?=$this->Form->input('phone2',array('label' =>false));?></td>
                    </tr>
                    <tr>
                        <td>Fax</td>
                        <td><?=$this->Form->input('fax',array('label' =>false));?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><?=$this->Form->input('status',array('type' => 'select','options' => array('APPROVED' => 'APPROVED','NOT_APPROVED'=>'NOT_APPROVED'),'label' => false));?></td>
                    </tr>
                    <tr>
                        <td>Order</td>
                        <td><?=$this->Form->input('order',array('label' =>false));?></td>
                    </tr>
                </table>
	
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('TravelAgent.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('TravelAgent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Travel Agents', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>