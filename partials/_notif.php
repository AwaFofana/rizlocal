<?php
if(!empty($_SESSION["notif"]["msg"]) && !empty($_SESSION["notif"]["type"])) :?>
<section style="top: 20%;position:fixed;right:20%;display:block;width:50%;">
	<div class="alert alert-dismissible alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<h4>Notification!</h4>
		<p><?=$_SESSION["notif"]["msg"]?>.</p>
	</div>
</section>
<?php $_SESSION["notif"] = []; endif; ?>