<div class="currencies view">
<h2><?php  __('Currency');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $currency['Currency']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $currency['Currency']['code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Symbol'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $currency['Currency']['symbol']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Country'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $currency['Currency']['country']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $currency['Currency']['status']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Currency', true), array('action' => 'edit', $currency['Currency']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Currency', true), array('action' => 'delete', $currency['Currency']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $currency['Currency']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Currencies', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Promotions', true), array('controller' => 'promotions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promotion', true), array('controller' => 'promotions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Promotions');?></h3>
	<?php if (!empty($currency['Promotion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('From'); ?></th>
		<th><?php __('To'); ?></th>
		<th><?php __('Fare'); ?></th>
		<th><?php __('Fare In Number'); ?></th>
		<th><?php __('Currency Id'); ?></th>
		<th><?php __('Conditions'); ?></th>
		<th><?php __('Fare Details Short'); ?></th>
		<th><?php __('Promote To Home'); ?></th>
		<th><?php __('Status'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($currency['Promotion'] as $promotion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $promotion['id'];?></td>
			<td><?php echo $promotion['from'];?></td>
			<td><?php echo $promotion['to'];?></td>
			<td><?php echo $promotion['fare'];?></td>
			<td><?php echo $promotion['fare_in_number'];?></td>
			<td><?php echo $promotion['currency_id'];?></td>
			<td><?php echo $promotion['conditions'];?></td>
			<td><?php echo $promotion['fare_details_short'];?></td>
			<td><?php echo $promotion['promote_to_home'];?></td>
			<td><?php echo $promotion['status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'promotions', 'action' => 'view', $promotion['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'promotions', 'action' => 'edit', $promotion['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'promotions', 'action' => 'delete', $promotion['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $promotion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Promotion', true), array('controller' => 'promotions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
