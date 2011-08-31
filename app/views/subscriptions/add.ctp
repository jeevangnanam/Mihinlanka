<div id="contentInner">
<div class="subscriptions form">

<h2><?= __('Be the first to know'); ?></h2><br />
<?= __('Be the first to know det more'); ?><br /><br />


<?php echo $this->Form->create('Subscription');?>
<table class="tblStyle" cellpadding="0" cellspacing="0" border=0  width="100%">
<tr></tr>
<tr>
<td>Title</td><td><?= $this->Form->input('title',array('label'=>false,'type' => 'select','options' => array('MR' => 'MR','MRS' => 'MRS' ,'MISS' => 'MISS' , 'MS' => 'MS'))); ?></td>
</tr>

<tr>
<td>Full Name</td><td><?= $this->Form->input('fullname',array('label'=>false,'size' => '40')); ?></td>
</tr>


<tr>
<td>Address</td><td><?= $this->Form->input('address',array('label'=>false,'cols' => '40')); ?></td>
</tr>

<tr>
<td>Phone
  </td><td><?= $this->Form->input('phone_resident',array('label'=>false)); ?><br /><small>(COUNTRY CODE + AREA + NO  eg: </small>94114374324)</td>
</tr>

<tr>
<td>Phone Office
  </td><td><?= $this->Form->input('phone_office',array('label'=>false)); ?><br /><small>(COUNTRY CODE + AREA + NO  eg: </small>94114374324)</td>
</tr>

<tr>
<td>Email</td><td><?= $this->Form->input('email',array('label'=>false,'size' => '40')); ?></td>
</tr>

<tr>
<td>Country</td><td><?= $this->Form->input('country_id',array('label'=>false)); ?></td>
</tr>

<tr>
<td></td><td><?= $this->Form->button('Subscribe', array('type'=>'submit','escape'=>true,'style' => 'padding:5px'));?></td>
</tr>

	</table>
    <br />
<?php echo $this->Form->end();?>
</div>
</div>