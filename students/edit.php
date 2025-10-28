<DOCTYPE html>
<html>
<head>
<title>Edit Students</title>
</head>
<body>
<?php 
	$id = $_GET['id'];
	require_once("../config.php");
	
	$query = "SELECT * FROM employees WHERE id = '$id' ;";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
?>
<form action="update.php" method = "POST" autocomplete = "on">
<table border="1" cellpadding = "10" cellspacing = "0">
	<tr>
		<th colspan = "2"> Edit Student details  </th> 
	</tr>
	<tr>
		<td><label for="first_name">First Name</label></td>
		<td><input type="text" name="first_name" id="first_name" value="<?php echo $row['first_name']?>">
		<input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>"></td>
	</tr>
	<tr>
		<td><label for="last_name">Last Name</label></td>
		<td><input type="text" name="last_name" id="last_name" value="<?php echo $row['last_name']?>"></td>
	</tr>
	<tr>
		<td><label for="email">Email</label></td>
		<td><input type="email" name="email" id="email" value="<?php echo $row['email']?>"></td>
	</tr>
	<tr>
		<td><label for="phone">Phone No</label></td>
		<td><input type="tel" name="phone" id="phone" value="<?php echo $row['phone']?>"></td>
	</tr>
	<tr>
		<td><label for="Salary">Salary</label></td>
		<td>&#8360;<input type="number" name="salary" id="salary" value="<?php echo $row['salary']?>"></td>
	</tr>
	<tr>
		<td><label for="dob">Date Of Birth</label></td>
		<td><input type="date" name="dob" id="dob" value="<?php echo $row['dob']?>"></td>
	</tr>
</table> </br>
<input type="reset" value="Reset"> <input type="submit" value="Save">
	

</form>
</body>
</html>
