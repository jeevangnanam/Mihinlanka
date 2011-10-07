<div id="mailchimp"> 
<p><?php echo $html->link('Add New User to List', array('action' => 'mc_add', 'id' => $id)); ?></p> 

<?php echo $mailchimp->linkedMembersList($lists, $id, '/' . $this->params['controller'] .  '/mc_remove/'); ?> 
</div> 