<form method="post" action=""> 
<label>Email</label> 
 <input name="data[email]" type="text" maxlength="50" value="" /> 
<br/> 
<label>First Name</label> 
<input type="text" name="data[first]" value="" /></td> 
<br/> 
<label>Last Name</label> 
<input name="data[last]" type="text" value="" /></td> 
<br/> 
<input type="hidden" name="data[id]" value="" /> 
<?php echo $form->end('Submit'); ?>
