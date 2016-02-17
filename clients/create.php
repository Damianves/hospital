<?php
	$connection = new mysqli('localhost','root','','hospital');
	echo $connection->connect_error;
	
	
	$sql = "SELECT * FROM clients";
	
	$result = $connection->query($sql);
	$clients = $result->fetch_all(MYSQLI_ASSOC);
	
	


?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../common/main.css">
	<title>add client</title>
</head>
<body>
<form action="create.logic.php" method="GET">
	<label>Name client<input type="text" name="name" id="name" placeholder="Name client"></label><br>
	<label>phone<input type="text" name="phone" id="phone" placeholder="Phone"></label><br>
	<label>Email<input type="email" name="email" id="email" placeholder="Email"></label></br>
	
	<label><input type="submit" value="save"></label>
	</form>
<table>
<?php
foreach ($clients as $client) :
	?>
<tr>

<td><?php echo  $client['name'];?></td>
<td><?php echo  $client['phone'];?></td>
<td><?php echo  $client['email'];?></td>


</tr>

<?php 
endforeach;
?>
</table>



</body>
</html>