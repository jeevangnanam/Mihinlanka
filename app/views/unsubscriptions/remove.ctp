<div id="contentInner">
<div class="subscriptions form">

<h2><?= __('Be the first to know'); ?></h2><br />
<?= __('Be the first to know det more'); ?><br /><br />


<?php echo $this->Form->create('Unsubscription',array("action"=>"remove"));?>
<table class="tblStyle" cellpadding="0" cellspacing="0" border=0  width="100%">
<tr></tr>

<tr>
<td>Email</td><td><?= $this->Form->input('email',array('label'=>false,'size' => '40')); ?></td>
</tr>

<tr>
<td></td><td><?= $this->Form->button('Unsubscribe', array('type'=>'submit','escape'=>true,'style' => 'padding:5px'));?></td>
</tr>

	</table>
    <br />
<?php echo $this->Form->end();?>
</div>
</div>