<div class="alertMessages form">
<?php echo $this->Form->create('AlertMessage');?>
	<fieldset>
 		<legend><?php __('Edit Alert Message'); ?></legend>
	          <table class="tblStyle" cellpadding="0" cellspacing="1">
                    <tr></tr>

    <tr>
    <td>Message </td><td><?= $this->Form->input('message',array('label' =>false));?></td>
    </tr>
    <tr>
    <td>Link </td><td><?= $this->Form->input('link',array('label' =>false));?></td>
    </tr>
    <tr>
    <td>Color </td><td><?= $this->Form->input('color',array( 'id' => 'color','label' =>false,'style' => 'background-image:url(/img/icons/color_wheel.png);background-repeat: no-repeat;background-position: right;'));?></td>
    </tr>
    <tr>
    <td>Status </td><td><?= $this->Form->input('status',array('options' => array('APPROVED'=> 'APPROVED' ,'NOT_APPROVED' => 'NOT_APPROVED')));?></td>
    </tr>
    </table>
    <?= $this->Form->input('id',array('label' =>false));?>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('AlertMessage.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('AlertMessage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Alert Messages', true), array('action' => 'index'));?></li>
	</ul>
</div>