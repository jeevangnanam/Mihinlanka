<div class="flightRoutes form">
<?php echo $this->Form->create('FlightRoute');?>
	<fieldset>
 		<legend><?php __('Add Flight Route'); ?></legend>
	

                <table class="tblStyle" cellpadding="0" cellspacing="1">
                    <tr></tr>
                    <tr>
                        <td>
                            Route
                        </td>
                        <td>
                            <?=$this->Form->input('route',array('label' => false));?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>
                            <?=$this->Form->input('status',array('label' => false));?>
                        </td>
                    </tr>
                </table>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Flight Routes', true), array('action' => 'index'));?></li>
	</ul>
</div>