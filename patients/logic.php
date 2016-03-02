<?php 
$db= new mysqli('localhost','root','','hospital');
echo $db->connect_error;

$query = "SELECT * FROM clients";
$result = $db->query($query);

$slclient = $result->fetch_all(MYSQLI_ASSOC);