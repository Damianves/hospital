<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit specie</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$specie['id']?>">
			<label for="name">type:</label>
			<input type="text" id="type" name="type" value="<?=$specie['type']?>">
		</div>
		
		
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>