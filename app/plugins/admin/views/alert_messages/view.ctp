<div class="alertMessages view">
<h2><?php  __('Alert Message');?></h2>

<table class="tblStyle" cellpadding="0" cellspacing="1">
                    <tr></tr>
                    <tr>
                    	<td><?php __('Id'); ?></td><td><?php echo $alertMessage['AlertMessage']['id']; ?></td>
                    </tr>
                    
                    <tr>
                    	<td><?php __('Message'); ?></td><td><?php echo $alertMessage['AlertMessage']['message']; ?></td>
                    </tr>
                    
                    <tr>
                    	<td><?php __('Link'); ?></td><td><?php echo $alertMessage['AlertMessage']['link']; ?></td>
                    </tr>
                    
                    <tr>
                    	<td><?php __('Color'); ?></td><td><?php echo $alertMessage['AlertMessage']['color']; ?></td>
                    </tr>
                    
                    <tr>
                    	<td><?php __('Status'); ?></td><td><?php echo $alertMessage['AlertMessage']['status']; ?></td>
                    </tr>
                    
                    
                    </table>
	
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alert Message', true), array('action' => 'edit', $alertMessage['AlertMessage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Alert Message', true), array('action' => 'delete', $alertMessage['AlertMessage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $alertMessage['AlertMessage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alert Messages', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alert Message', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
