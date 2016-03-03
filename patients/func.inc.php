<?php
require_once "db.inc.php";
function connect (){
$username ="root";
$password ="";
$host= "localhost";
$database="hospital";



$conn = mysqli_connect($host, $username, $password) or die ("could not connect");
mysqli_select_db($conn, $database);



}

//mysqli_close($conn);



function query(){
$query= mysqli_query ("SELECT name FROM clients");
//$data = mysqli_query($conn, $query);

//$makes = array();

while ($row = mysqli_fetch_array($data))
{
echo '<option value="'  . $row ['name'].'">'.$row ['name'].'</option>';
//array_push($makes, $row['name']);

}

//echo $makes;


	//$sql= mysqli_query("SELECT name FROM clients");
	//while ($record= mysqli_fetch_array($sql)){
	//echo'<option value="'  . $row ['name'].'">'.$row ['name'].'</option>';

	//	}
}



?>