<div class="travelAgents index">
	<h2><?php __('Travel Agents');?></h2>
         <div class="message">Search the agents  :
            <?= $this->Form->create('TravelAgent',array('action' => 'index'));?>
             <?=$this->Form->input('agents',array('label' =>false ,'style' => ' background: url(/img/icons/search.png) no-repeat scroll 0% 0% white; padding-left: 15px;' , "class" => "agents showFilter1"));?>
                        

             <?php echo $this->Form->end(__('Search..', true));?>
</div>
	<table cellpadding="0" cellspacing="0" class="tblStyle">
	<tr>
			
			<th><?php echo $this->Paginator->sort('country_id');?></th>
			<th ><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			
			
			<th><?php echo $this->Paginator->sort('status');?></th>
			
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($travelAgents as $travelAgent):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
	
		<td>
			<?php echo $this->Html->link($travelAgent['Country']['name'], array('controller' => 'countries', 'action' => 'view', $travelAgent['Country']['id'])); ?>
		</td>
		<td class="agents showFilter1"><?php echo $travelAgent['TravelAgent']['name']; ?>&nbsp;</td>
		<td><?php echo $travelAgent['TravelAgent']['address']; ?>&nbsp;</td>
		<td><?php echo $travelAgent['TravelAgent']['phone']; ?>&nbsp;</td>
		
		
		<td><?php echo $travelAgent['TravelAgent']['status']; ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image("/img/icons/zoom.png", array("alt" => "View","title" => "View")), array('action' => 'view', $travelAgent['TravelAgent']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link( $this->Html->image("/img/icons/page_white_edit.png", array("alt" => "Edit","title" => "Edit")), array('action' => 'edit', $travelAgent['TravelAgent']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image("/img/icons/delete.png", array("alt" => "Delete","title" => "Delete")), array('action' => 'delete', $travelAgent['TravelAgent']['id']),array('escape' => false), sprintf(__('Are you sure you want to delete  %s?', true), $travelAgent['TravelAgent']['name'])); ?>
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
		<li><?php echo $this->Html->link(__('New Travel Agent', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script>

    $($(".agents")).showFilter("table tbody tr ", { criteria: function(e) { return [e.children(".agents").text()]; } });
</script>