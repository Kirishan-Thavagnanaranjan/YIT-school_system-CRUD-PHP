<DOCTYPE html>
<html>
<head>
<title>Edit Students</title>
</head>
<body>
<?php 
	$id = $_GET['id'];
	require_once("../config.php");
	
	$query = "SELECT * FROM students WHERE id = '$id' ;";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
?>
<form action="../students/update.php" method = "POST" >
<table border="1" cellpadding = "10" cellspacing = "0">
	<tr>
		<th colspan = "2"> Edit Student details  </th> 
	</tr>
	<tr>
		<td><label for="father_name">Father Name</label></td>
		<td><input type="text" name="father_name" id="father_name" value="<?php echo $row['father_name'] ?>">
			<input type = "hidden" name="id" id="id" value="<?php echo $row['id'] ?>"></td>
	</tr>
	<tr>
		<td><label for="student_name">Student Name</label></td>
		<td><input type="text" name="student_name" id="student_name" value="<?php echo $row['student_name'] ?>"></td>
	</tr>
	<tr>
		<td><label for="admission_number">Admission Number</label></td>
		<td><input type="text" name="admission_number" id="admission_number" value="<?php echo $row['admission_number'] ?>"></td>
	</tr>
	<tr>
		<td><label for="grade_id">Grade ID</label></td>
		<td><input type="Number" name="grade_id" id="grade_id" value="<?php echo $row['grade_id'] ?>"></td>
	</tr>
	<tr>
		<td><label for="nic">NIC</label></td>
		<td><input type="number" name="nic" id="nic" value="<?php echo $row['nic'] ?>"></td>
	</tr>
	<tr>
		<td><label for="dob">Date Of Birth</label></td>
		<td><input type="date" name="dob" id="dob" value="<?php echo $row['dob'] ?>"></td>
	</tr>
	<tr>
		<td><label for="gender">Gender</label></td>
		<td>
			<input type="radio" name="gender" id="gender" <?php if(isset($row['gender']) && $row['gender']=="male") { echo "checked";}?>  value= "male" >Male 
			<input type="radio" name="gender" id="gender" <?php if(isset($row['gender']) && $row['gender']=="female") { echo "checked";} ?> value= "female" >Female 
			<input type="radio" name="gender" id="gender" <?php if(isset($row['gender']) && $row['gender']=="other") { echo "checked";}?> value= "other" >Other </td>
	</tr>
	<tr>
		<td><label for="telephone_number">Phone Number</label></td>
		<td><input type="tel" name="telephone_number" id="telephone_number" value="<?php echo $row['telephone_number'] ?>"></td>
	</tr>
	<tr>
		<td><label for="address">Address</label></td>
		<td><input type="text" name="address" id="address" value="<?php echo $row['address'] ?>"></td>
	</tr>
</table> </br>
<input type="reset" value="Reset"> <input type="submit" value="Save">
	

</form>
</body>
</html>
