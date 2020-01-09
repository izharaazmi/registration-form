<?php if(count($errors)>0):?>
<span style="color:red;font-size:14px;">
<?php foreach($errors as $errors):?>
<p>
<?php echo $errors;?></p>
<?php endforeach?>
</span>
</div>
<?php endif ?>