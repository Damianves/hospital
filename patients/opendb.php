<?php 
require "config.php";
function connect(){

$conn = mysqli_connect($host, $username, $password) or die ("could not connect");
mysqli_select_db($conn, $database);

}


?>