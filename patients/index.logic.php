<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT `patient`.*, `species`.type, `clients`.name AS clientname, `clients`.email, `clients`.phone FROM `patient` INNER JOIN `species` ON `patient`.species_id = `species`.id INNER JOIN `clients` ON `patient`.clients_id = `clients`.id";
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>