<div class="lowfairSearches form">
<?php echo $this->Form->create('LowfairSearch');?>
	<fieldset>
 		<legend><?php __('Add Lowfare Search'); ?></legend>
	
    
    <table class="tblStyle" cellpadding="0" cellspacing="1">
                    <tr></tr>
                    <tr>
                        <td>
                            From
                        </td>
                        <td>
                            <?=$this->Form->input('from' , array('label' => false));?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            To
                        </td>
                        <td>
                            <?=$this->Form->input('to' , array('label' => false));?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Oneway Price
                        </td>
                        <td>
                            <?=$this->Form->input('oneway_price' , array('label' => false));?>
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
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lowfare Searches', true), array('action' => 'index'));?></li>
	</ul>
</div>