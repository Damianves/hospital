<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<label for="name">Name client:</label>
			<input type="text" id="name" name="name" value="<?=$client['name']?>">
		</div>
		<!--<div>
			<label for="name">naam eigenaar:</label>
			<input type="text" id="eigenaar" name="eigenaar" value="<?=$client['eigenaar']?>">
		</div>-->
		<div>
			<label for="name">Phone:</label>
			<input type="text" id="phone" name="phone" value="<?=$client['phone']?>">
		</div>
		<div>
			<label for="name">Email:</label>
			<input type="email" id="email" name="email" value="<?=$client['email']?>">
			
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>