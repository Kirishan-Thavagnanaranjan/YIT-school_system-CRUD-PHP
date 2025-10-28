<?php 
	$id = $_GET['id'];
	require_once("../config.php");
	
	$query = "SELECT * FROM grade WHERE id = '$id' ;";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
?>

<DOCTYPE html>
<html>
<head>
<title><?php echo $row['grade_name']?>'s details</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<form action="index.php" method = "POST" autocomplete = "on">
<table border="1" cellpadding = "10" cellspacing = "0">
	<tr>
		<th colspan = "2"> <?php echo $row['grade_name']?>'s details  </th> 
	</tr>
	<tr>
		<td><label for="grade_name">Grade Name</label></td>
		<td><input type="text" name="grade_name" id="grade_name" value="<?php echo $row['grade_name'] ?>">
			<input type = "hidden" name="id" id="id" value="<?php echo $row['id'] ?>"></td>
	</tr>
	<tr>
		<td><label for="grade_group">Grade Group</label></td>
		<td><input type="text" name="grade_group" id="grade_group" value="<?php echo $row['grade_group'] ?>"></td>
	</tr>
	<tr>
		<td><label for="grade_color">Grade color</label></td>
		<td><input type="color" name="grade_color" id="grade_color" value="<?php echo $row['grade_color'] ?>"></td>
	</tr>
	<tr>
		<td><label for="grade_order">Grade order</label></td>
		<td><input type="number" name="grade_order" id="grade_order" value="<?php echo $row['grade_order'] ?>"></td>
	</tr>
</table> </br>
<a href="index.php"><button type="button">Back</button></a>
	

</form>
</body>
</html>
