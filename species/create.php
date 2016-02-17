<?php 
$connection = new mysqli('localhost','root','','hospital');
echo $connection->connect_error;

	$sql = "SELECT * FROM species";

	$result = $connection->query($sql);
	$species = $result->fetch_all(MYSQLI_ASSOC);

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>add species</title>
	</head>
	<body>
	<form action="create.logic.php" method="GET">
	<label><input type="text" name="type" id="type" placeholder="Type"></label></br>
	
	<label><input type="submit" value="save"></label>

	</form>
	
	</body>
	</html>
