<div class="terminals form">
<?php echo $this->Form->create('Terminal');?>
	<fieldset>
 		<legend><?php __('Add Terminal'); ?></legend>
                <table class="tblStyle" cellpadding="0" cellspacing="1">
                    <tr></tr>
                    <tr>
                        <td>
                            Destination
                        </td>
                        <td>
                            <?=$this->Form->input('destination_id',array('label' => false));?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            <?=$this->Form->input('name',array('label' => false));?>
                        </td>
                    </tr>
                </table>
	 
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Terminals', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Destinations', true), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination', true), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
	</ul>
</div>