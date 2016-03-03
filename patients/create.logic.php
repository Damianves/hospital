<?php
	if (isset($_POST['gender']) ){
		$db = new mysqli('localhost','root','','hospital');
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$status = $db->escape_string($_POST["status"]);
		$gender= $db -> escape_string($_POST["gender"]);
		$species_id=$db-> escape_string($_POST["species_id"]);
		$client_id= $db-> escape_string($_POST["client_id"]);
		
		var_dump($_POST);
		// Prepare query and execute
		$query = "INSERT INTO patient (name, status, gender, clients_id, species_id) VALUES ('$name','$status','$gender', $client_id, $species_id)";
		$result = $db->query($query);
   		
   		//echo $query;
   		//header("Location: ./");
	}
	
    // Tell the browser to go back to the index page.

?>