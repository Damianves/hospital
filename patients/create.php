<?php
	require_once "create.logic.php";
	include "../common/header.php";
	//include_once "func.inc.php";
	require_once"logic.php";
	require_once"../species/index.logic.php";
	
	

?>
	<h1>New patiënt</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name:</label>
			<input required = "required" type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Select species:</label>
				<select name="species_id" id="type">
					<?php foreach ($species as $specie): ?>
					<option value="<?= $specie['id'];?>"><?= $specie['type'];?></option>
					<?php endforeach; ?>
				</select>
		</div>
		<div>
			<label for="name">status:</label>
			<textarea required = "required" id="status" name="status"></textarea>
		</div>
		<div>
		<label for="name">gender:</label>
			<input type="radio" id="male" name="gender" value="male"> male 
			<input type="radio" id="female" name="gender" value="female"> female 

		</div>
		<div>
			<label for="name">Select client:</label>
				<select name="client_id" id="client_id">
					<?php foreach ($slclient as $slclients): ?>
					<option value="<?= $slclients['id'];?>"><?= $slclients['name'];?></option>
					<?php endforeach; ?>
				</select>

				
			</p>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
	
?>