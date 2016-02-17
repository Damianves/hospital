<?php
require_once "index.logic.php";
	include "../common/header.php";
?>

<?php
	include "../common/footer.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>species</title>
</head>
<body>
	<h1>Species</h1>
		<p></p>
<table>
	<thead>
		<tr>
			<!--<th>Specie</th>-->
			<th>type</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>

<?php
foreach ($species as $specie) :
?>

	<tr>
		<td><?php echo  $specie['type'];?></td>
		<!--<td><?php echo  $specie['rijk'];?></td>-->
		<td class="center"><a href="edit.php?id=<?=$specie['id']?>">edit</a></td>
		<td class="center"><a href="delete.php?id=<?=$specie['id']?>">delete</a></td>
	</tr>

<?php 
	endforeach;
?>
</table>
	<p><a href="../species/create.php">voeg een specie toe</a></p>
	
	

</body>
</html>