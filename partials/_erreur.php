<?php 
if(!empty($erreurs)) :?>
<div class="alert alert-dismissible alert-danger">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<?php foreach ($erreurs as $k => $v) :?>
		<?= $v ?> <br>
	<?php endforeach;?>	
</div>
<?php endif; ?>