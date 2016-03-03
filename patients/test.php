<?php
require_once "db.inc.php";
function connect (){
$username ="root";
$password ="";
$host= "localhost";
$database="hospital";



mysqli_connect($host, $username, $password) or die ("could not connect");
mysqli_select_db($conn, $database);



}

//mysqli_close($conn);



function query(){
$query= mysqli_query ("SELECT name FROM clients");


while ($row = mysqli_fetch_array($query)){
echo '<option value="'  . $row ['name'].'">'.$row ['name'].'</option>';


}


}



?>