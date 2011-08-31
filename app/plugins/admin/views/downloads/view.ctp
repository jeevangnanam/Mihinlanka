<div class="downloads view">
<h2><?php  __('Download');?></h2>

 <div style="float:left;width:75%">
<table class="tblStyle" cellpadding="0" cellspacing="1">
      <tr></tr>
      
      <tr>
      	<td><?php __('Id'); ?></td>
        <td><?php echo $download['Download']['id']; ?></td>
      </tr>
      
      <tr>
      	<td><?php __('Site Section'); ?></td>
        <td><?php echo $this->Html->link($download['SiteSection']['id'], array('controller' => 'site_sections', 'action' => 'view', $download['SiteSection']['id'])); ?></td>
      </tr>
      
      <tr>
      	<td><?php __('File Type'); ?></td>
        <td><?php echo $this->Html->link($download['FileType']['name'], array('controller' => 'file_types', 'action' => 'view', $download['FileType']['id'])); ?></td>
      </tr>
      <tr>
      	<td><?php __('Title'); ?></td>
        <td><?php echo $download['Download']['title']; ?></td>
      </tr>
      <tr>
      	<td><?php __('Path'); ?></td>
        <td><?php echo $download['Download']['path']; ?></td>
      </tr>
      <tr>
      	<td><?php __('Date'); ?></td>
        <td><?php echo $download['Download']['date']; ?></td>
      </tr>
      <tr>
      	<td><?php __('Status'); ?></td>
        <td><?php echo $download['Download']['status']; ?></td>
      </tr>
    </table>
  </div> 

</div>
<div class="actions">
 
	<ul>
		<li><?php echo $this->Html->link(__('Edit Download', true), array('action' => 'edit', $download['Download']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Download', true), array('action' => 'delete', $download['Download']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $download['Download']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Downloads', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Download', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Site Sections', true), array('controller' => 'site_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Section', true), array('controller' => 'site_sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Types', true), array('controller' => 'file_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Type', true), array('controller' => 'file_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
