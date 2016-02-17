<?php
	$connection = new mysqli('localhost','root','','hospital');
	echo $connection->connect_error;
	
	
	$type=$_GET['type'];
	$sql = "INSERT INTO species(type)VALUES ('$type')";
	
	$result = $connection->query($sql);
	header("Location: ./");
	
?>