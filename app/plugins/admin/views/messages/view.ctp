<div class="messages view">
<h2><?php  __('Message');?></h2>


<table class="tblStyle" cellpadding="0" cellspacing="1">
    <tr></tr>
    <tr>
        <td>Subject</td>
        <td><?php echo $message['Message']['subject']; ?></td>
    </tr>
    <tr>
        <td>Message</td>
        <td><?php echo $message['Message']['message']; ?></td>
    </tr>
    <tr>
        <td>Date</td>
        <td><?php echo $message['Message']['date']; ?></td>
    </tr>
    <tr>
        <td>Status</td>
        <td><?php echo $message['Message']['status']; ?></td>
    </tr>
</table>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Message', true), array('action' => 'edit', $message['Message']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Message', true), array('action' => 'delete', $message['Message']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $message['Message']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages', true), array('action' => 'index')); ?> </li>
		
	</ul>
</div>
