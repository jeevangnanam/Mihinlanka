<?if(isset($errors)):?>
 <?= $this->element('messages/error'); ?>
<?endif;?>

<?if(isset($message)):?>
 <?= $this->element('messages/message'); ?>
<?endif;?>
<?if(isset($info)):?>
 <?= $this->element('messages/info'); ?>
<?endif;?>