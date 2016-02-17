<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New patiënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Species:</label>
			<input type="text" id="species" name="species">
		</div>
		<div>
			<label for="name">status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
		<label for="name">gender:</label>
			<input type="radio" id="male" name="gender" value="male"> male 
			<input type="radio" id="female" name="gender" value="female"> female 

		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>