<DOCTYPE html>
<html>
<head>
<title>Add Grade</title>
</head>
<body>
<form action="store.php" method = "POST" autocomplete = "on">
<table border="1" cellpadding = "10" cellspacing = "0">
	<tr>
		<th colspan = "2"> Grade Registration </th> 
	</tr>
	<tr>
		<td><label for="grade_name">Grade Name</label></td>
		<td><input type="text" name="grade_name" id="grade_name" placeholder = "Enter the grade name.." required></td>
	</tr>
	<tr>
		<td><label for="grade_group">Grade Group</label></td>
		<td><input type="text" name="grade_group" id="grade_group" placeholder = "Enter the grade group.." required></td>
	</tr>
	<tr>
		<td><label for="grade_color">Grade color</label></td>
		<td><input type="color" name="grade_color" id="grade_color" ></td>
	</tr>
	<tr>
		<td><label for="grade_order">Grade order</label></td>
		<td><input type="number" name="grade_order" id="grade_order" ></td>
	</tr>
</table> </br>
<input type="reset" value="Reset"> <input type="submit" value="Add">
	

</form>
</body>
</html>
