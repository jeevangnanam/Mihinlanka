<div class="shoppingOrders form">
<?php echo $this->Form->create('ShoppingOrder');?>
<fieldset>
   <?= $this->Form->input('id');?>
 		<legend><?php __('Edit Shopping Order'); ?></legend>
    <table class="tblStyle" cellspacing="1" cellpadding="0">
        <tr></tr>
        <tr>
            <td>
                Name
            </td>
            <td>
                <?=$this->Form->input('name' ,array('label' => false));?>
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td>
                <?=$this->Form->input('email' ,array('label' => false));;?>
            </td>
        </tr>
        <tr>
            <td>
                Phone
            </td>
            <td>
                <?=$this->Form->input('phone' ,array('label' => false));?>
            </td>
        </tr>
        <tr>
            <td>
                Ticket No
            </td>
            <td>
                <?=$this->Form->input('ticket_no' ,array('label' => false));?>
            </td>
        </tr>
        <tr>
            <td>
                Flight
            </td>
            <td>
                <?=$this->Form->input('flight_date' ,array('label' => false));?>
            </td>
        </tr>
        <tr>
            <td>
                Order date
            </td>
            <td>
                <?=$this->Form->input('order_date' ,array('label' => false));?>
            </td>
        </tr>
        <tr>
            <td>
                Quantity
            </td>
            <td>
                <?=$this->Form->input('quantity' ,array('label' => false));?>
            </td>
        </tr>
        <tr>
            <td>
                Message
            </td>
            <td>
                <?=$this->Form->input('message' ,array('label' => false));?>
            </td>
        </tr>
        <tr>
            <td>
                Status
            </td>
            <td>
                <?=$this->Form->input('status',array('type' =>'select','label' => false ,'options'=> array('PROCESSED' => 'PROCESSED', 'NOT_PROCESSED_YET' => 'NOT_PROCESSED_YET')));?>
            </td>
        </tr>
    </table>
	
	
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
    <br /><br />&nbsp;<br /><br />&nbsp;
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ShoppingOrder.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ShoppingOrder.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Shopping Orders', true), array('action' => 'index'));?></li>
	</ul>
</div>