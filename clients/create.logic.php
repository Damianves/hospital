<?php
	$connection = new mysqli('localhost','root','','hospital');
	echo $connection->connect_error;
	
	$name=$_GET['name'];
	$phone=$_GET['phone'];
	$email=$_GET['email'];
	$sql = "INSERT INTO clients(name, phone, email)VALUES ('$name','$phone','$email')";
	
	$result = $connection->query($sql);
	header("Location: ./");
	
?>