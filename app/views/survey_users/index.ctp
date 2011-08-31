<div class="surveyUsers index">
	<h2><?php __('Survey Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('country_id');?></th>
			<th><?php echo $this->Paginator->sort('age_group');?></th>
			<th><?php echo $this->Paginator->sort('profession');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($surveyUsers as $surveyUser):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $surveyUser['SurveyUser']['id']; ?>&nbsp;</td>
		<td><?php echo $surveyUser['SurveyUser']['name']; ?>&nbsp;</td>
		<td><?php echo $surveyUser['SurveyUser']['email']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($surveyUser['Country']['name'], array('controller' => 'countries', 'action' => 'view', $surveyUser['Country']['id'])); ?>
		</td>
		<td><?php echo $surveyUser['SurveyUser']['age_group']; ?>&nbsp;</td>
		<td><?php echo $surveyUser['SurveyUser']['profession']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $surveyUser['SurveyUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $surveyUser['SurveyUser']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $surveyUser['SurveyUser']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $surveyUser['SurveyUser']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Survey User', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>