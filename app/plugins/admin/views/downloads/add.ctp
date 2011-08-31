<div class="downloads form"> <?php echo $this->Form->create('Download',array('enctype' => 'multipart/form-data'));?>
  <fieldset>
    <legend>
    <?php __('Add Download'); ?>
    </legend>
    <table class="tblStyle" cellpadding="0" cellspacing="1">
      <tr></tr>
      <tr>
        <td>Section </td>
        <td><?= $this->Form->input('section_id',array('options' => $siteSections,'label' => false));?></td>
      </tr>
      
       <tr>
        <td>File Type </td>
        <td><?= $this->Form->input('file_type_id',array('label' => false));?></td>
      </tr>
       <tr>
        <td>Title </td>
        <td><?= $this->Form->input('title',array('size' => 60 , 'label' => false));?></td>
      </tr>
       <tr>
        <td>File </td>
        <td><?= $this->Form->input('file.path',array('type' => 'file','label' => false));?></td>
      </tr>
       <tr>
        <td>Status </td>
        <td><?= $this->Form->input('status',array('options'=> array('APPROVED' => 'APPROVED','NOT_APPROVED' => 'NOT_APPROVED')));?></td>
      </tr>
      
    </table>
  </fieldset>
  <?= $this->Form->input('date',array('type' => 'hidden','label' => false,'value' => date('Y-m-d h:i:s')));?>
  <?php echo $this->Form->end(__('Save', true));?> </div>
<div class="actions">
  <h3>
    <?php __('Actions'); ?>
  </h3>
  <ul>
    <li><?php echo $this->Html->link(__('List Downloads', true), array('action' => 'index'));?></li>
    <li><?php echo $this->Html->link(__('List Site Sections', true), array('controller' => 'site_sections', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Site Section', true), array('controller' => 'site_sections', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('List File Types', true), array('controller' => 'file_types', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New File Type', true), array('controller' => 'file_types', 'action' => 'add')); ?> </li>
  </ul>
</div>
