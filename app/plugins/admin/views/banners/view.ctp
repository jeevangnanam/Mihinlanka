<table class="tblStyle" border="0">
    <tr></tr>
    <tr><th>ID</th></tr>
    <tr><td><?php echo $banner['Banner']['id']; ?></td></tr>
    <tr><th>Name</th></tr>
    <tr><td><?php echo $banner['Banner']['name']; ?></td></tr>
    <tr><th>Description</th></tr>
    <tr><td><?php echo $banner['Banner']['description']; ?></td></tr>
    <tr><th>File path</th></tr>
    <tr><td><img src="<?= $banner['Banner']['file_path']; ?>" width=400 height=100 /></td></tr>
    <tr><th>Url</th></tr>
    <tr><td><?php echo $banner['Banner']['url']; ?></td></tr>
    <tr><th>Status</th></tr>
    <tr><td><?php echo $banner['Banner']['status']; ?></td></tr>
</table>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Banner', true), array('action' => 'edit', $banner['Banner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Banner', true), array('action' => 'delete', $banner['Banner']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $banner['Banner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Banners', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banner', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
