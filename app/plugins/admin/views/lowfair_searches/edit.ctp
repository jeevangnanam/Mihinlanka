<div class="lowfairSearches form">
<?php echo $this->Form->create('LowfairSearch');?>
	<fieldset>
 		<legend><?php __('Edit Lowfare Search'); ?></legend>
        
        <table cellpadding="0" cellspacing="0" class="tblStyle">
                    <tr></tr>
                   
                    
                    <tr>
                        <td>
                            From
                        </td>
                        <td>
                            <?=$this->Form->input('from', array('label' => false));?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            To
                        </td>
                        <td>
                            <?=$this->Form->input('to', array('label' => false));?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            One way price
                        </td>
                        <td>
                            <?=$this->Form->input('oneway_price', array('label' => false));?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Return price
                        </td>
                        <td>
                            <?=$this->Form->input('return_price' , array('label' => false));?>
                        </td>
                    </tr>
</table>
	</fieldset>
     <?=$this->Form->input('id');?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('LowfairSearch.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('LowfairSearch.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lowfair Searches', true), array('action' => 'index'));?></li>
	</ul>
</div>