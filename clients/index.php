<?php
	require_once "index.logic.php";
	include "../common/header.php";
	
?>






<?php
	include "../common/header.php";
?>
	
	
	
<?php
	include "../common/footer.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>client</title>
</head>
<body>
<h1>Clients</h1>
<table>
	<thead>
		<tr>
			<th>Name client</th>
			<th>Email</th>
			<th>phone</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
<?php
	foreach ($clients as $client) :
?>

	<tr>
		<td><?php echo  $client['name'];?></td>
		<td><?php echo  $client['email'];?></td>
		<td><?php echo  $client['phone'];?></td>
		<td class="center"><a href="edit.php?id=<?=$client['id']?>">edit</a></td>
		<td class="center"><a href="delete.php?id=<?=$client['id']?>">delete</a></td>
	</tr>

<?php 
	endforeach;
?>
</table>
	<p><a href="../clients/create.php">voeg een client toe</a></p>
</body>
</html>