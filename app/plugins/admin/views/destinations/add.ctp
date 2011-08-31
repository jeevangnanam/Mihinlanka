<div class="destinations form">
<?php echo $this->Form->create('Destination');?>
	<fieldset>
 		<legend><?php __('Add Destination'); ?></legend>
	

                 <table class="tblStyle" cellpadding="0" cellspacing="1">
                    <tr></tr>
                    <tr>
                        <td>
                            Code
                        </td>
                        <td>
                            <?=$this->Form->input('code',array('label' => false));?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Place
                        </td>
                        <td>
                            <?=$this->Form->input('place',array('label' => false));?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Country
                        </td>
                        <td>
                            <?=$this->Form->input('country_id',array('label' => false));?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>
                            <?=$this->Form->input('status',array('label'=>false, 'type' => 'select','options' => array('APPROVED' => 'APPROVED' , 'NOT_APPROVED' => 'NOT_APPROVED')));?>
                        </td>
                    </tr>
                </table>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Destinations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terminals', true), array('controller' => 'terminals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal', true), array('controller' => 'terminals', 'action' => 'add')); ?> </li>
	</ul>
</div>