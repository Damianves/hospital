<?php
require "opendb.php";
$query= "SELECT name FROM clients";
$data = mysqli_query($conn, $query);

$makes = array();

while ($row = mysqli_fetch_array($data))
{

array_push($makes, $row['name']);

}

echo $makes;

require "closedb.php";

?>