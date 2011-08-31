<div class="terminals form">
<?php echo $this->Form->create('Terminal');?>
	<fieldset>
 		<legend><?php __('Edit Terminal'); ?></legend>
                <table cellpadding="0" cellspacing="0" class="tblStyle">
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
                            <?= $this->Form->input('name',array('label' => false,'size' => 60));;?>
                        </td>
                    </tr>
                </table>
	<?php
		echo $this->Form->input('id');
	 
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Terminal.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Terminal.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Terminals', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Destinations', true), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination', true), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
	</ul>
</div>