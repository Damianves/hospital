<?php
	if (isset($_POST['gender']) ){
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$gender= $db -> escape_string($_POST["gender"]);
		$clientname= $db-> escape_string($_POST["clientname"]);
		
		// Prepare query and execute
		$query = "INSERT INTO patient (name, species, status, gender) VALUES ('$name',$species,'$status','$gender')";
		$result = $db->query($query);
   		
   		echo $query;
   		//header("Location: ./");
	}
	
    // Tell the browser to go back to the index page.

?>