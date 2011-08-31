<div class="promotions view">
<h2><?php  __('Promotion');?></h2>


<table class="tblStyle" cellpadding="0" cellspacing="1" >
    <tr>
        <th>From</th>
        <th>To</th>
        <th>Fare</th>
        <th>Fare in number</th>
        <th>Currency</th>
        <th>Conditions</th>
        <th>Fare details short</th>
        <th>Promoted on home</th>
        <th>Status</th>

    </tr>
    <tr>
        <td>
            <?php echo $promotion['From']['code']; ?>
        </td>
        <td>
            <?php echo $promotion['To']['code']; ?>
        </td>
        <td>
            <?php echo $promotion['Promotion']['fare']; ?>
        </td>
        <td>
            <?php echo $promotion['Promotion']['fare_in_number']; ?>
        </td>
        <td>
            <?php echo $promotion['Currency']['code']; ?>
        </td>
        <td>
            <?php echo $promotion['Promotion']['conditions']; ?>
        </td>
        <td>
            <?php echo $promotion['Promotion']['fare_details_short']; ?>
        </td>
        <td>
            <?php echo $promotion['Promotion']['promote_to_home']; ?>
        </td>
        <td>
            <?php echo $promotion['Promotion']['status']; ?>
        </td>
    </tr>

</table>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Promotion', true), array('action' => 'edit', $promotion['Promotion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Promotion', true), array('action' => 'delete', $promotion['Promotion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $promotion['Promotion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Promotions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promotion', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
